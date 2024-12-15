<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'hide_reason',
        'make', 
        'model',
         'year', 
         'purchase_id',
        'fuel', 
        'price',
         'offer',
         'top_up',
     //    'no_of_Passengers',
         'engine_Capacity',
              'tracker_installed',
        'toll_Charges',
         'description',
        'vehicle_category',
        'vehicle_type',
         'image',
         'city','colour',
         'fuel_type',
         'featurs',
         'postal_pickup_dropoff',
        'date_from',
        'date_to',
        'doc_mot',
        'doc_logback',
        'img_exterior_front',
        'img_exterior_front2',
        'img_exterior_back',
        'img_exterior_dashboard', 
        'doc_phv',
        'licence_plate_number',
        'partner_id',
        'company_name',
        'company_address',
        'security_deposit',
        'date_mou',
        'date_tax',
        'air_filter',
        'engine_oil',
        'oil_filter',
        'milage',
        'service_date',
        'is_active',
        'milage_count',
        'air_filter_count',
        'action_type',
        'assigned_to',
        'assigned_date',
        'last_return_date',
        'awaiting_vehicle',
        'staff_assigned',
        'staff_assigned_date',
        'phv_issue_date',
        'phv_expire_date',
    ];

  public function partners()
    {
        return $this->belongsTo('App\Models\Partner','partner_id', 'id');
    }
     public function car_model()
    {
        return $this->belongsTo('App\Models\CarModel','model', 'id');
    }

    public function car_make()
    {
        //return $this->hasMany('App\Models\Make');
        return $this->belongsTo('App\Models\Make','make','id');
    }
     public function car_purchase()
    {
        return $this->belongsTo('App\Models\Purchase','purchase','id');
    }

    public function accident()
    {
        return $this->belongsTo('App\Models\Accedental_records','vehicle_id','id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\VehicleStatus','vehicle_id','id');
    }

    public function insurance()
    {
        return $this->hasOne('App\Models\InsuranceCompany','vehicle_id','id')->where('int_status',1);
    }


    public function vehicle_images()
    {
        return $this->hasMany('App\Models\VehicleImage');
        //return $this->belongsTo('App\Models\Make','make','id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function invoice()
    {
        return $this->hasMany('App\Models\Invoice', 'vehicle_id', 'id');
    }
}
