@extends('layouts.navbar')
@section('navbar')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            /* width */
            ::-webkit-scrollbar {
                width: 7px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #a7a7a7;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #929292;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            li {
                list-style: none;
            }

            .user-wrapper, .message-wrapper {
                border: 1px solid #dddddd;
                overflow-y: auto;
            }

            .user-wrapper {
                height: 600px;
            }

            .user {
                cursor: pointer;
                padding: 5px 0;
                position: relative;
            }

            .user:hover {
                background: #eeeeee;
            }

            .user:last-child {
                margin-bottom: 0;
            }

            .pending {
                position: absolute;
                left: 13px;
                top: 9px;
                background: #b600ff;
                margin: 0;
                border-radius: 50%;
                width: 18px;
                height: 18px;
                line-height: 18px;
                padding-left: 5px;
                color: #ffffff;
                font-size: 12px;
            }

            .media-left {
                margin: 0 10px;
            }

            .media-left img {
                width: 64px;
                border-radius: 64px;
            }

            .media-body p {
                margin: 6px 0;
                text-align: right;
                color: black;
            }

            .message-wrapper {
                padding: 10px;
                height: 536px;
                background: #eeeeee;


            }

            .messages .message {
                margin-bottom: 12px;
            }

            .messages .message:last-child {
                margin-bottom: 0;
            }

            .received, .sent {
                width: 45%;
                padding: 3px 10px;
                border-radius: 10px;
                margin-right: auto;
            }

            .received, .sent {
                font-size: 15px;
                color: black;
            }

            .received {
                background: #ffffff;
            }
            .sent {
                background: #00656f;
                float: right;
                text-align: right;
                color: white;
            }

            .message p {
                margin: 5px 0;
            }

            .date {
                color: #777777;
                font-size: 12px;
            }

            .active {
                background: #eeeeee;
            }

            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 15px 0 0 0;
                display: inline-block;
                border-radius: 4px;
                box-sizing: border-box;
                outline: none;
                border: 1px solid #cccccc;
            }

            input[type=text]:focus {
                border: 1px solid #aaaaaa;
            }

            .box-wrapper0{
                font-size: 100%;
                box-shadow: 0 0 7px rgba(0, 0, 0, .18);
                transition: all 0.3s ease-in-out;
                padding: 10px;
                background: #fff;
                margin-bottom: 15px;
                text-align: right;
                padding-right: 10px;
                max-width: 100%;
                margin: .25rem 0;
                border-collapse: inherit;
                border-bottom:.3rem #999 solid;
            }

            .box-wrapper0:hover{
                border-bottom:.3rem #3a9997 solid;
            }
        </style>
    </head>


    <div class="breadcrumbs-wrapper hide-for-print">
        <ul class="breadcrumbs">
            <li><a href="https://uqu.edu.sa/"> الصفحة الرئيسية</a></li>
            <li><a href="https://uqu.edu.sa/">بوابة الخدمات الالكترونية</a></li>
            <li>
<span class="current">
<form name="brdcrmbForm" id="brdcrmbForm" action="/uqu/ui/student/homeIndex.faces"
      enctype="application/x-www-form-urlencoded" method="post">
<input name="brdcrmbForm" type="hidden" value="brdcrmbForm">
<a id="brdcrmbForm:actorHomeCmd"
   onclick="mojarra.jsfcljs(document.getElementById('brdcrmbForm'),{'brdcrmbForm:actorHomeCmd':'brdcrmbForm:actorHomeCmd'},'');return false"
   href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:2"
                                         type="hidden" value="467320290596521415:-2986297305866003870"
                                         autocomplete="off">
</form>
</span>
            </li>
            <li><a href="/Advisor/AdvHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="">التواصل مع الطالب</a></li>

        </ul>
        <hr>
    </div>

    <div>
        <table width="90%" class="box-wrapper0 withShadow" style="font-size:90%;margin: auto" border="0" cellspacing="0" cellpadding="0">
            @foreach ($Advisors as $Advisor)
                <tr>
                    <td class="Title"><span id="myForm:studNoText2">رقم المحاضر</span></td>
                    <td class="text"><span id="myForm:facNameText2">{{ $Advisor->id }}</span></td>
                    <td class="Title"><span id="myForm:studName2">اسم المحاضر</span></td>
                    <td class="text"><span id="myForm:facNameText2">{{ $Advisor->name }}</span></td>
                    <td class="Title"><span id="myForm:facName2">الكلية</span></td>
                    <td class="text"><span id="myForm:facNameText2">{{ $Advisor->college }}</span></td>
                    <td class="Title"><span id="myForm:majorNameText2">القسم</span></td>
                    <td class="text"><span id="myForm:majorName2">{{ $Advisor->Department }}</span></td>
                </tr>
                <tr>
                    <td class="Title"><span id="myForm:gen_sem2">الفصل</span></td>
                    <td class="text">{{ $Advisor->Current_Semester}}</td>
                    <td class="Title">العبء النظامي</td>
                    <td class="text">{{ $Advisor->Official_Hours }}</td>
                    <td class="Title">العبء الفعلي</td>
                    <td class="text">{{ $Advisor->Actual_Hours }}</td>
                    <td class="Title">الدرجة العلمية</td>
                    <td class="text">{{ $Advisor->Academic_Degree}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>

    <br>
    <div class="container-fluid" style="margin-right: 5%;width: 85%">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wrapper">
                    <ul class="users">
                        @foreach($users as $user)
                            <li class="user" id="{{ $user->id }}">
                                {{--will show unread count notification--}}
                                @if($user->unread)
                                    <span class="pending">{{ $user->unread }}</span>
                                @endif

                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ $user->avatar }}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{ $user->name }}</p>
                                        <p class="email">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages"></div>
        </div>
    </div>
    <body>
    <div id="app">


        <main class="py-4">

        </main>
    </div>

    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>

    <script>
        var receiver_id = '';
        var my_id = "{{ Auth::id() }}";
        $(document).ready(function () {
            // ajax setup form csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('2ac7052c9d1cab6c87bd', {
                cluster: 'ap2',
                forceTLS: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function (data) {
                // alert(JSON.stringify(data));
                if (my_id == data.from) {
                    $('#' + data.to).click();
                } else if (my_id == data.to) {
                    if (receiver_id == data.from) {
                        // if receiver is selected, reload the selected user ...
                        $('#' + data.from).click();
                    } else {
                        // if receiver is not seleted, add notification for that user
                        var pending = parseInt($('#' + data.from).find('.pending').html());

                        if (pending) {
                            $('#' + data.from).find('.pending').html(pending + 1);
                        } else {
                            $('#' + data.from).append('<span class="pending">1</span>');
                        }
                    }
                }
            });

            $('.user').click(function () {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();

                receiver_id = $(this).attr('id');
                $.ajax({
                    type: "get",
                    url: "AdvContactStu/message/" + receiver_id, // need to create this route
                    data: "",
                    cache: false,
                    success: function (data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                });
            });

            $(document).on('keyup', '.input-text input', function (e) {
                var message = $(this).val();

                // check if enter key is pressed and message is not null also receiver is selected
                if (e.keyCode == 13 && message != '' && receiver_id != '') {
                    $(this).val(''); // while pressed enter text box will be empty

                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                    $.ajax({
                        type: "post",
                        url: "AdvContactStu/message", // need to create this post route
                        data: datastr,
                        cache: false,
                        success: function (data) {

                        },
                        error: function (jqXHR, status, err) {
                        },
                        complete: function () {
                            scrollToBottomFunc();
                        }
                    })
                }
            });
        });

        // make a function to scroll down auto
        function scrollToBottomFunc() {
            $('.message-wrapper').animate({
                scrollTop: $('.message-wrapper').get(0).scrollHeight
            }, 50);
        }
    </script>
    </body>
    <br>
    <div>
        <a style="text-decoration: none; float: left;margin-left: 30px"
           href="../Advisor/AdvHome"> ➤ رجوع </a>
    </div>
    <br>
@endsection
