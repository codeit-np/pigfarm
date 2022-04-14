@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                    <a href="/pig"> <img src="{{ asset('images/pig_group.jpg') }}" class="img-fluid" alt=""></a>
                      <span class="text-align-center" style="text-align: center">Total Pig in farm <br> {{ $totalPig }}</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <a href="/income"><img src="{{ asset('images/pig_income.jpg') }}" class="img-fluid" alt=""></a>
                      <span class="text-align-center" style="text-align: center">Total Income <br> {{ number_format($totalIncome,2) }}</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                       <a href="/expenses"> <img src="{{ asset('images/expanse1.jpg') }}" class="img-fluid" alt=""></a>
                      <span class="text-align-center" style="text-align: center">Total Expanse <br> {{ number_format($totalExpanse,2) }}</span>
                    </div>
                </div>

                {{-- <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/pig_group.jpg') }}" class="img-fluid" alt="">
                      <span class="text-align-center" style="text-align: center">Total Pig <br> {{ $totalPig }}</span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
