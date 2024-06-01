<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_name',
        'cat_color',
        'cat_description',
        'good_cat_status',
    ];



    
    /*----------------------Functions----------------------*/

    // Get the adoptions for the cat.

    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }
}