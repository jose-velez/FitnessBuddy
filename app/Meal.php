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

    public function totalCal(){
        $cal = 0;
        $foods = $this->foods()->get();
        foreach ($foods as $food) {
          $cal+=($food->calories());
        }

        return $cal;
    }

    public function totalProtein(){
      $proteins =0;
      $foods = $this->foods()->get();
      foreach ($foods as $food) {
        $proteins+=($food->protein());
      }
      return $proteins;
    }

    public function totalCarbs(){
      $carbs=0;
      $foods= $this->foods()->get();
      foreach($foods as $food){
        $carbs+=($food->carbohydrates());
      }
      return $carbs;
    }

    public function totalFat(){
      $fat = 0;
      $foods= $this->foods()->get();
      foreach ($foods as $food) {
        $fat += ($food->fat());
      }
      return $fat;

    }
}
