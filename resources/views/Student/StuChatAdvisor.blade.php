@extends('layouts.stFrame')
@section('stFrame')


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
        {{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

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

            /*.user-wrapper {*/
            /*    height: 600px;*/
            /*}*/

            .user {
                cursor: pointer;
                padding: 5px 0;
                position: relative;
            }

            .user:hover {
                background: #4eb3bd;
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
                /*text-align: right;*/
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
                background: #86754d;
                color: #fff;
                font-weight: bold;
                border: 1px soild #2fac9b;
                border-radius: 10px;
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

            #ChatoA {
                width: 70%;
                margin-right: auto;
                margin-left: auto;
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
            <li><a href="../Student/StuHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href=""> التواصل مع المرشد الأكاديمي </a></li>

        </ul><hr>
    </div>
    <div>
        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            @foreach ($Students as $Student)
                <tr>
                    <td class="Title"><span id="myForm:gen_sem2">الفصل</span></td>
                    <td class="text">{{$Student->Current_Semester}}</td>
                    <td class="Title"><span id="myForm:studNoText2">رقم الطالب</span></td>
                    <td class="text"><span id="myForm:studNo2">{{$Student->id}}</span></td>
                    <td class="Title"><span id="myForm:studName2">اسم الطالب</span></td>
                    <td class="text"><span id="myForm:studNameText2">{{$Student->name}}</span></td>
                    <td class="Title">الوضع العام</td>
                    <td class="text">{{$Student->General_Status}}</td>
                </tr>
                <tr>
                    <td class="Title"><span id="myForm:facName2">الكلية</span></td>
                    <td class="text"><span id="myForm:facNameText2">{{$Student->College}}</span></td>
                    <td class="Title"><span id="myForm:majorNameText2">التخصص</span></td>
                    <td class="text"><span id="myForm:majorName2"></span>{{$Student->Department}}</td>
                    <td class="Title">الدرجة العلمية</td>
                    <td class="text">{{$Student->Academic_Degree}}</td>
                    <td class="Title">نوع الدراسة</td>
                    <td class="text">{{$Student->Study_Type}}</td>
                </tr>
                <tr>
                    <td class="Title">المعدل التراكمي</td>
                    <td class="text">{{$Student->GPA}}</td>
                    <td class="Title">المستوى</td>
                    <td class="text">{{$Student->Level}}</td>
                    <td class="Title">الساعات المسجلة</td>
                    <td class="text">{{$Student->Recorded_Hours}}</td>
                    <td class="Title">الحالة الأكاديمية</td>
                    <td class="text">متوقع تخرجه</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            @foreach ($Advisors as $Advisor)

                <tr>
                    <td width="50%" class="Title">المرشد الأكاديمي</td>
                    <td width="50%" class="text">{{$Advisor->Name}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <br>
    <div id="ChatoA">
        <div class="container-fluid">
            <div class="row">
                <a href="uqu.edu.sa" target="_blank">
                    <div class="col-md-4">
                        <div class="user-wrapper">
                            <ul class="users" id="advSection">
                                @foreach($users as $user)
                                    <li class="user" id="{{ $user->Id }}">
                                        {{--will show unread count notification--}}
                                        @if($user->unread)
                                            <span class="pending">{{ $user->unread }}</span>
                                        @endif

                                        <div class="media" style="text-align: center;" title="انقر هنا ثم قم بكتابة رسالتك في الحقل ثم اضغط على Enter للارسال">
                                            <div class="media-left">
                                                <a><span class="avatar" style="margin-left: 5px"><img alt="Advisor"
                                                                                                      src="https://drive.uqu.edu.sa/up/avatar/437/s*********_small.png"></span></a>
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
                </a>

                <div class="col-md-8" id="messages">

                </div>

                {{--                <div class="col-md-8" id="messages">--}}
                {{--                    <div class="message-wrapper">--}}
                {{--                        <ul class="messages">--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>yfh</p>--}}
                {{--                                    <p class="date">09 Apr 20, 11:31 pm</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>cccc</p>--}}
                {{--                                    <p class="date">10 Apr 20, 03:39 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>hi</p>--}}
                {{--                                    <p class="date">10 Apr 20, 03:40 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>يبسيبس</p>--}}
                {{--                                    <p class="date">10 Apr 20, 04:02 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>asdasd</p>--}}
                {{--                                    <p class="date">10 Apr 20, 04:15 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="sent">--}}
                {{--                                    <p>test123</p>--}}
                {{--                                    <p class="date">10 Apr 20, 05:17 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="message clearfix">--}}

                {{--                                <div class="received">--}}
                {{--                                    <p>twetwe</p>--}}
                {{--                                    <p class="date">10 Apr 20, 07:14 am</p>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}

                {{--                    <div class="input-text">--}}
                {{--                        <input name="message" class="submit" type="text">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
        <body>
        <div id="app">


            <main class="py-4">
{{--                <div style="color: red">--}}
{{--                    انقر على اسم مرشدك ثم قم بكتابة رسالتك في الحقل ثم اضغط على Enter للارسال--}}
{{--                </div>--}}
            </main>
        </div>

        <br>
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
                        url: "StuChatAdvisor/message/" + receiver_id, // need to create this route
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
                            url: "StuChatAdvisor/message", // need to create this post route
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
    </div>
    <br>
    <div id="left">
        <a id="back-buttom"
           href="../Student/StuHome"> ➤ رجوع </a>
    </div>
    <br>
@endsection
