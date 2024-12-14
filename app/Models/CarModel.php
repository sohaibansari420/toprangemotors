<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'name', 'status', 'make_id'
    ];

    public function make()
    {
        return $this->belongsTo('App\models\Make', 'make_id', 'id');
    }
}
