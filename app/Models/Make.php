<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{

	protected $table = 'makes';
    protected $fillable = [
        'name'
    ];

    public function car_model()
    {
        return $this->hasMany('App\models\CarModel');
    }
}
