<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // PASTIKAN KODE INI ADA:
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // ... kode Anda yang lain di bawahnya ...
}