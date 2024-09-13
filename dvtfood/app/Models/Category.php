<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["name"];

    public static function getAllCategory() {
        return self::orderBy("id","desc")->get();
    }

    public static function findCategoryById(int $id) {
        return self::where("id","=", $id)->first();
    }
}
