<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'cat_id',
        'payment_amount',
        'start_date',
        'end_date',
    ];

    
/*----------------------Functions----------------------*/

     // Get the user that is a sponsor.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
     // Get the cat that is sponsored.
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}