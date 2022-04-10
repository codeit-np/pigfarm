@extends('backend.app')
@section('content')
<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/transaction" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/transaction/{{ $transaction->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Transaction Date *</label>
                                    <input id="date" class="form-control" type="date" name="date" value="{{ $transaction->date }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ref">Reference No.(Optional)</label>
                                    <input id="ref" class="form-control" type="text" name="ref" placeholder="eg. Supplier Bill No" value="{{ $transaction->ref }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label for="sub_category_id">Transaction on *</label>
                            <select id="sub_category_id" class="form-control" name="sub_category_id">
                                @foreach ($accounts as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $transaction->sub_category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount *</label>
                            <input id="amount" class="form-control" type="text" name="amount" value="{{ $transaction->amount }}">
                        </div>

                        <div class="form-group">
                            <label for="remarks">Remarks (Optinal)</label>
                            <textarea id="remarks" class="form-control" name="remarks" rows="3">{{ $transaction->remarks }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm my-2">Update Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
