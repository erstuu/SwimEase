<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Swimming_Class;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class SwimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::count();

        $jumlahKelasAnak = Enrollment::join('swimming_class', 'enrollments.class_id', '=', 'swimming_class.id_class')
                             ->where('swimming_class.kelas', 'Anak-anak')
                             ->count();

        $jumlahKelasProfesional = Enrollment::join('swimming_class', 'enrollments.class_id', '=', 'swimming_class.id_class')
                             ->where('swimming_class.kelas', 'Professional')
                             ->count();

        $jumlahKelasDewasa = Enrollment::join('swimming_class', 'enrollments.class_id', '=', 'swimming_class.id_class')
                             ->where('swimming_class.kelas', 'Dewasa')
                             ->count();

        $labels = ['Anak-anak', 'Professional', 'Dewasa'];
        $data = [$jumlahKelasAnak, $jumlahKelasProfesional, $jumlahKelasDewasa];

        return view('pages.admin.dashboard', compact('user', 'jumlahKelasAnak', 'jumlahKelasProfesional', 'jumlahKelasDewasa', 'labels', 'data'));
    }
    

    public function landingpage() {
        return view('pages.home');
    }

    public function jadwal() {

        $swimm = Swimming_Class::with('jadwal')->get();
        return view('pages.jadwal', compact('swimm'));
    }

    public function lesku() {
        $user = auth()->user();
        $users = Enrollment::with(['user', 'swimmingClass.jadwal'])->where('user_id', $user->id)->get();
        return view('pages.lesku', compact('users'));
    }
}
