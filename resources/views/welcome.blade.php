<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A.A.S.</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url({{url('image/uquu.png')}});
            background-repeat: no-repeat;
            background-size: contain;
            background-color: rgb(33, 120, 130);
        }

        html, body {
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 55px;
            font-weight: bold;
            font-family: Droid Arabic Kufi Regular, sans-serif;
            color: white;
            margin-top: 75%;
        }

        .subTitle {
            font-size: 40px;
            color: white;
        }

        .links > a {
            color: #fff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        #link:hover {
            font-weight: bold;
            border: 1px soild #9c7911;
            border-radius: 15px;
        }

        .UQU-3xH{
            margin-top: 100px;
            color: white;
          }

        #MyTeam{
            text-align: center;
            font-family: Brush Script MT, Brush Script Std, cursive;
            font-size: 25px
        }

        #MyTeam:hover {
            color: #30249c;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    @if (Route::has('login'))
        <div class="top-right links" id="link">
            @auth
                <a href="{{ url('/home') }}">صفحة التحكم</a>
            @else
                <a href="{{ route('login') }}">تسجيل الدخول</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">مستخدم جديد</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title">
            منظومة الإرشاد الأكاديمي<br>
            <span class="subTitle">@Umm Al-Qura University</span>
        </div>
        <div>
            <div class="UQU-3xH">
                 جامعة أم القرى تطوير فريق
                <div>
                    <span id="MyTeam">3xH</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
