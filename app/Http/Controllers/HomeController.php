<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function users() {
        $users = User::all();
        return view('users',['users'=>$users]);
    }

    public function editCertificate() {
        return view('certificate');
    }

    public function certificate($id) {
        set_time_limit(600);

        $user = User::find($id);
        $pdf = PDF::loadView('certificate', ['user' => $user]);
        return $pdf->setPaper('a4', 'landscape')->stream();
    }

    public function print_pdf($id) {
        $user = User::find($id);

        $pdf = PDF::loadView('certificate', ['user' => $user]);
        return $pdf->download($user->name.'_certificate.pdf');
    }
}
