<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class User extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id','Age','Country','Longsighted',];
    public $timestamps=false;
    public function Image(){
        return $this->hasOne(Image::class);
    }
    
}