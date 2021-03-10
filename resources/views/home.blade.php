@extends('layouts.app')

@section('content')

    <head>

        <style>
            html body .col-md-8 {
                background-image: url({{url('image/uquu.png')}});
                background-repeat: no-repeat;
                background-size: cover;
                -webkit-background-size: cover;
                background-color: rgb(33, 120, 130);
            }

            .listUser+a {
                display: inline;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <div class="listUser">
                            <a href="Student/StuHome">Student</a><br>
                            <a href="Advisor/AdvHome">Advisor</a><br>
                            <a href="Department/DeptHome">Department</a><br>
                            <a href="Administrator/AdminHome">Administrator</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
