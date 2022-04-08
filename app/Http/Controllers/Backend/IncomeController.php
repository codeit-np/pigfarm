<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccountCategory;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\AcceptHeader;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income = IncomeCategory::where('user_id',Auth::user()->id)->get();
        $account = AccountCategory::all();
        return view('backend.income.index',compact('income','account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $income = IncomeCategory::all();
        $account = AccountCategory::all();
        return view('backend.income.create',compact('income','account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $income = new IncomeCategory();
        $income->name = $request->name;
        $income->account_category_id = $request->account_category_id;
        $income->user_id = Auth::user()->id;

        $income->save();
        toast("Record Saved Successfully","success");

        return redirect('/income');
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
        $income = IncomeCategory::find($id);
        $account = AccountCategory::all();
        return view('backend.income.edit',compact('income','account'));
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
        $income =  IncomeCategory::find($id);
        $income->name = $request->name;
        $income->account_category_id = $request->account_category_id;
        $income->user_id = Auth::user()->id;

        $income->save();
        toast("Record Update Successfully","success");

        return redirect('/income');
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
