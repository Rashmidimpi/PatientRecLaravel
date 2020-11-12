<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'admins';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'date',
        'address',
        'pname' ,
        'plastname',
        'pemail' ,
        'pdate' ,
        'paddress'   
    ];
    use HasFactory;
}
