<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'price', 'quantity', 'description'
    ];

    public function Department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function Store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
