<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";
    public function orders() {
      return $this->hasMany('App\Order');
    }

    protected $fillable = [
      'name',
      'id',
    ];
}
