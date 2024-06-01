<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'firstName',
        'lastName',
        'email',
        'password',
        'address',
        'phone',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'admin_status',
        'register_date',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'register_date' => 'datetime',
    ];



    /*----------------------Functions----------------------*/

    // Get the full name of the user.
    public function getFullName()
{
    return $this->firstName . ' ' . $this->lastName;
}

    // Make the user an admin.
    public function AdminUser($adminStatusBool)
    {
        $this->admin_status = $adminStatusBool;
        $this->save();
    }

    // Modify the user.           (Do we need both a ModifyUser and All the rest of the functions?)
        public function ModifyUser($user_id, $firstName, $lastName, $password, $email, $address, $phone)
    {
        $user = User::find($user_id);
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->password = Hash::make($password);
        $user->email = $email;
        $user->address = $address;
        $user->phone = $phone;
        $user->save();
    }
    // Delete the user.
    public function DeleteUser($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
    }
    // Change the password of the user.
    public function ChangePassword($user_id, $password, $new_password)
    {
        $user = User::find($user_id);
        if (Hash::check($password, $user->password)) {
            $user->password = Hash::make($new_password);
            $user->save();
        }
    }
    // Change the email of the user.
    public function ChangeEmail($user_id, $email, $new_email)
    {
        $user = User::find($user_id);
        if ($user->email == $email) {
            $user->email = $new_email;
            $user->save();
        }
    }
    // Change the address of the user.
    public function ChangeAddress($user_id, $address)
    {
        $user = User::find($user_id);
        $user->address = $address;
        $user->save();
    }

    // Change the phone number of the user.
    public function ChangePhone($user_id, $phone)
    {
        $user = User::find($user_id);
        $user->phone = $phone;
        $user->save();
    }

}
