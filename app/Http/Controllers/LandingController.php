<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index() {
        return view('layouts.landing');
    }

    public function about() {
        return view('layouts.about');
    }

    public function employees() {
        return view('layouts.employees');
    }

    public function sendCallback(Request $request) {
        $name = request('name');
        $phone = request('phone');
        $date = request('date');
        $time = request('time');
        $date = Carbon::parse($date)->format('d.m.Y');

        Mail::send('layouts.callback-mail',['name' => $name, 'phone' => $phone, 'date' => $date, 'time' => $time],
            function ($message) use ($name, $phone, $date, $time) {
                $message->to('nvrsk.sport@gmail.com', 'CreaDent')->subject('Новое Новое запись!!!');
                $message->from('zerrenderwork@yandex.ru', 'CreaDent');
            });

        return compact('name', 'phone', 'date', 'time');
    }
}
