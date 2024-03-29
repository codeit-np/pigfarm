<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FeedType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedtype = FeedType::where('user_id',Auth::user()->id)->get();
        return view('backend.feedtype.index',compact('feedtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feedtype = FeedType::all();
        return view('backend.feedtype.create',compact('feedtype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedtype = new FeedType();
        $feedtype->name = $request->name;
        $feedtype->user_id = Auth::user()->id;

        $feedtype->save();
        toast("Record Saved Successfully","success");

        return redirect('/feedtype');
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
        $feedtype = FeedType::find($id);
        return view('backend.feedtype.edit',compact('feedtype'));
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
        $feedtype =  FeedType::find($id);
        $feedtype->name = $request->name;
        $feedtype->feed_type_id = $request->feed_type_id;
        $feedtype->qty = $request->qty;
        $feedtype->cost_of_feed = $request->cost_of_feed;
        $feedtype->date_of_purchase = $request->date_of_purchase;
        $feedtype->notes = $request->notes;
        $feedtype->user_id = Auth::user()->id;
        // if($request->hasFile('logo')){
        //     $file = $request->logo;
        //     $newName = time() . $file->getClientOriginalName();
        //     $file->move("images",$newName);
        //     $feed->logo = "images/$newName";
        // }

        $feedtype->save();
        toast("Record Update Successfully","success");

        return redirect('/feedtype');
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
