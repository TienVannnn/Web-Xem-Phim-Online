<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Manager extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password'
    ];
}
