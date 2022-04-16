@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/group" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/group" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" my-2>
                                <label for="name">Names</label>
                                <input required id="name" class="form-control" type="text" name="name"
                                    value="{{ old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-primary my-2">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
