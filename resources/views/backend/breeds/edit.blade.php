@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/breed" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/breed/{{ $breed->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group" my-2>
                                <label for="name">Names</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $breed->name }}">
                            </div>

                            <button type="submit" class="btn btn-primary my-2">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
