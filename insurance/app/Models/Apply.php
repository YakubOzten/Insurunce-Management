<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{

    use HasFactory;

    protected $table='applies';
    protected $fillable=['user_id','policy_id','status','fallow_id'];

    public  function policy (){

        return $this->belongsTo(Policy::class,'policy_id','id');
    }
    public  function getuser (){

        return $this->belongsTo(User::class,'user_id','id');
    }


}
