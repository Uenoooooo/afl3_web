<?php
namespace App\Http\Controllers;

use App\Models\Reminder;

class ReminderController extends Controller
{
    public function index()
    {
        // Retrieve all reminders with their relationships
        $reminders = Reminder::with(['type', 'frequency'])->get();

        // Return the 'bill' Blade view with reminders data
        return view('bill', compact('reminders'));
    }

    public function getCalendarEvents()
    {
        // Fetch reminders and transform them into calendar event format
        $events = Reminder::select('reminder_name as title', 'start_date as start')
            ->get();

        return response()->json($events);
    }
}
