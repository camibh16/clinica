<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Doctor;
use App\Schedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $doctors = Doctor::All();
        $doctors = DB::table('doctors')
                ->join('schedules', 'doctors.id','=','schedules.day_id')
                ->get();



        // foreach ($doctors as $doctor) {

        //     dd($doctor->schedules);
        // }                                                                                     
        
        return view('home')
                ->with('doctors', $doctors);
    }

    public function admin()
    {
        return view('admin.index');
    }
}
