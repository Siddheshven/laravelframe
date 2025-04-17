<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class Customer extends Controller
{
    protected $table = "customers";
    protected $primaryKey = "customer_id";
}
