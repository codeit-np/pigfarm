@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/note" class="btn btn-primary btn-sm">Back</a>
                        </div>
                        <div class="card-body">
                            <form action="/note/{{ $note->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="description">Note *</label>
                                <textarea id="description" class="form-control" name="description" rows="3">{!! $note->description !!}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary my-2">Update Record</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

