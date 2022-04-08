@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/income" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/income" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-2">
                        <label for="name">Name *</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group" my-2>
                        <label for="account_category_id">Account Categories</label>
                        <select id="account_category_id" class="form-control" name="account_category_id">
                            @foreach ($account as $item)
                                <option value="{{$item->id}}">{{ $item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        
                        
                        
                        <button type="submit" class="btn btn-primary my-2">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
