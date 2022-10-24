<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingsdData extends Model
{
    use HasFactory;

    protected $table = 'billignsdata';
    protected $primaryKey = 'IdBillignsdata';
    protected $fillable = [
        'IdBillingdata',
        'FK_IdUser',
        'IqualAddress',
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
