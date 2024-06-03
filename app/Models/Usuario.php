<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'usuarios';

    // Specify which attributes should be mass-assignable
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Specify which attributes should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Specify which attributes should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
