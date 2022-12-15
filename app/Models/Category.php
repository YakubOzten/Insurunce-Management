<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Policy;


class Category extends Model
{
    protected $fillable=['category_name'];

    public  function products(){
        return $this->hasMany(Policy::class);
    }


    use HasFactory;
}
