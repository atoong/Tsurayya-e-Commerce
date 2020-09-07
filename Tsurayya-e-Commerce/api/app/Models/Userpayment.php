<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userpayment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'transaction_total', 'bukti_transaksi'
    ];

    protected $hidden = [
        
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
