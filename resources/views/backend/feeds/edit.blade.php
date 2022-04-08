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
                    <form action="/feed/{{ $feed->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group" my-2>
                        <label for="feed_type_id">Feed Type</label>
                        <select id="feed_type_id" class="form-control" name="feed_type_id">
                            @foreach ($feedtype as $item)
                                <option value="{{$item->id}}">{{ $item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group my-2">
                            <label for="qty">Quantity *</label>
                            <input id="qty" class="form-control" type="text" name="qty" value="{{ $feed->qty }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="cost_of_feed">Cost *</label>
                            <input id="cost_of_feed" class="form-control" type="text" name="cost_of_feed" value="{{ $feed->cost_of_feed}}">
                        </div>
                        <div class="form-group my-2">
                            <label for="date_of_purchase">Purchased Date</label>
                            <input id="date_of_purchase" class="form-control" type="date" name="date_of_purchase" value="{{ $feed->date_of_purchase }}">
                        </div>
                        <div class="form-group my-2">
                            <label for="notes">Notes</label>
                            <input id="notes" class="form-control" type="text" name="notes" value="{{ $feed-> notes }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary my-2">update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
