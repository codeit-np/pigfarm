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

                            <tbody>
                                @foreach ($event  as $index=> $item)

                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time_begin }}</td>
                                    <td>{{ $item->time_end }}</td>
                                    <td>{{ $item->location }}</td>
                                    
                                    <td>
                                        <a href="/event/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                                 
                            </tbody>
                        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
