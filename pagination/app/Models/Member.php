<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    function getNameAttribute($value)
    {
        return ucFirst($value);
    }
    function getEmailAttribute($value)
    {
        return lcFirst($value);
    }
    function getAddressAttribute($value)
    {
        return $value.",India";
    }
}
