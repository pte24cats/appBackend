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
        'cat_picture',
        'cat_age',
        'cat_gender',
        'cat_breed',
    ];



    
    /*----------------------Functions----------------------*/

public function createCat($cat_name, $cat_color, $cat_description, $good_cat_status, $cat_picture, $cat_age, $cat_gender, $cat_breed = null)
{
    $cat = new Cat;
    $cat->cat_name = $cat_name;
    $cat->cat_color = $cat_color;
    $cat->cat_description = $cat_description;
    $cat->good_cat_status = $good_cat_status;
    $cat->cat_picture = $cat_picture; // $cat_picture is binary data
    $cat->cat_age = $cat_age;
    $cat->cat_gender = $cat_gender;
    $cat->cat_breed = $cat_breed;
    $cat->save();
}

public function updateCat($cat_id, $cat_name, $cat_color, $cat_description, $good_cat_status, $cat_picture, $cat_age, $cat_gender, $cat_breed = null)
{
    $cat = Cat::find($cat_id);
    $cat->cat_name = $cat_name;
    $cat->cat_color = $cat_color;
    $cat->cat_description = $cat_description;
    $cat->good_cat_status = $good_cat_status;
    $cat->cat_picture = $cat_picture; // $cat_picture is binary data
    $cat->cat_age = $cat_age;
    $cat->cat_gender = $cat_gender;
    $cat->cat_breed = $cat_breed;
    $cat->save();
}

public function deleteCat($cat_id)
{
    $cat = Cat::find($cat_id);
    $cat->delete();
}


    // Get the adoptions for the cat.

    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }


}