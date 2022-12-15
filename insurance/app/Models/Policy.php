<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Policy extends Model
{
    use HasFactory;

    protected $fillable=['policy_name','category_id','premium','Kul_suresi'];
    public function category(){
        return $this->belongsTo(Category::class);
    }


}
