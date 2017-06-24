<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
      * Attributes that are mass-assignable
    **/
    protected $fillable = ['name'];


    public function user(){
      return $this->belongsTo(User::class);   // Define that the meal model belogs to user model
    }

    public function foods(){
      return $this->hasMany(Food::class);    // define that foods models has many meals models
    }
}
