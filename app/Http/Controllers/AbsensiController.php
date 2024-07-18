<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $donejson = File::get('json/done.json');
        $donedata = json_decode(json: $donejson, associative: true);
        $randomdone = Arr::random($donedata);

        $notfoundjson = File::get('json/notfound.json');
        $notfounddata = json_decode(json: $notfoundjson, associative: true);
        $randomnotfound = Arr::random($notfounddata);

        $date = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $time = Carbon::now('Asia/Jakarta')->format('H:i:s');
        $month = Carbon::now('Asia/Jakarta')->format('m');
        $year = Carbon::now('Asia/Jakarta')->format('Y');

        $attendances = Attendance::orderBy('id', 'asc')
            ->paginate(10);


            return view('attendances', [
                'attendances' => $attendances,
                'randomdone' => $randomdone,
                'randomnotfound' => $randomnotfound,
            ]);

        return view('attendances', compact('attendances'));
    }

    public function create()
    {
        // $attendances = $this->check();
        return view('attendances');
    }

    private function check(Request $request, Student $students)
    {
        $code = $request->code;
        $students = Student::where('code', '=', $code)
            ->get();
    }
    public function store(Request $request): RedirectResponse
    {
        $students = DB::table('students')
        ->where('code','=', $request->code)
        ->first();

        $students = DB::table('students')
        ->where('students.code','=', $request->code)
        ->leftJoin('attendances', 'students.code', '=', 'attendances.code')
        ->leftJoin('levels', 'students.level_id', '=', 'levels.id')
        ->select(
            'students.code as code',
            'students.image as image',
            'students.name as name',
            'students.nisn as nisn',
            'levels.name as kelas',
        )
        ->first();

        $date = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $time = Carbon::now('Asia/Jakarta')->format('H:i:s');
        $month = Carbon::now('Asia/Jakarta')->format('m');
        $year = Carbon::now('Asia/Jakarta')->format('Y');

        $validator = Validator::make($request->all(),[
            'code' => 'exists:students',
        ]);

        # VALIDASI
        $requestcode = $request->code;

        # VALIDASI DOUBLE ABSEN
        $checkdouble = Attendance::
            whereDate('date', $date)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->where('code', '=' , $requestcode)
            ->count();
        
        if ($checkdouble > 0) {
            return redirect()->route('absensi.index')->with('done', 'KAKA SUDAH ABSEN. BESOK LAGI YA :)')->with('data', $checkdouble);
        }

        if ($validator->validated()) {
            $data = new Attendance();
            $data->code     = $request->code;
            $data->date     = $date;
            $data->timein   = $time;
            $data->timeout  = $time;;
            $data->save();
            return redirect()->route('absensi.index')
            ->with('status', 'Data!')
            ->with('image', $students->image)
            ->with('name', $students->name)
            ->with('nisn', $students->nisn)
            ->with('level', $students->kelas)
            ->with('code', $data->code)
            ->with('timein', $data->timein)
            ->with('timeout', $data->timeout);
        }
     }
}