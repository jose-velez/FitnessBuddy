<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'protein', 'carbohydrates', 'fat'];

    public function meal(){
      return $this->belongsTo(Meal::class);      // Define that food belong to meal class
    }

    public function calories(){
      return( ($this->protein * 4 ) + ($this->carbohydrates * 4) + ($this->fat * 9));
    }

    public function protein(){
      return $this->protein;
    }

    public function carbohydrates(){
      return $this->carbohydrates;
    }

    public function fat(){
      return $this->fat;
    }
}
