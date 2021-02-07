<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories"; // ชื่อฐานข้อมูล
    protected $primaryKey = "category_id"; // primaryKey คือ Column ไหน
    public $timestamps = false;
}
