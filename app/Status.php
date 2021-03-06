<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $fillable=['name','color','order'];

  public function orders()
    {
      return $this->hasMany('App\Order');
    }
}
