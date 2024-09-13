<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageBooking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'package_tour_id',
        'user_id',
        'quantity',
        'start_date',
        'end_date',
        'total_amount',
        'is_paid',
        'proof',
        'package_bank_id',
        'sub_total',
        'tax',
        'insurance',
    ];

    protected $cats = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function customers()
    {
        return $this->belongsTo(User::class);
    }
    public function tours()
    {
        return $this->belongsTo(PackageTour::class);
    }
    public function bank()
    {
        return $this->belongsTo(PackageBank::class);
    }
}
