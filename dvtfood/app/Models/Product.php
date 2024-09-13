<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["name", "des", "img", "price", "category_id"];

    public static function getAllProducts() {
        return self::all();
    }

    public static function getProductById(int $id) {
        return self::where("id", $id)->first();
    }
}
