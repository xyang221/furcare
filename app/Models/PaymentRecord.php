<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    use HasFactory;

    protected $table = 'payment_records';

    protected $fillable = ['ref_no', 'type', 'gcash_ref_no', 'total', 'amount', 'change', 'client_deposit_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['clientdeposit'];

    public function clientdeposit()
    {
        return $this->belongsTo(ClientService::class, 'client_deposit_id', 'id');
    }
}
