<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $primaryKey = 'IdAddress';
    protected $fillable = [
        'IdAddress',
        'FK_IdUser',
        'ContactName',
        'Address',
        'PostalCode',
        'Neighborhood',
        'City',
        'State',
        'Email',
        'Phone',
        'Type',
        'Status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'FK_IdUser', 'IdUser');
    }
}
