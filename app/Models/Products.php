<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    protected $fillable=['category_id','name','description','units'];
    public function category()
{
    return $this->belongsTo(Categories::class);
}
}
