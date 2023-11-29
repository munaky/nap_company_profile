<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'size', 'price', 'description'];
}
