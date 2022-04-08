@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/feed/create" class="btn btn-primary btn-sm">Feeds</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Feed Type</th>
                                <th>Quantity</th>
                                <th>Cost</th>
                                <th>Purchased Date</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                            <thead>
                                @foreach ($feed  as $index=> $item)

                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->feed_type->name }}</td>
                                    <td>{{ $item->qty }}kg</td>
                                    <td>{{ $item->cost_of_feed }}</td>
                                    <td>{{ $item->date_of_purchase }}</td>
                                    <td>{{ $item->notes }}</td>
                                    
                                    <td>
                                        <a href="/feed/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                                 
                            </thead>
                        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
