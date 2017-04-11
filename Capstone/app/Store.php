<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'id'. 'name', 'address', 'PhoneNumber', 'isActive', 'created_by', 'modified_by'
    ];
}
