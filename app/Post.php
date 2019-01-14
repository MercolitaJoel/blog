<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
class Post extends Model
{
    //@optional
    protected $table="post";
    protected $fillable=['user_id','title','content'];

    function user(){
        return $this->belongsTo('App\user');
    }
    function getTitleAttribute($value){
        //mutate our post title first letter
        return ucfirst($value);
    }

    function setTitleAttribute($value){
        //convert title to lowercase
        return $this->attributes['title']=strtolower($value);
    }

    function getCreatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);
    }

    function getUpdatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);
    }

    function getSnippetContent($input){
        return strlen($input)>20 ? substr(0,20,$input).'...':$input;
    }
}
