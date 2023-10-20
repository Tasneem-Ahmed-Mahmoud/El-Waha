<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $filablle=['name','description','price','offer','image','category_id','quantity'];
    const PATH="images/products/";

    function category(){
        return $this->belongsTo(Category::class);
    }
}
