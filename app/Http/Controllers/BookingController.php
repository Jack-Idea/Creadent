<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;

class BookingController extends Controller
{
    public function index(Request $request) {
//        $period = CarbonPeriod::create(Carbon::now()->startOfDay(), Carbon::now()->endOfDay());
//        foreach($period as $date)
//        {
//            $dates[] = $date->format('H:i');
//        }
//
//        dd($dates);

        $book_date = request('book_date');

        $time_duration = '02:20';

        $time = explode(':', $time_duration);
        $time = $time[0] * 60 + $time[1];

//        dd($time);
//        $time = Carbon::now()->addMinutes($time);
//        $time = Carbon::now();

//        $book_date = Booking::all()->last()->book_date;
//        $book_time = Booking::all()->last()->book_time;
//        $book_time = Carbon::parse($book_time)->format('H:i');
//        $book_end = Booking::all()->last()->book_end;
//        $book_end = Carbon::parse($book_end)->format('H:i');
//        dd($t);


//        $books = Booking::all();
        $books = Booking::where('book_date', '2021-08-28')->get();
//        $book_times = [
//        ];
//
//        foreach ($books as $book) {
//            array_push($book_times, ['start' => Carbon::parse($book->book_time)->format('H:i'), 'end' => Carbon::parse($book->book_end)->format('H:i')]);
//        }
//
//        dd($book_times);
        $times = [];
        foreach ($books as $book) {
//            array_push($times, $book->times);
            foreach ($book->times as $k => $v) {
                array_push($times, $v);
            }
        }
//        foreach ($times as $kye => $value) {
//            dump($v);
//        }

//        dd($times);

//        return compact('book_date', 'book_time', 'book_end', 'book_times');
        return compact('times');
    }
}
