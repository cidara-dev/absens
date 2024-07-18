<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $configs =  DB::table('configs')->first();
        return view('dashboard.index', [
            'configs' => $configs,

        ]);
    }
}
