<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'IdUser';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'IdUser',
        'Name',
        'LastName',
        'Company',
        'Email',
        'Password',
        'Phone',
        'Discount',
        'BusinessName',
        'Rfc',
        'Cfdi',
        'Type',
        'Location',
        'Role',
        'Status',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function addresses()
    {
        return $this->hasOne(Addresses::class, 'FK_IdUser', 'IdUser');
    }
    public function billignsdata()
    {
        return $this->hasOne(BillingsdData::class, 'FK_IdUser', 'IdUser');
    }
}
