<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $table = 'booking';
    protected $fillable = [
        'user_id', 'vehicle_id', 'private_cartificate', 'duration', 'detail', 'miles', 'address', 'dob',
        'dvla', 'national_insu_numb', 'pco_licence_no', 'doc_dvla',
        'doc_cnic',
        'doc_utility', 'expiry_date', 'price', 'discount', 'booking_status', 'agreement_status',
        'doc_other',   'pco_paper_licence', 'promo', 'first_payment', 'booking_drop_off_date', 'booking_start_date', 'reference_booking',
        'reference_booking_status', 'insurance_type', 'deposit', 'expiredate', 'is_deleted', 'agreement_name',
        'pco_company_name', 'pco_company_number', 'pco_company_address', 'booking_payment_type', 'booking_reference_number','return_date' , 'return_status',
        'stripe_charges_paid','referral_code','staff_code','referred_by','referred_detail',
    ];

    public function vehicle()
    {
        return $this->belongsTo('App\models\Vehicle', 'vehicle_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\models\User', 'user_id', 'id');
    }

    public function staff()
    {
        return $this->belongsTo('App\models\Staff', 'staff_code', 'ref_code');
    }

    public function make()
    {
        return $this->hasManyThrough('App\models\Make', 'App\models\Vehicle', 'vehicle_id', 'id');
    }

    /*public function model()
{
    return $this->hasManyThrough('App\models\CarModel', 'App\models\Make' , 'make_id','id');
} */

    /*public function payment_history()
    {
        return $this->belongsTo('App\models\PaymentHistory','vehicle_id','id');
    }*/


    public function user_payment_history()
    {
        return $this->belongsTo('App\models\PaymentHistory', 'user_id', 'user_id');
    }

    public function customer_insurance()
    {
        return $this->hasOne('App\models\Customerinsurance', 'booking_id', 'id');
    }
    public function paymentHistories()
    {
        return $this->hasMany('App\models\PaymentHistory', 'booking_id', 'id');
    }
    public function expenses()
    {
        return $this->hasMany('App\models\Expense', 'booking_id', 'id');
    }
    public function invoice()
    {
        return $this->hasMany('App\models\Invoice', 'booking_id', 'id');
    }

    public static function getExpensesByBookingId($bookingId)
    {
        return self::find($bookingId)->expenses;
    }
}
