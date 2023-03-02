<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $filable = ['name','kin','message'];
    // protected $guarded = [];
    use HasFactory;
}
