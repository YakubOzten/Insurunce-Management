<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Question extends Authenticatable
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable=['ad','soyad','tc','plaka','belge_seri_no','admin_comment','dogum_tarihi','daire_m2',
        'adres','bina_yili','user_id','sfollow_id'];

    public  function getuser (){

        return $this->belongsTo(User::class,'user_id','id');
    }

}
