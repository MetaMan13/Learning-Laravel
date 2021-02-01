<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentRecieved;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // return view('home');
        // THIS WAY IS FINE
        // FacadesNotification::send(request()->user(), new PaymentRecieved("Amar"));
        // SHORTER SYNTAX
        request()->user()->notify(new PaymentRecieved("Amar", 900));
        return redirect('/payments/create');
    }
}
