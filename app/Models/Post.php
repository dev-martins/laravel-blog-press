<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','text','summary','comments','user_id','category_id','visibility_id'];
    protected $collection = 'posts';
    // protected $primaryKey = 'id';
    protected $connection = 'mongodb';

}
