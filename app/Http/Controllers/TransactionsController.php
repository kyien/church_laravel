<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TransactionsController extends Controller
{
    //

    
    public function __construct(){

    $this->middleware('auth:admins');

    }


    public function get_expenses_view()
    {

        return view('backend.expenses');
    }

    public function get_payments_view()
    {

        return view('backend.payment');
    }


    public function get_transactions_view()
    {

        $transaction_types=DB::table('transaction_types')->get();
        $services=DB::table('services')->get();

        return view('backend.transactions',compact('transaction_types','services'));
    }


    public function store_payments(Request $req){

      //
    }

    public function store_expenses(Request $req){

      //
    }

    public function store_transactions(Request $req){

      //
    }
  
}
