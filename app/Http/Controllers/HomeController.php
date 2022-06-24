<?php

namespace App\Http\Controllers;

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

    public function detail()
    {
        return view('detail-aplikasi');
    }

    public function debt()
    {
        return view('debt');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function kredit()
    {
        return view('kredit');
    }

    public function fdc()
    {
        return view('fdc');
    }

    public function pefindo()
    {
        return view('pefindo');
    }

    public function nak()
    {
        return view('nak');
    }

    public function bunga()
    {
        return view('bunga');
    }
}
