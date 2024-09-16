<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'phone_number',
        'email',
        'sex',
        'document',
        'first_name',
        'passport_seria',
        'passport_number',
        'last_name',
        'birth_day',
        'birth_month',
        'birth_year',
        'seat_no',
        'pdf',
        'code',
    ];
}
