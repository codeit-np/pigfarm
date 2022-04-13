<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\Pig;
use App\Models\PigGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pigs = Pig::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        return view('backend.pig.index',compact('pigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breeds = Breed::all();
        $groups = PigGroup::all();
        return view('backend.pig.create',compact('breeds','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pig = new Pig();
        $pig->breed_id = $request->breed_id;
        $pig->name = $request->name;
        $pig->tag_no = $request->tag_no;
        $pig->litter_no = $request->litter_no;
        $pig->weight = $request->weight;
        $pig->gender = $request->gender;
        $pig->dob = $request->dob;
        $pig->date_of_entry_on_farm = $request->date_of_entry_on_farm;
        $pig->pig_group_id = $request->pig_group_id;
        $pig->pig_obtain_by = $request->pig_obtain_by;
        $pig->if_other = $request->if_other;
        $pig->mother_tag_no = $request->mother_tag_no;
        $pig->father_tag_no = $request->father_tag_no;
        $pig->notes = $request->notes;
        $pig->user_id = Auth::user()->id;
        $pig->save();
        toast("Record Saved Successfully","success");
        return redirect("/pig");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pig = Pig::find($id);
        $breeds = Breed::all();
        $groups = PigGroup::all();
        return view('backend.pig.edit',compact('pig','breeds','groups'));
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
        $pig =  Pig::find($id);
        $pig->breed_id = $request->breed_id;
        $pig->name = $request->name;
        $pig->tag_no = $request->tag_no;
        $pig->litter_no = $request->litter_no;
        $pig->weight = $request->weight;
        $pig->gender = $request->gender;
        $pig->dob = $request->dob;
        $pig->date_of_entry_on_farm = $request->date_of_entry_on_farm;
        $pig->pig_group_id = $request->pig_group_id;
        $pig->pig_obtain_by = $request->pig_obtain_by;
        $pig->if_other = $request->if_other;
        $pig->mother_tag_no = $request->mother_tag_no;
        $pig->father_tag_no = $request->father_tag_no;
        $pig->notes = $request->notes;
        $pig->user_id = Auth::user()->id;
        $pig->update();
        toast("Record Updated Successfully","success");
        return redirect("/pig");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pig = Pig::find($id);
        $pig->delete();
        toast("Record Deleted Successfully","success");
        return redirect("/pig");
    }
}
