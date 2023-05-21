<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $employers = Employer::all();
        $employers_count = Employer::count();

        return view('homepage.index',[
            'employers' => $employers,
            'employers_account' => $employers_count
        ]);
    }
}
