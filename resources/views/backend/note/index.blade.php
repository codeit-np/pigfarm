@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <a href="/note/create" class="btn btn-primary my-4">Add Note</a>
                @foreach ($notes as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">{!! $item->description !!}</p>
                                <p class="text-muted" style="font-size: 12px">{{ $item->created_at->diffForHumans() }}</p>
                                <a href="/note/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
