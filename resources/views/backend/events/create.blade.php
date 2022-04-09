@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/event" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/event" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" my-2>
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="form-group" my-2>
                                <label for="description">Description</label>
                                <input id="name" class="form-control" type="text" name="description"
                                    value="{{ old('description') }}">
                            </div>
                            <div class="form-group" my-2>
                                <label for="date">Date</label>
                                <input id="date" class="form-control" type="date" name="date"
                                    value="{{ old('date') }}">
                            </div>
                            <div class="form-group" my-2>
                                <label for="time_begin">Time Begins</label>
                                <input id="time_begin" class="form-control" type="time" name="time_begin"
                                    value="{{ old('time_begin') }}">
                            </div>
                            <div class="form-group" my-2>
                                <label for="time_end">Time Ends</label>
                                <input id="time_end" class="form-control" type="time" name="time_end"
                                    value="{{ old('time_end') }}">
                            </div>
                            <div class="form-group" my-2>
                                <label for="location">Location</label>
                                <input id="location" class="form-control" type="text" name="location"
                                    value="{{ old('location') }}">
                            </div>

                            <button type="submit" class="btn btn-primary my-2">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
