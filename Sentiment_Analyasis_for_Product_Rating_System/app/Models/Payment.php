<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['payment_id','payer_id','payer_email','amount' ,'currency','payment_status'];
}
