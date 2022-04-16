@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/feed" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/feed" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" my-2>
                        <label for="feed_type_id">Feed Type</label>
                        <select required id="feed_type_id" class="form-control" name="feed_type_id">
                            @foreach ($feedtype as $item)
                                <option value="{{$item->id}}">{{ $item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group my-2">
                            <label for="qty">Quantity *</label>
                            <input required id="qty" class="form-control" type="text" name="qty" value="{{ old('qty') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="cost_of_feed">Cost *</label>
                            <input required id="cost_of_feed" class="form-control" type="text" name="cost_of_feed" value="{{ old('cost_of_feed') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="date_of_purchase">Purchased Date</label>
                            <input required id="date_of_purchase" class="form-control" type="date" name="date_of_purchase" value="{{ old('date_of_purchase') }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="notes">Notes</label>
                            <input required id="notes" class="form-control" type="text" name="notes" value="{{ old('notes') }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary my-2">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
