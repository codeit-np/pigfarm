@extends('backend.app')
@section('content')
<div class="py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/transaction/create" class="btn btn-primary btn-sm">New Transaction</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Date</th>
                                    <th>Particular</th> <!-- Sub Catgegory -->
                                    <th>Type</th> <!-- Main Account -->
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $index=>$item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->sub_category->name }}</td>
                                        <td>{{ $item->sub_category->account_category->name }}</td>
                                        <td>{{ number_format($item->amount,2)}}</td>
                                        <td>{{ $item->remarks ?? "-"}}</td>
                                        <td>

                                            <form action="/transaction/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/transaction/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>
                                            </form>
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
</div>

@endsection
