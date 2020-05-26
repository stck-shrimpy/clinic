<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Support\Facades\DB;

class AvailableDate extends Controller
{
    public function __invoke()
    {
        $reservations = Reservation::all('scheduled_at')->groupBy(DB::raw('MONTH(scheduled_at)'), DB::raw('DAY(scheduled_at)'));

        return response()->json($reservations);
    }
}
