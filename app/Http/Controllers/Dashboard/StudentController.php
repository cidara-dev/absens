<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')
            ->orderBy('id', 'desc')
            ->where('status', '=', 'aktiv')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('levels', 'students.level_id', '=', 'levels.id')
            ->select(
                'students.*',
                'grades.name as tingkat',
                'levels.name as kelas',
            )
            ->paginate(20);
        return view('dashboard.students.index', compact('students'));
    }

    public function grade7()
    {
        $students = DB::table('students')
            ->where('status', '=', 'aktiv')
            ->where('grade_id', '=', '1')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('levels', 'students.level_id', '=', 'levels.id')
            ->select(
                'students.*',
                'grades.name as tingkat',
                'levels.name as kelas',
            )
            ->paginate(20);
        return view('dashboard.students.index', compact('students'));
    }
    public function grade8()
    {
        $students = DB::table('students')
            ->where('status', '=', 'aktiv')
            ->where('grade_id', '=', '2')

            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('levels', 'students.level_id', '=', 'levels.id')
            ->select(
                'students.*',
                'grades.name as tingkat',
                'levels.name as kelas',
            )
            ->paginate(20);
        return view('dashboard.students.index', compact('students'));
    }
    public function grade9()
    {
        $students = DB::table('students')
            ->where('status', '=', 'aktiv')
            ->where('grade_id', '=', '3')

            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('levels', 'students.level_id', '=', 'levels.id')
            ->select(
                'students.*',
                'grades.name as tingkat',
                'levels.name as kelas',
            )
            ->paginate(20);
        return view('dashboard.students.index', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Level::all();
        $grades = Grade::all();

        return view('dashboard.students.create', [
            'levels' => $levels,
            'grades' => $grades,

        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:3000',
            'name' => 'unique:students,name|required|string|min:4|max:150',
            'nisn' => 'unique:students,nisn|required|min:4|max:12',
        ]);

        $manager = new ImageManager(new Driver());
        $manager->driver();

        $image = $manager->read($request->file('image'));

        $imageName = \Str::slug($request->name) . '-' . time() . '.' . 'webp';
        $destinationPath = public_path('storage/students/images/');

        $image->toWebp(80);
        $image->scaleDown(width: 800);
        $image->save($destinationPath . $imageName);

        $destinationPathThumbnail = public_path('storage/students/thumbnail/');
        $image->scaleDown(width: 300);
        $image->save($destinationPathThumbnail . $imageName);

        $today = Carbon::now('Asia/Jakarta')->format('hms-dmY');
        $news = new Student();

        $news->image = $imageName;
        $news->grade_id = $request->grade_id;
        $news->level_id = $request->level_id;
        $news->nisn = $request->nisn;
        $news->code = $request->code;
        $news->name = $request->name;
        $news->nik = $request->nik;
        $news->gender = $request->gender;
        $news->born = $request->born;
        $news->borndate = $request->borndate;
        $news->address = $request->address;
        $news->phone = $request->phone;
        $news->kip = $request->kip;
        $news->parent = $request->parent;
        $news->status = 'Aktiv';
        $news->note = $request->note;
        $news->save();


        return redirect()->route('students.index')->with('status', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, Level $levels, Grade $grades): View
    {
        $levels = Level::all();
        $grades = Grade::all();

        return view('dashboard.students.edit', compact('student', 'levels', 'grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = Student::findOrFail($id);
        $deleteOldImage = 'storage/students/images/' . $data->image;


        $manager = new ImageManager(new Driver());
        $manager->driver();

        if ($image = $request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:3000',
                'name' => 'required|string|min:4|max:150',
                'nisn' => 'required|min:4|max:12',
            ]);

            if (file_exists($deleteOldImage)) {
                Storage::disk('public')->delete('students/images/' . $data->image);
                Storage::disk('public')->delete('students/thumbnail/' . $data->image);
            }

            $image = $manager->read($request->file('image'));
            $imageName = \Str::slug($request->name) . '-' . time() . '.' . 'webp';
            $destinationPath = public_path('storage/students/images/');
            $image->toWebp(80);
            $image->scaleDown(width: 800);
            $image->save($destinationPath . $imageName);

            $destinationPathThumbnail = public_path('storage/students/thumbnail/');
            $image->scaleDown(width: 300);
            $image->save($destinationPathThumbnail . $imageName);
        } else {

            $imageName = $data->image;
            $request->validate([
                'name' => 'required|string|min:4|max:150',
                'nisn' => 'required|min:4|max:12',
            ]);
        }
        $data->image = $imageName;
        $data->grade_id = $request->grade_id;
        $data->level_id = $request->level_id;
        $data->nisn = $request->nisn;
        $data->code = $request->code;
        $data->name = $request->name;
        $data->nik = $request->nik;
        $data->gender = $request->gender;
        $data->born = $request->born;
        $data->borndate = $request->borndate;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->kip = $request->kip;
        $data->parent = $request->parent;
        $data->status = 'Aktiv';
        $data->note = $request->note;
        $data->save();


        return redirect()->route('students.index')->with('status', 'Data Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        if (Storage::disk('public')->exists('students/images/' . $student->image)) {
            Storage::disk('public')->delete('students/images/' . $student->image);
            Storage::disk('public')->delete('students/thumbnail/' . $student->image);
        }
        $student->delete();
        return redirect()->route('students.index')->with('status', 'Data Delete Successfully');
    }
}
