<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use App\Models\FeedType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed = Feed::where('user_id',Auth::user()->id)->get();
        return view('backend.feeds.index',compact('feed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feed = Feed::all();
        $feedtype = FeedType::all();
        return view('backend.feeds.create',compact('feed','feedtype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feed = new Feed();
        $feed->feed_type_id = $request->feed_type_id;
        $feed->qty = $request->qty;
        $feed->cost_of_feed = $request->cost_of_feed;
        $feed->date_of_purchase = $request->date_of_purchase;
        $feed->notes = $request->notes;
        $feed->user_id = Auth::user()->id;


        $feed->save();
        toast("Record Saved Successfully","success");

        return redirect('/feed');
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
        $feed = Feed::find($id);
        $feedtype = FeedType::where('user_id',Auth::user()->id)->get();
        return view('backend.feeds.edit',compact('feed','feedtype'));
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
        $feed =  Feed::find($id);
        $feed->feed_type_id = $request->feed_type_id;
        $feed->qty = $request->qty;
        $feed->cost_of_feed = $request->cost_of_feed;
        $feed->date_of_purchase = $request->date_of_purchase;
        $feed->notes = $request->notes;
        $feed->user_id = Auth::user()->id;

        $feed->update();
        toast("Record Update Successfully","success");

        return redirect('/feed');
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
