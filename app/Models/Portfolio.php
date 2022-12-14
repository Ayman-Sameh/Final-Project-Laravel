<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'description',
        'category_id',
    ];

    public function category(){
        return $this->hasOne(Categories::class , 'id' , 'category_id');
    }
}
