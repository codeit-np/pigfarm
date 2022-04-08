<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccountCategory;
use App\Models\ExpanseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense = ExpanseCategory::where('user_id',Auth::user()->id)->get();
        $account = AccountCategory::all();
        return view('backend.expense.index',compact('expense','account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense = ExpanseCategory::all();
        $account = AccountCategory::all();
        return view('backend.expense.create',compact('expense','account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = new ExpanseCategory();
        $expense->name = $request->name;
        $expense->account_category_id = $request->account_category_id;
        $expense->user_id = Auth::user()->id;

        $expense->save();
        toast("Record Saved Successfully","success");

        return redirect('/expenses');
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
        $expense = ExpanseCategory::find($id);
        $account = AccountCategory::all();
        return view('backend.expense.edit',compact('expense','account'));
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
        $income =  ExpanseCategory::find($id);
        $income->name = $request->name;
        $income->account_category_id = $request->account_category_id;
        $income->user_id = Auth::user()->id;

        $income->save();
        toast("Record Saved Successfully","success");

        return redirect('/expenses');
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
