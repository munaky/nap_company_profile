<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $table = 'product_categories';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['products_id', 'categories_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'products_id');
    }
}
