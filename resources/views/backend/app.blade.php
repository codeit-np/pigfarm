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
        <div class="logo">User<span>Dashboard</span></div>
    </header>
    <div class="nav-btn">Menu</div>
    <div class="container-fluid">

        <div class="sidebar">
            <nav class="nav">
                <a href="#"><span>Dashboard</span></a>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="/setting">General Setting</a></li>
                    <li><a href="/breed">Manage Breed</a></li>
                    <li><a href="/group">Pig Group</a></li>
                    <li><a href="#">Feed Type</a></li>
                    <li><a href="#">Income Categories</a></li>
                    <li><a href="#">Expense Categoreis</a></li>
                    <li><a href="#">Manage Pig</a></li>
                    <li><a href="#">Feeds</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Income</a></li>
                    <li><a href="#">Expenses</a></li>
                    <li><a href="#">Report</a></li>


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
            <h5>User Dashboard</h5>
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
