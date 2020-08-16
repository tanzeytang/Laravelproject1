<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Laravel Test Project- @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('static/bootstrap.min.css') }}">
        @section('style')

        @show
    </head>
    <body>
{{-- head block --}}
@section('header')
        <div class="jumbotron">
            <div class="container">
                <h2>Laravel Project For Testing</h2>
                <p>Laravel Form</p>
            </div>
        </div>
@show
{{-- middle block --}}
        <div class="container">
            <div class="row">
                {{-- left menu block --}}
                <div class="col-md-3">
                    @section('leftmenu')
                        <div class="list-group">
                            <a href="{{ url('student/index') }}" class="list-group-item 
                            {{ Request::getPathInfo() == '/student/index' ? 'active' : '' }}">Student List:{{ Request::getPathInfo() }}</a>
                            <a href="{{ url('student/create') }}" class="list-group-item
                            {{ Request::getPathInfo() == '/student/create' ? 'active' : '' }}">Add Student</a>
                        </div>
                    @show
                </div>
                {{-- right content block --}}
                <div class="col-md-9">


                    @yield('content')

                </div>
            </div>
        </div>

        {{-- footer --}}
@section('footer')
        <div class="jumbotron" style="margin:0;">
            <div class="container">
                <span>@2016 imooc</span>
            </div>
        </div>
@show

        <script src="{{ asset('static/jquery.min.js') }}"></script>
        <script src="{{ asset('static/bootstrap.min.js') }}"></script>
@section('javascript')

@show

    </body>
</html>