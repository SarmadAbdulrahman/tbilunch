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

        $UserRoloes=auth()->user()->getRoleNames()[0];


// IwAgent
        switch ($UserRoloes)
        {
            case "SystemAdministrator": return redirect("SystemAdministrator"); break;
            case "Branch": return redirect("Branch"); break;
            default: dd("on");
        }


    }
}
