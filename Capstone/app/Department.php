<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'id'. 'name', 'created_by', 'modified_by'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }

    public function Stores()
    {
        return $this->hasMany(Store::class);
    }
}
