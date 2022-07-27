<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
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
        if (Auth::user()->role === 'admin') {
            return view('admin.dashboard');
        }else

        $user = Auth::user();
        
        // ->join('payments', 'users.id', '=', 'payments.user_id')
        // ->select('users.email as user_email', 'payments.amount as payment_email')
        // ->get();

        $payments = Payment::where('user_id', $user->id)->sum('amount');
        //  dd($payments);
        return view('home', compact('user', 'payments'));
    }

    public function getTran()
    {
        $user = Auth::user();
        
        // ->join('payments', 'users.id', '=', 'payments.user_id')
        // ->select('users.email as user_email', 'payments.amount as payment_email')
        // ->get();

        $transactions = Payment::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        // dd($transactions);
        return view('transaction', compact('user', 'transactions'));
    }

}
