<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable=[
    'name',
    'surname',
    'email',
    'phone'];

  public function orders()
    {
      return $this->hasMany('App\Order');
    }
}
