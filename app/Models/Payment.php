<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
    public $table = 'tpayment';
    protected $primaryKey = 'id_payment';
}
