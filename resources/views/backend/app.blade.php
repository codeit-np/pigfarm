<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PigFarm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 250px;
        }
        </style>
</head>

<body>
    @include('sweetalert::alert')

    <header>
        <div class="logo">User<span>Dashboardsss</span></div>
    </header>
    <div class="nav-btn">Menu</div>
    <div class="container-fluid">

        <div class="sidebar">
            <nav class="nav">
                <a href="#"><span>Dashboard</span></a>
                <ul>
                    <li><a href="/home">Dashboard</a></li>
                    <li class="active" style="color: orange;font-size: 18px">Company Setup</li>
                    <li><a href="/setting">General Setting</a></li>
                    <li><a href="/breed">Manage Breed</a></li>
                    <li><a href="/group">Pig Group</a></li>
                    <li><a href="/feedtype">Feed Type</a></li>
                    <li><a href="/subcategories">Sub Categories</a></li>
                    {{-- <li><a href="/expenses">Expense Categories</a></li> --}}
                    <li class="active" style="color: orange;font-size: 18px">Transaction</li>
                    <li><a href="/transaction">Transaction</a></li>
                    <li><a href="/pig">New Pig</a></li>


                    <li class="active" style="color: orange;font-size: 18px">Events</li>
                    <li><a href="/event">Event</a></li>
                    <li class="active">Reports</li>

                    <li>
                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            @if (!empty($company))
            <h5>{{ $company->name }} Dashboard</h5>
            @else
            <h5>User Dashboard</h5>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
