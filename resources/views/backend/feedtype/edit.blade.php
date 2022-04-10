@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/feedtype" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/feedtype/{{ $feedtype->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                        <div class="form-group my-2">
                            <label for="name">Name *</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $feedtype->name }}">
                        </div>
                        {{-- <div class="form-group my-2">
                            <label for="user_id">User_ID *</label>
                            <input id="user_id" class="form-control" type="text" name="user_id" value="{{ old('user_id') }}">
                        </div> --}}
                        {{-- <div class="form-group my-2">
                            <label for="user_id">User ID</label>
                            <input id="user_id" class="form-control" type="text" name="user_id" value="{{ old('user_id') }}">
                        </div> --}}

                        {{-- <div class="form-group my-2">
                            <label for="logo">Upload Company Logo *</label>
                            <input id="logo" class="form-control-file" type="file" name="logo" value="{{ old('logo') }}">
                        </div> --}}
                        <button type="submit" class="btn btn-primary my-2">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
