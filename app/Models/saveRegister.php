<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'forname',
        'email',
        'password',
        'passwordrepeat',
    ];
}
