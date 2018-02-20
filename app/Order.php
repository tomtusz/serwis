<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable=[
    'uniqid',
    'coustomer_id',
    'added_at',
    'type_id',
    'brand_id',
    'model',
    'sn',
    'status_id',
    'description',
    'diagnosis',
    'readyOn',
    'comment'];
  protected $dates = [
    'created_at',
    'updated_at',
    'readyOn',
    'added_at'];
  public function type()
  {
    return $this->belongsTo('App\Type');
  }

  public function brand()
  {
    return $this->belongsTo('App\Brand');
  }

  public function status()
  {
    return $this->belongsTo('App\Status');
  }
  public function coustomer()
  {
    return $this->belongsTo('App\Coustomer');
  }

}
