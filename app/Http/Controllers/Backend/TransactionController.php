<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccountCategory;
use App\Models\IncomeCategory;
use App\Models\SubCategory;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        return view('backend.transaction.index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account = SubCategory::all();
        return view('backend.transaction.create',compact('account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->date = $request->date;
        $transaction->sub_category_id = $request->sub_category_id;
        $transaction->amount = $request->amount;
        $transaction->ref = $request->ref;
        $transaction->remarks = $request->remarks;
        $transaction->user_id = Auth::user()->id;
        $transaction->save();
        toast("Record Saved Successfully","success");
        return redirect("/transaction");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::find($id);
        $accounts = AccountCategory::all();
        return view('backend.transaction.edit',compact('transaction','accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction =  Transaction::find($id);
        $transaction->date = $request->date;
        $transaction->sub_category_id = $request->sub_category_id;
        $transaction->amount = $request->amount;
        $transaction->ref = $request->ref;
        $transaction->remarks = $request->remarks;
        $transaction->user_id = Auth::user()->id;
        $transaction->update();
        toast("Record Updated Successfully","success");
        return redirect("/transaction");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
