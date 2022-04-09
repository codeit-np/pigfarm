<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::where('user_id',Auth::user()->id)->get();
        return view('backend.events.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        return view('backend.events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'title' => ['required'],
        //     'description' => ['required'],
        //     'date' => ['required'],
        //     'time_begin' => ['required'],
        //     'time_end' => ['required'],
        //     'location' => ['required'],

        //     // add rules for other fields
        // ]);

        $event = new Event();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time_begin = $request->time_begin;
        $event->time_end = $request->time_end;
        $event->location = $request->location;
        
        $event->user_id = Auth::user()->id;

        $event->save();
        toast("Record Saved Successfully","success");

        return redirect('/event');
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
        $event = Event::find($id);
        return view('backend.events.edit',compact('event'));
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
        $event = Event::find($id);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time_begin = $request->time_begin;
        $event->time_end = $request->time_end;
        $event->location = $request->location;
        
        $event->user_id = Auth::user()->id;

        $event->save();
        toast("Record update Successfully","success");

        return redirect('/event');
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
