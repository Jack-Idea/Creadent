<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_date', 'book_time', 'book_end', 'first_inspection', 'lastname', 'firstname', 'middlename', 'phone', 'mail', 'description'
    ];

    protected $casts = [
        'times' => 'array'
    ];
}
