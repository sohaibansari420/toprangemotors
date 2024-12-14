<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
     protected $table = 'partners';

    protected $fillable = [
        'name', 'email', 'password' , 'detail', 'commission' , 'address' , 'profile_pic','phone','business_address','pickup_address','dropoff_address','account_number','account_holder_name','bank_name','sort_code',
            ];


     public function count_vehicles()
    {
        return $this->hasMany('App\models\Vehicle','partner_id', 'id');
    }


    public function count_total_booking()
    {
        return $this->hasMany('App\models\Booking','partner_id', 'id');
        // return $this->hasManyThrough('App\models\Booking', 'App\models\Vehicle' , 'id','vehicle_id');
    }


   public function count_total_driver()
    { 
        return $this->hasMany('App\models\Driver', 'partner_id','id');
    }


}
