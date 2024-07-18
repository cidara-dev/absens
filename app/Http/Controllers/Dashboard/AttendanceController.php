<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Number;

class AttendanceController extends Controller
{
    public function index()
    {
        $date = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $time = Carbon::now('Asia/Jakarta')->format('H:i:s');
        $month = Carbon::now('Asia/Jakarta')->format('m');
        $year = Carbon::now('Asia/Jakarta')->format('Y');


        $thisday = DB::table('attendances')
            ->whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->count();


        $counttotalstudents = DB::table('students')
            ->count();

        $thisdaypercent = Number::percentage(($thisday / $counttotalstudents) * 100, precision: 2);
        $thisdaynotyetpercent = Number::percentage((($counttotalstudents - $thisday) / $counttotalstudents) * 100, precision: 2);


        $thisdayall = DB::table('students')
            ->select(
                DB::raw("count(students.id) as jumlah")
            )
            ->leftJoin('attendances', 'students.code', '=', 'attendances.code')
            ->whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->leftJoin('levels', 'students.level_id', '=', 'levels.id')
            ->groupBy('students.level_id', 'levels.name')
            ->select(
                'levels.name as kelas',
                DB::raw("count(students.id) as done")
            )
            ->get();


        $thisday7 = DB::table('students')
            ->leftJoin('attendances', 'students.code', '=', 'attendances.code')
            ->whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->where('grade_id', '=', '1')
            ->leftJoin('levels', 'students.level_id', '=', 'levels.id')
            ->groupBy('students.level_id', 'levels.name')
            ->select(
                'levels.name as kelas',
                DB::raw("count(students.id) as done")
            )
            ->get();

        $thisday8 = DB::table('students')
            ->leftJoin('attendances', 'students.code', '=', 'attendances.code')
            ->whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->where('grade_id', '=', '2')
            ->leftJoin('levels', 'students.level_id', '=', 'levels.id')
            ->groupBy('students.level_id', 'levels.name')
            ->select(
                'levels.name as kelas',
                DB::raw("count(students.id) as done")
            )
            ->get();

        $thisday9 = DB::table('students')
            ->leftJoin('attendances', 'students.code', '=', 'attendances.code')
            ->whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->where('grade_id', '=', '3')
            ->leftJoin('levels', 'students.level_id', '=', 'levels.id')
            ->groupBy('students.level_id', 'levels.name')
            ->select(
                'levels.name as kelas',
                DB::raw("count(students.id) as done")
            )
            ->get();

        return view('dashboard.attendances.index', [
            'thisday' => $thisday,
            'counttotalstudents' => $counttotalstudents,
            'thisdaypercent' => $thisdaypercent,
            'thisdaynotyetpercent' => $thisdaynotyetpercent,
            'thisdayall' => $thisdayall,
            'thisday7' => $thisday7,
            'thisday8' => $thisday8,
            'thisday9' => $thisday9,

        ]);
    }

    public function create()
    {
        $attendances = DB::table('attendances')->get();
        return view('attendances', compact('attendances'));
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
