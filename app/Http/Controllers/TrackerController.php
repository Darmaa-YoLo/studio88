<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TrackerController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Session $session)
    {
        $this->model = $session;
        $this->rules = [
            'device' => 'required'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $tracker = Session::count();
        $day = Session::whereDate('created', Carbon::today())->count();
        $week = Session::whereBetween('created', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $month = Session::whereBetween('created', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
        $desktop = Session::where('device_type', 'desktop')->count();
        $tablet = Session::where('device_type', 'tablet')->count();
        $mobile = Session::where('device_type', 'mobile')->count();
        $countries = Session::select('country_name', DB::raw('count(*) as total'))
            ->groupBy('country_name')
            ->get();

        return response()->json([
            'totalAccess' => $tracker,
            'dayAccess' => $day,
            'weekAccess' => $week,
            'monthAccess' => $month,
            'deviceChart' => [
                [
                    'category' => 'desktop',
                    'value' => $desktop
                ],
                [
                    'category' => 'tablet',
                    'value' => $tablet
                ],
                [
                    'category' => 'mobile',
                    'value' => $mobile
                ]
            ],
            'countryChart' => $countries
        ]);
    }
}
