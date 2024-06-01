<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
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
        'adoption_date',
    ];

    
/*----------------------Functions----------------------*/

    
    // Get the user that adopted the cat.
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Get the cat that was adopted by the user.
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
