@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/event/create" class="btn btn-primary btn-sm">Events</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Time Begins</th>
                                <th>Time Ends</th>
                                <th>Location</th>
                            </tr>
                        </thead>

                            {{-- <thead>
                                @foreach ($event  as $index=> $item)

                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->name }}</td>
                                    
                                    <td>
                                        <a href="/breed/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                                 
                            </thead> --}}
                        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
