<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'event_date',
        'event_time',
        'location',
        'capacity',
        'price',
        'organizer',
        'category',
        'status'
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
