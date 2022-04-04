@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/setting" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/setting/{{ $setting->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                        <div class="form-group my-2">
                            <label for="name">Company Name *</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $setting->name }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="address">Address *</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ $setting->address }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="contact">Contact *</label>
                            <input id="contact" class="form-control" type="text" name="contact" value="{{ $setting->contact }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email (Optional)</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ $setting->email }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="logo">Upload Company Logo *</label>
                            <input id="logo" class="form-control-file" type="file" name="logo" >
                        </div>

                        <div class="my2">
                            <img src="{{ asset($setting->logo) }}" width="120" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
