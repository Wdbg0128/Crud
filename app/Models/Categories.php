<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    protected $fillable=['idDad','name','description'];
    
    public static function listCategories(){
        $listCategories='
        select *  from categories _categories';
        $ejecucion = DB::select($listCategories);
        return $ejecucion;
    }
}