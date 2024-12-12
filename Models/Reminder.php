<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reminder extends Model
{
    use HasFactory;
    protected $fillable = [
        'reminder_id',
        'reminder_name',
        'reminder_desc',
        'reminder_amount',
        'start_date',
        'created_at',
        'updated_at',
        'frequency_details'
    ];

 public function user(): BelongsTo{
    return $this->belongsTo(User::class);
 }

 public function type(): BelongsTo{
    return $this->belongsTo(Type::class);
 }

public function frequency(): BelongsTo{
    return $this->belongsTo(Frequency::class);
 }
}
