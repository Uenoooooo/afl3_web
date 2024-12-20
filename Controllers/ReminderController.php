<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use App\Models\Type;
use App\Models\Frequency;
use App\Models\Category;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::with(['type', 'frequency', 'category', 'paymentMethod'])
            ->orderBy('start_date', 'asc')
            ->paginate(10);

        return view('reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('reminders.create', [
            'types' => Type::all(),
            'frequencies' => Frequency::all(),
            'categories' => Category::all(),
            'payment_methods' => PaymentMethod::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reminder_name' => 'required|string|max:255',
            'reminder_desc' => 'required|string',
            'type_id' => 'required|exists:types,id',
            'frequency_id' => 'required|exists:frequencies,id',
            'category_id' => 'nullable|exists:categories,id',
            'payment_method_id' => 'nullable|exists:payment_methods,id',
            'reminder_amount' => 'nullable|numeric|min:0',
            'start_date' => 'required|date|after_or_equal:today',
        ]);
    
        if (!$validated['type_id']) {
            return redirect()->back()->withErrors(['type_id' => 'Please select a valid type']);
        }
        if (!$validated['frequency_id']) {
            return redirect()->back()->withErrors(['frequency_id' => 'Please select a valid frequency']);
        }
    
        Reminder::create($validated);
    
        return redirect()->route('reminders.index')->with('success', 'Reminder created successfully.');
    }

    public function edit(Reminder $reminder)
    {
        return view('reminders.edit', [
            'reminder' => $reminder,
            'types' => Type::all(),
            'frequencies' => Frequency::all(),
            'categories' => Category::all(),
            'payment_methods' => PaymentMethod::all(),
        ]);
    }

    public function update(Request $request, Reminder $reminder)
    {
        $validated = $request->validate([
            'reminder_name' => 'required|string|max:255',
            'reminder_desc' => 'required|string',
            'type_id' => 'required|exists:types,id',
            'frequency_id' => 'required|exists:frequencies,id',
            'category_id' => 'nullable|exists:categories,id',
            'payment_method_id' => 'nullable|exists:payment_methods,id',
            'reminder_amount' => 'nullable|numeric|min:0',
            'start_date' => 'required|date',
        ]);
    
        if (!$validated['type_id']) {
            return redirect()->back()->withErrors(['type_id' => 'Please select a valid type']);
        }
        if (!$validated['frequency_id']) {
            return redirect()->back()->withErrors(['frequency_id' => 'Please select a valid frequency']);
        }
    
        $reminder->update($validated);
    
        return redirect()->route('reminders.index')->with('success', 'Reminder updated successfully.');
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return redirect()->route('reminders.index')->with('success', 'Reminder deleted successfully.');
    }
}
