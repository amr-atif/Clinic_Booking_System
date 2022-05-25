<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregister extends Model
{
    use HasFactory;
    protected $fillable = ['pname', 'pusername', 'pemail', 'pphone', 'pasaword', 'password_confrimation'];
}
