<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Membership;

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
        $memberships = Membership::all();

        foreach ($memberships as $member) {
            $birthDate = Carbon::createFromFormat('d/m/Y', $member->bir_date);
            $age = Carbon::now()->diffInYears($birthDate);
            $member->age = $age;
        }

        return view('home', ['memberships' => $memberships]);
    }

}
