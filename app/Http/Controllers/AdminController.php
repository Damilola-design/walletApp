<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Payment;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index(){

         $users = User::all();

        return view('admin.user', ['users' => $users]);
    }
    public function dashboard(){
        
        $users = User::all();
        
        $deposits = DB::table('payments')->sum('amount');
        $max_pays = DB::table('payments')->max('amount');
        $min_pays = DB::table('payments')->min('amount');
        $avg_pays = DB::table('payments')->avg('amount');
        $tran_counts = DB::table('payments')->count();
        // dd($tran_count);
        return view('admin.dashboard', compact('users', 'deposits', 'max_pays', 'min_pays', 'avg_pays', 'tran_counts'));
    }
    public function history(){
        $histories = Payment::all();
        return view('admin.history', compact('histories'));
    }

    // public function getUser(Request $request, $id){
    //     $transactions = Payment::findOrFail($id);

    //     return view('admin.transaction', ['transactions' => $transactions]);
    // }

    public function getUser(Request $request, $id){
        //  $user = Payment::find($id)->where('user_id', $user->id)->orderBy('id', 'desc')->get();
        // dd($user);



        // $user = Payment::find();
        

        // $transactions = Payment::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        // // dd($transactions);
        // // // ->join('payments', 'users.id', '=', 'payments.user_id')
        // // // ->select('users.email as user_email', 'payments.amount as payment_email')
        // // // ->get();

        // // $transaction = Payment::where('user_id', $user->id)->orderBy('id', 'desc');
        // // return $transaction;
        $user = user::all();
        // dd( $user );
        $transactions = Payment::where('user_id', $id)->orderBy('id', 'desc')->get();
        //  dd($transactions);

        return view('admin.transaction', compact('transactions'));

    }

}
