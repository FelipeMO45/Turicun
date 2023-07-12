<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usarios extends Model
{
    use HasFactory;

    protected  $table = "users";

    protected $filliable = [
        'name',
        'email',
        'password',
        'rol',
        'foto',
        'documento',
    ];
}
