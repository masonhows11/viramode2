<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.panel');
    }

    public function adminNotFound()
    {
        return view('admin.not_found');
    }

    public function adminPreparingPage()
    {
        return view('admin.preparing_page');
    }
}
