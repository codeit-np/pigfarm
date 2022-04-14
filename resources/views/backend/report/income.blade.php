@extends('backend.app')
@section('content')
<div>
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                    <h5>Income Report</h5>
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
                                        <a href="/transaction/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
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
