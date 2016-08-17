<?php

namespace App\Http\Controllers\Exchange;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExchangeController extends Controller
{
    public function index()
    {
        return view('exchange.exchange');
    }
}
