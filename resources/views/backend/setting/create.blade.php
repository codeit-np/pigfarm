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
                    <form action="/setting" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group my-2">
                            <label for="name">Company Name *</label>
                            <input required id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="address">Address *</label>
                            <input required id="address" class="form-control" type="text" name="address" value="{{ old('address') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="contact">Contact *</label>
                            <input required id="contact" class="form-control" type="text" name="contact" value="{{ old('contact') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email (Optional)</label>
                            <input required id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="logo">Upload Company Logo *</label>
                            <input required id="logo" class="form-control-file" type="file" name="logo" value="{{ old('logo') }}">
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
