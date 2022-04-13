<?php

namespace App\Http\Controllers;

use App\Models\AccountCategory;
use App\Models\Pig;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $totalPig = Pig::count();
       //Total Income
        $incomes = SubCategory::with(['transactions' => function($query){
            $query->sum('amount');
         }])->get();

         $totalIncome = 0;
         $incomeList = $incomes[0]['transactions'];

        foreach($incomeList as $item){
            $totalIncome = $totalIncome + $item['amount'];
        }

        //  return $totalIncome;

          //Total Expanse
        $expanse = SubCategory::with(['transactions' => function($query){
            $query->sum('amount');
         }])->get();

         $totalExpanse = 0;
         $expanseList = $expanse[1]['transactions'];

        foreach($expanseList as $item){
            $totalExpanse = $totalExpanse + $item['amount'];
        }


        $company = Setting::where('user_id',Auth::user()->id)->first();

        //  return $totalExpanse;


        return view('home',compact('totalPig','totalIncome','totalExpanse','company'));
    }
}
