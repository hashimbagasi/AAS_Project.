<!DOCTYPE html>
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>stu</title>-->
<!--</head>-->
<!--<body>-->

<!--</body>-->
<!--</html>-->


<html lang="ar" dir="RTL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جامعة أم القرى :: البوابة الإلكترونية للنظام الأكاديمي</title>
    <link href="/uqu/resources/assets/uqu-ui/common/images/logo-favicon.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <link href="{{asset('css/Stu_File/app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/Stu_File/temp.css')}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <script src="{{asset('js/Stu_File/f92cc1628c.js.')}}" type="text/javascript"></script>
    <script src="{{asset('js/Stu_File/nr-1044.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/Stu_File/analytics.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/Stu_File/newrelic.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/Stu_File/google.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/Stu_File/jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
        #Question_title {
            width: 100%;
            text-align: center;
            font-family: "Arial Black", Gadget, sans-serif;
            font-size: 25px;
            letter-spacing: 2px;
            word-spacing: 2px;
            color: #C5A154;
            font-weight: 700;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: normal;
            text-transform: none;
        }

        select[datatype=text] {
            margin: 8px;
            text-align: center;
            width: 50%;
            padding: 9px 20px;
            box-sizing: border-box;
            border: 1px solid #555;
            outline: none;
        }

        #centered {
            width: 100%;
            text-align: center;
            margin: 10px 10px 10px 10px;

        }

        .wrapper-dropdown-3 {
            /* Size and position */
            position: relative;
            width: 200px;
            margin: 0 auto;
            padding: 10px;
        }

        .wrapper-dropdown-3:after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            right: 15px;
            top: 50%;
            margin-top: -3px;
            border-width: 6px 6px 0 6px;
            border-style: solid;
            border-color: #8aa8bd transparent;
        }

        .wrapper-dropdown-3 .dropdown {
            /* Size & position */
            position: absolute;
            top: 140%;
            left: 0;
            right: 0;

            /* Styles */
            background: white;
            border-radius: inherit;
            border: 1px solid rgba(0, 0, 0, 0.17);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font-weight: normal;
            transition: all 0.5s ease-in;
            list-style: none;

            /* Hiding */
            opacity: 0;
            pointer-events: none;
        }

        .wrapper-dropdown-3 .dropdown li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #8aa8bd;
            border-bottom: 1px solid #e6e8ea;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 1);
            transition: all 0.3s ease-out;
        }

        .wrapper-dropdown-3 .dropdown li i {
            float: right;
            color: inherit;
        }

        .wrapper-dropdown-3 .dropdown li:first-of-type a {
            border-radius: 7px 7px 0 0;
        }

        .wrapper-dropdown-3 .dropdown li:last-of-type a {
            border-radius: 0 0 7px 7px;
            border: none;
        }

        /* Hover state */

        .wrapper-dropdown-3 .dropdown li:hover a {
            background: #f3f8f8;
        }

        .wrapper-dropdown-3 .dropdown:after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            bottom: 100%;
            right: 15px;
            border-width: 0 6px 6px 6px;
            border-style: solid;
            border-color: #fff transparent;
        }

        .wrapper-dropdown-3 .dropdown:before {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            bottom: 100%;
            right: 13px;
            border-width: 0 8px 8px 8px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 0.1) transparent;
        }

        .wrapper-dropdown-3.active .dropdown {
            opacity: 1;
            pointer-events: auto;
        }

        @font-face {
            font-family: 'icomoon';
            src: url('../fonts/icomoon/icomoon.eot?-rdnm34');
            src: url('../fonts/icomoon/icomoon.eot?#iefix-rdnm34') format('embedded-opentype'),
            url('../fonts/icomoon/icomoon.woff?-rdnm34') format('woff'),
            url('../fonts/icomoon/icomoon.ttf?-rdnm34') format('truetype'),
            url('../fonts/icomoon/icomoon.svg?-rdnm34#icomoon') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        div.cs-skin-border {
            background: transparent;
            font-size: 2em;
            font-weight: 700;
            max-width: 600px;
        }

        @media screen and (max-width: 30em) {
            .cs-skin-border {
                font-size: 1em;
            }
        }

        .cs-skin-border > span {
            border: 5px solid #000;
            border-color: inherit;
            transition: background 0.2s, border-color 0.2s;
        }

        .cs-skin-border > span::after,
        .cs-skin-border .cs-selected span::after {
            font-family: 'icomoon';
            content: 'e000';
        }

        .cs-skin-border ul span::after {
            content: '';
            opacity: 0;
        }

        .cs-skin-border .cs-selected span::after {
            content: 'e00e';
            color: #ddd9c9;
            font-size: 1.5em;
            opacity: 1;
            transition: opacity 0.2s;
        }

        .cs-skin-border.cs-active > span {
            background: #fff;
            border-color: #fff;
            color: #2980b9;
        }

        .cs-skin-border .cs-options {
            color: #2980b9;
            font-size: 0.75em;
            opacity: 0;
            transition: opacity 0.2s, visibility 0s 0.2s;
        }

        .cs-skin-border.cs-active .cs-options {
            opacity: 1;
            transition: opacity 0.2s;
        }

        .cs-skin-border ul span {
            padding: 1em 2em;
            backface-visibility: hidden;
        }

        .cs-skin-border .cs-options li span:hover,
        .cs-skin-border li.cs-focus span {
            background: #f5f3ec;
        }

        /* Styles */
        /*background: #fff;*/
        /*border-radius:7px;*/
        /*border:1px solid rgba(0,0,0,0.15);*/
        /*box-shadow:0 1 px 1px rgba(50,50,50,.1);*/
        /*cursor: pointer;*/
        /*outline: none;*/

        /* Font settings */
        font-weight: bold

        ;
        color: #8AA8BD

        ;
        }
        input[type=text] {
            margin: auto;
            text-align: center;
            width: 50%;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 1px solid #555;
            outline: none;
        }

        #container {
            width: 100%;
            text-align: center;

        }


        #left {
            float: left;
            width: 100px;
        }

        #center {
            display: inline-block;
            margin: 0 auto;
            width: 100px;
        }

        #right {
            float: right;
            width: 100px;
        }

        /* fix utf symbole issue */
        html {
            font-family: Droid Arabic Kufi Regular, sans-serif;
        }

        .site-header-wrapper #bottom-bar-wrapper {
            margin-top: 0.5rem !important;
        }

        .site-header-wrapper #bottom-bar-wrapper {
            margin-top: 0.5rem !important;
        }

        .site-header-wrapper, .top-bar-wrapper {
            top: 0;
        }

        .submit-bottom {
            float: left;
            /*width: 6%;*/
            border-radius: 5px;
            background-color: #2a8f99;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;

        }

        /* fix tables issue with messages -- cod removed to css*/
        .box-wrapper.withShadow {
            box-shadow: 0 0 7px rgba(0, 0, 0, .18);
            transition: all 0.3s ease-in-out;
            padding: 10px;
            border-bottom: .3rem #999 solid;
            background: #fff;
            margin-bottom: 15px;
        }

        .box-wrapper.withShadow:hover {
            box-shadow: 0 0 7px rgba(0, 0, 0, .35);
            border-bottom: .3rem #4eb3bd solid;
        }
    </style>
    <meta class="foundation-mq">
</head>
<body class="sub-site" style="font-family:Droid Arabic Kufi Regular,sans-serif;">
<input id="ServerId" type="hidden" value="1">
<header class="site-header-wrapper">
    <section class="top-bar-wrapper" data-uqu-sticky-top-bar="">
        <div class="top-bar">
            <div class="navigation-options">

                <ul class="dropdown menu item site-top-navigation" role="menubar"
                    data-dropdown-menu="99bgxw-dropdown-menu">
                    <li class="has-submenu uqu-site-navigation is-dropdown-submenu-parent is-down-arrow" role="menuitem"
                        aria-expanded="false" aria-haspopup="true" aria-selected="false" aria-label="&#10;">
                        <a tabindex="0">
                            <i class="fa fa-home"></i></a>
                        <ul class="submenu menu vertical is-dropdown-submenu first-sub" role="menu" aria-hidden="true"
                            data-submenu="">
                            <li class="uqu-site-menu-titel is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                <img class="icon" alt="جامعة أم القرى"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAACTFBMVEUAAAD///+FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2FdU2w17ZBAAAAw3RSTlMAAAECAwQFBggJCg8QERITFBcZGhwdHyAiIyQmKCkrLC4vMDM1Nzg5Ozw+P0BCQ0RFRkhJS0xNTk9QUVJTVFVWV1hZWltcXV5fYGFiY2RlZmdpamtsbW5vcHFyc3R1dnd4eXp8fX5/gIGCg4SFhoeIiYuMjY6PkJGSk5aXmJqbnJ2eoKKjpKWmp6ipqqytrrCxsrO0tbe4ubq7vL7AwcLDxMbHyMnKzM3P0tPV1tja29zd3t/h4uTl5urw8fP19vf5/P4BnaBUAAACG0lEQVQoz2NgBAEGBm4dBgRQE2RgYIRIQKVV0pGk4zXRpX1bmJj4QVLiQFwfhCbNMWuOhWQEO1DKN49Db+ksTjTdU+epsUzRtWSwqSm1VFwyG93w1s3iDNy9U/pXrm7n4t3Rii7tWSbOYJEwN7SwjZ2BpywCmzTnhNz6nXNFcElrbO/YtmfrYk4s0v7V4gyBC+bv3rdwbxJPdTiatOHMznrf1qJlk5vmT13a3DXNBFXarrBsxaRM/zWr1hV69WzIrPZFlXbesH571KJDhw8fPrDJfeb6zcGo0oLa0qYqfemBzoEp7UHWCgaiqNJiDr5mlg11Cxvl+ju0bXztJVClPSN8c/yBRh/m3nU4whcIWFGkHZX05Y1B0oK7Dluo6sua86BIZ3po+wWBpOP2Hc6y0EwPRpVO91Ty9APK7p+85XCWpVK6J4p0pA4QaIXNODhxZncciK0TgSztliUVGO1mLGNU5OrPwutepxXriiztXWrQtc6HgzneJVkoM0h/ekaWH7K03Vb70jxRE4tcwXglpvSkac5Z7sjS9lEpVQs3WpVFs+Vla9S2VHgl2SJLKwc4y01uTotRks/r6+taF9zgo4waaobpXotqq4sX5S+pWVuSn+mHGqgC/lna5gYhQUIly9uT4ioTBNBSi2S8Wo2rujCDmXdwb0qIJHpiYuBzL8gvWZeoF12e6svHgCHNwCBn45QSFm1uJQfmQaQBz0apfMuLf0YAAAAASUVORK5CYII=">
                                <span class="title">جامعة أم القرى</span>
                            </li>
                            <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                aria-label="عن الجامعة">
                                <a>عن الجامعة</a>
                                <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                    data-submenu="">
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/main/AboutUs" target="_self">نبذة عن الجامعة</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/main/2" target="_self">أهداف الجامعة</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/main/3" target="_self">الخطة الاستراتيجية</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/main/4" target="_self">أنظمة ولوائح الجامعة</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                aria-label="إدارة الجامعة">
                                <a>إدارة الجامعة</a>
                                <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                    data-submenu="">
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/rect" target="_self">مدير الجامعة</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/4" target="_self">الوكلاء</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/3" target="_self">العمادات</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/8" target="_self">الإدارات</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/7" target="_self">المراكز</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/9" target="_self">الوحدات</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/43" target="_self">المجالس</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                aria-label="الكليات">
                                <a>الكليات</a>
                                <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                    data-submenu="">
                                    <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                        aria-label="الكليات الشرعية والإدارية">
                                        <a>الكليات الشرعية والإدارية</a>
                                        <ul class="menu submenu is-dropdown-submenu vertical" role="menu"
                                            aria-hidden="true" data-submenu="">
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/colshria" target="_self">كلية الشريعة
                                                    والدراسات الإسلامية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/coldawa" target="_self">كلية الدعوة وأصول
                                                    الدين</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/cjsr" target="_self">كلية الدراسات القضائية
                                                    والأنظمة</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/fesif" target="_self">كلية العلوم الإقتصادية
                                                    والمالية
                                                    الإسلامية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/dba" target="_self">كلية إدارة الأعمال</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/hisbah" target="_self">المعهد العالي للأمر
                                                    بالمعروف والنهي
                                                    عن المنكر</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                        aria-label="الكليات العلمية والهندسية">
                                        <a>الكليات العلمية والهندسية</a>
                                        <ul class="menu submenu is-dropdown-submenu vertical" role="menu"
                                            aria-hidden="true" data-submenu="">
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/coleng" target="_self">كلية الهندسة والعمارة
                                                    الإسلامية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/cis" target="_self">كلية الحاسب الآلي ونظم
                                                    المعلومات</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/fasci" target="_self">كلية العلوم
                                                    التطبيقية</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                        aria-label="الكليات الطبية">
                                        <a>الكليات الطبية</a>
                                        <ul class="menu submenu is-dropdown-submenu vertical" role="menu"
                                            aria-hidden="true" data-submenu="">
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/f_med" target="_self">كلية الطب</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/dentistry" target="_self">كلية طب
                                                    الأسنان</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/pharmcol" target="_self">كلية الصيدلة</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/nursing" target="_self">كلية التمريض</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/phhi" target="_self">كلية الصحة العامة
                                                    والمعلوماتية الصحية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/fameds" target="_self">كلية العلوم الطبية
                                                    التطبيقية</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                        aria-label="كليات العلوم الإنسانية والتربوية">
                                        <a>كليات العلوم الإنسانية والتربوية</a>
                                        <ul class="menu submenu is-dropdown-submenu vertical" role="menu"
                                            aria-hidden="true" data-submenu="">
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/coledumk" target="_self">كلية التربية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/colarab" target="_self">كلية اللغة
                                                    العربية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/css" target="_self">كلية العلوم
                                                    الاجتماعية</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/comserv" target="_self">كلية خدمة المجتمع
                                                    والتعليم المستمر</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/mcc" target="_self">كلية المجتمع بمكة
                                                    المكرمة</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/dart" target="_self">كلية التصاميم</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/instarab" target="_self">معهد اللغة العربية
                                                    لغير الناطقين
                                                    بها</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                        aria-label="كليات الفروع">
                                        <a>كليات الفروع</a>
                                        <ul class="menu submenu is-dropdown-submenu vertical" role="menu"
                                            aria-hidden="true" data-submenu="">
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/juc" target="_self">الكلية الجامعية
                                                    بالجموم</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/App/Browser/Menu/3858" target="_self">فرع
                                                    الليث</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/App/Browser/Menu/3859" target="_self">فرع
                                                    القنفذة</a>
                                            </li>
                                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                                <a href="https://uqu.edu.sa/uca" target="_self">الكلية الجامعية بمحافظة
                                                    أضم</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                aria-label="القبول بالجامعة">
                                <a>القبول بالجامعة</a>
                                <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                    data-submenu="">
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/dadregis/bsc" target="_self">برامج البكالوريوس</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/gs/masters" target="_self">برامج الماجستير</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/gs/phd" target="_self">برامج الدكتوراه</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/dadregis/diploma" target="_self">برامج الدبلوم</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">برامج الدبلوم العالي</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">برامج معهد اللغة العربية لغير الناطقين بها</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/dadregis/Evening-Prep-year" target="_self">برامج
                                            السنة التأهيلية</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">برامج الانتساب</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/dadregis/transfer-to-UQU" target="_self">التحويل
                                            لجامعة أم القرى</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item is-left-arrow opens-left"
                                role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                aria-label="البحث والابتكار">
                                <a>البحث والابتكار</a>
                                <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                    data-submenu="">
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/lib" target="_self">مكتبة الملك عبدالله</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/dsr" target="_self">عمادة البحث العلمي</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a href="https://uqu.edu.sa/App/Browser/CatSite/6" target="_self">المعاهد
                                            البحثية</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">المجلات العلمية</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">الكراسي العلمية</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                        <a target="_self">المراكز البحثية</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="go-to-top-site is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                <a href="https://uqu.edu.sa/">
                                    <span class="go-to-top-site-icon"></span>العودة لموقع الجامعة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu current-site-navigation no-arrow is-dropdown-submenu-parent is-down-arrow"
                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false" aria-label="">
                        <a><i class="fa fa-bars"></i></a>
                        <ul class="submenu menu vertical is-dropdown-submenu first-sub" role="menu" aria-hidden="true"
                            data-submenu="">
                            <form name="smallnavmyForm" id="smallnavmyForm" action="/uqu/ui/student/homeIndex.faces"
                                  enctype="application/x-www-form-urlencoded" method="post">
                                <input name="smallnavmyForm" type="hidden" value="smallnavmyForm">
                            <!--li class="is-submenu-item is-dropdown-submenu-item has-submenu is-dropdown-submenu-parent is-left-arrow opens-left"
                                    role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                    aria-label="التسجيل الإلكتروني"><a style="display: block;line-height: 1;" href="#">التسجيل
                                        الإلكتروني</a>
                                    <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                        data-submenu="">
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">

                                            <script src="{{asset('js/Stu_File/jssf.js')}}" type="text/javascript"></script>
                                            <a id="smallnavmyForm:stdOfferedCoursesCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdOfferedCoursesCmd':'smallnavmyForm:stdOfferedCoursesCmd'},'');return false"
                                               href="#">المقررات المطروحة</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdOnlineRegistrationCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdOnlineRegistrationCmd':'smallnavmyForm:stdOnlineRegistrationCmd'},'');return false"
                                               href="#">الحذف والإضافة</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdAddRegReqCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdAddRegReqCmd':'smallnavmyForm:stdAddRegReqCmd'},'');return false"
                                               href="#">طلب اضافة مقرر بموافقة القسم</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdSecChngRegReqCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdSecChngRegReqCmd':'smallnavmyForm:stdSecChngRegReqCmd'},'');return false"
                                               href="#">طلب تغيير شعبة بموافقة القسم</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdDelRegReqCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdDelRegReqCmd':'smallnavmyForm:stdDelRegReqCmd'},'');return false"
                                               href="#">طلب حذف مقرر بموافقة القسم</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdWIthRegReqCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdWIthRegReqCmd':'smallnavmyForm:stdWIthRegReqCmd'},'');return false"
                                               href="#">طلب انسحاب من مقرر</a>
                                        </li>

                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdShowRegReqCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdShowRegReqCmd':'smallnavmyForm:stdShowRegReqCmd'},'');return false"
                                               href="#">عرض طلبات التسجيل بموافقة القسم</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:studScheduleCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:studScheduleCmd':'smallnavmyForm:studScheduleCmd'},'');return false"
                                               href="#">المقررات المسجلة</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" id="crsResultLi"
                                            role="menuitem">
                                            <a onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:j_id_id34':'smallnavmyForm:j_id_id34'},'');return false"
                                               href="#"><span class="orangeLink">نتائج المقررات</span></a>
                                        </li>
                                    </ul>
                                </li-->
                                <li class="is-submenu-item is-dropdown-submenu-item has-submenu is-dropdown-submenu-parent is-left-arrow opens-left"
                                    role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                    aria-label="أكاديمي"><a style="display: block;line-height: 1;" href="#">أكاديمي</a>
                                    <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                        data-submenu="">
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdTranscriptAllCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdTranscriptAllCmd':'smallnavmyForm:stdTranscriptAllCmd'},'');return false"
                                               href="#">قوائم الطلاب</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdPlanAllCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdPlanAllCmd':'smallnavmyForm:stdPlanAllCmd'},'');return false"
                                               href="#">رصد الدرجات</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:mainEnteredTrans"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:mainEnteredTrans':'smallnavmyForm:mainEnteredTrans'},'');return false"
                                               href="#">ادخال الغيابات</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdMainRequestMajorChangesCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdMainRequestMajorChangesCmd':'smallnavmyForm:stdMainRequestMajorChangesCmd'},'');return false"
                                               href="#">طلب استدراك نتيجة</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdRequestEducationDegreeCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdRequestEducationDegreeCmd':'smallnavmyForm:stdRequestEducationDegreeCmd'},'');return false"
                                               href="#">تقارير الإشراف على الرسائل العلمية</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdRequestEducationDegreeCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdRequestEducationDegreeCmd':'smallnavmyForm:stdRequestEducationDegreeCmd'},'');return false"
                                               href="#">تقارير الإرشاد للدراسات العليا</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdRequestEducationDegreeCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdRequestEducationDegreeCmd':'smallnavmyForm:stdRequestEducationDegreeCmd'},'');return false"
                                               href="#">الجدول الدراسي</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdRequestEducationDegreeCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdRequestEducationDegreeCmd':'smallnavmyForm:stdRequestEducationDegreeCmd'},'');return false"
                                               href="#">السجل الأكاديمي</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-submenu-item is-dropdown-submenu-item has-submenu is-dropdown-submenu-parent is-left-arrow opens-left"
                                    role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                                    aria-label="شخصي"><a style="display: block;line-height: 1;" href="#">شخصي</a>
                                    <ul class="menu submenu is-dropdown-submenu vertical" role="menu" aria-hidden="true"
                                        data-submenu="">

                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:stdInformationCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:stdInformationCmd':'smallnavmyForm:stdInformationCmd'},'');return false"
                                               href="#">الرواتب</a>
                                        </li>
                                        <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                            <a id="smallnavmyForm:studRewardsCmd"
                                               onclick="mojarra.jsfcljs(document.getElementById('smallnavmyForm'),{'smallnavmyForm:studRewardsCmd':'smallnavmyForm:studRewardsCmd'},'');return false"
                                               href="#">استحقاقات كلية خدمة المجتمع</a>
                                        </li>

                                    </ul>
                                </li>
                                <input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:0" type="hidden"
                                       value="467320290596521415:-2986297305866003870" autocomplete="off">
                            </form>
                        </ul>
                    </li>
                </ul>
                <time class="item datetime hide-for-small-only" data-date-format="yyyy/mm/dd هـ" data-date="2020/02/29"
                      data-lang="ar">   <?php
                    use Alkoumi\LaravelHijriDate\Hijri;
                    use \Carbon\Carbon;
                    $date = Carbon::now()->addHour(3);
                    $hdate = Hijri::Date('m/j/  Y', $date);
                    echo $hdate;
                    ?>
                </time>
                <div style="display: table-cell;">
                    <ul class="dropdown menu item " role="menubar" data-dropdown-menu="7jtoo2-dropdown-menu">
                        <li class="divider" role="menuitem"></li>
                        <li class="has-submenu uqu-site-navigation is-dropdown-submenu-parent is-down-arrow current-site-navigation"
                            role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                            aria-label="&#10;&#10;&#10;&#10;الفصل&#10;الثاني 1441&#10;الوضع العام&#10;منتظم&#10;&#10;&#10;&#10;"
                            data-is-click="false">

                            <ul class="submenu menu  is-dropdown-submenu first-sub vertical" role="menu"
                                aria-hidden="true" style="width: 75vw;" data-submenu="">
                                <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                    <table width="100%" style="font-size:90%" border="0" cellspacing="0"
                                           cellpadding="0">
                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user-options">
                <ul class="dropdown menu item user-options-list" role="menubar"
                    data-dropdown-menu="eux2fg-dropdown-menu">
                    <li class="divider" role="menuitem"></li>
                    <li class="search" role="menuitem">
                        <a tabindex="0" title="البحث في الموقع" id="o3ont6-reveal" aria-haspopup="true"
                           aria-controls="searchModal" data-open="searchModal"><i class="fa fa-search"></i></a>
                    </li>
                    <li class="divider" role="menuitem"></li>
                    <li class="has-submenu logged-in is-dropdown-submenu-parent is-down-arrow opens-left"
                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                        aria-label="Student" data-is-click="false">
                        <a><span class="avatar" style="margin-left: 5px"><img alt="Student"
                                                                              src="https://drive.uqu.edu.sa/up/avatar/437/s*********_small.png"></span><span
                                class="hide-for-small-only">{{Auth::user()->name}}</span></a>
                        <ul class="submenu menu vertical is-dropdown-submenu first-sub" role="menu" aria-hidden="true"
                            data-submenu="">
                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                <a href="https://uqu.edu.sa/Profile/s*********">الملف الشخصي</a>
                            </li>
                            <li class="is-submenu-item is-dropdown-submenu-item" role="menuitem">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="divider" role="menuitem"></li>
                    <li class="has-submenu emailLinks is-dropdown-submenu-parent opens-left" role="menuitem"
                        aria-expanded="false" aria-haspopup="true" aria-selected="false"
                        aria-label="&#10;&#10;&#10;البريد الجامعي&#10;&#10;" data-is-click="false">
                        <a href="https://outlook.com/st.uqu.edu.sa" target="_blank">البريد الجامعي</a>
                    </li>
                    <li class="divider" role="menuitem"></li>
                    <li class="has-submenu languages is-dropdown-submenu-parent is-down-arrow opens-left"
                        role="menuitem" aria-expanded="false" aria-haspopup="true" aria-selected="false"
                        aria-label="&#10;&#10;العربية&#10;" data-is-click="false">
                        <a class="flag_ar"><i></i>
                            <span class="hide-for-small-only">العربية</span></a>

                    </li>
                    <li class="divider" role="menuitem"></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="reveal large" id="searchModal" role="dialog" aria-hidden="true" aria-labelledby="o3ont6-reveal"
         data-reveal="cg5c9n-reveal" data-yeti-box="searchModal" data-resize="searchModal" data-events="resize">
        <h1 class="reveal-header">البحث في الموقع</h1>
        <form id="cse-search-box" action="https://uqu.edu.sa/App/Search" method="get">
            <div class="input-group">
                <input name="cx" type="hidden" value="partner-pub-3109343787262251:9jb5gy-ltyf">
                <input name="cof" type="hidden" value="FORID:10">
                <input name="ie" type="hidden" value="UTF-8">
                <input name="q" class="input-group-field" type="text">
                <div class="input-group-button">
                    <input name="sa" class="button" type="submit" value="البحث">
                </div>
            </div>
        </form>
        <button class="close-button" aria-label="Close reveal" type="button" data-close="">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    ﻿
    <section id="bottom-bar-wrapper">
        <section class="site-logo-wrapper">
            <div class="site-logo" href="#">
                <a class="logo" href="https://uqu.edu.sa/"><img alt="@UIF_Templates.Resources.Global.Global.SiteTitile"
                                                                src="data:image/png;base64,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"></a>
                <div class="headers-wrapper">
                    <a class="header" href="../Advisor/AdvHome"><h1>منظومة الإرشاد الاكاديمي</h1></a>
                    <a class="sub-header" href="https://uqu.edu.sa/"><h2>بوابة الخدمات الالكترونية</h2></a>
                </div>
            </div>
        </section>
        <nav class="site-navigation-wrapper hide-for-small-only">
            <form name="navmyForm" id="navmyForm" action="/uqu/ui/Advisor/homeIndex.faces"
                  enctype="application/x-www-form-urlencoded" method="post">
                <input name="navmyForm" type="hidden" value="navmyForm">
                <ul class="site-navigation-items">
                    <!--li class="item"><a aria-expanded="false" aria-haspopup="true" aria-controls="example-dropdown-1"
                                        href="#" data-options="hover: true" data-toggle="example-dropdown-1"
                                        data-is-focus="false" data-yeti-box="example-dropdown-1"><span class="icon"><i
                                    class="fa fa-university fa-2"></i></span><span
                                class="text">التسجيل الإلكتروني </span></a>
                    </li-->
                    <li class="item"><a aria-expanded="false" aria-haspopup="true" aria-controls="example-dropdown-2"
                                        href="#" data-toggle="example-dropdown-2" data-is-focus="false"
                                        data-yeti-box="example-dropdown-2"><span class="icon"><i
                                    class="fa fa-graduation-cap fa-2"></i></span><span class="text">أكاديمي</span></a>
                    </li>
                    <li class="item"><a aria-expanded="false" aria-haspopup="true" aria-controls="example-dropdown-3"
                                        href="#" data-toggle="example-dropdown-3" data-is-focus="false"
                                        data-yeti-box="example-dropdown-3"><span class="icon"><i
                                    class="fa fa-university fa-2"></i></span><span class="text">شخصي</span></a></li>
                </ul>
                <div class="dropdown-pane site-navigation-submenu-wrapper" id="example-dropdown-1" aria-hidden="true"
                     aria-labelledby="mde3vl-dd-anchor" data-dropdown="data-dropdown" data-yeti-box="example-dropdown-1"
                     data-resize="example-dropdown-1" data-events="resize">
                    <!--ul class="site-navigation-submenu">
                        <li class="item">
                            <a id="navmyForm:stdOfferedCoursesCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdOfferedCoursesCmd':'navmyForm:stdOfferedCoursesCmd'},'');return false"
                               href="#">المقررات المطروحة</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdOnlineRegistrationCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdOnlineRegistrationCmd':'navmyForm:stdOnlineRegistrationCmd'},'');return false"
                               href="#">الحذف والإضافة</a>
                        </li>
                        <li class="item">

                            <a id="navmyForm:stdAddRegReqCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdAddRegReqCmd':'navmyForm:stdAddRegReqCmd'},'');return false"
                               href="#">طلب اضافة مقرر بموافقة القسم</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdSecChngRegReqCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdSecChngRegReqCmd':'navmyForm:stdSecChngRegReqCmd'},'');return false"
                               href="#">طلب تغيير شعبة بموافقة القسم</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdDelRegReqCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdDelRegReqCmd':'navmyForm:stdDelRegReqCmd'},'');return false"
                               href="#">طلب حذف مقرر بموافقة القسم</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdWIthRegReqCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdWIthRegReqCmd':'navmyForm:stdWIthRegReqCmd'},'');return false"
                               href="#">طلب انسحاب من مقرر</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdShowRegReqCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdShowRegReqCmd':'navmyForm:stdShowRegReqCmd'},'');return false"
                               href="#">عرض طلبات التسجيل بموافقة القسم</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:studScheduleCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:studScheduleCmd':'navmyForm:studScheduleCmd'},'');return false"
                               href="#">المقررات المسجلة</a>
                        </li>
                        <li class="item" id="crsResultLi">
                            <a onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:j_id_id326':'navmyForm:j_id_id326'},'');return false"
                               href="#"><span class="orangeLink">نتائج المقررات</span></a>
                        </li>
                    </ul-->

                </div>
                <div class="dropdown-pane site-navigation-submenu-wrapper" id="example-dropdown-2" aria-hidden="true"
                     aria-labelledby="22cwjw-dd-anchor" data-dropdown="data-dropdown" data-yeti-box="example-dropdown-2"
                     data-resize="example-dropdown-2" data-events="resize">
                    <ul class="site-navigation-submenu">
                        <li class="item">
                            <a id="navmyForm:stdTranscriptAllCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdTranscriptAllCmd':'navmyForm:stdTranscriptAllCmd'},'');return false"
                               href="#">قوائم الطلاب</a>
                        </li>

                        <li class="item">
                            <a id="navmyForm:stdPlanAllCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdPlanAllCmd':'navmyForm:stdPlanAllCmd'},'');return false"
                               href="#">رصد الدرجات</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:mainEnteredTrans"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:mainEnteredTrans':'navmyForm:mainEnteredTrans'},'');return false"
                               href="#">ادخال الغيابات</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdMainRequestMajorChangesCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdMainRequestMajorChangesCmd':'navmyForm:stdMainRequestMajorChangesCmd'},'');return false"
                               href="#">طلب استدراك نتيجة</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdRequestEducationDegreeCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdRequestEducationDegreeCmd':'navmyForm:stdRequestEducationDegreeCmd'},'');return false"
                               href="#">تقارير الإشراف على الرسائل العلمية</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdRequestEducationDegreeCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdRequestEducationDegreeCmd':'navmyForm:stdRequestEducationDegreeCmd'},'');return false"
                               href="#">تقارير الإرشاد للدراسات العليا</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdRequestEducationDegreeCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdRequestEducationDegreeCmd':'navmyForm:stdRequestEducationDegreeCmd'},'');return false"
                               href="#">الجدول الدراسي</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:stdRequestEducationDegreeCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdRequestEducationDegreeCmd':'navmyForm:stdRequestEducationDegreeCmd'},'');return false"
                               href="#">السجل الأكاديمي</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown-pane site-navigation-submenu-wrapper" id="example-dropdown-3" aria-hidden="true"
                     aria-labelledby="8sfhde-dd-anchor" data-dropdown="data-dropdown" data-yeti-box="example-dropdown-3"
                     data-resize="example-dropdown-3" data-events="resize">
                    <ul class="site-navigation-submenu">

                        <li class="item">
                            <a id="navmyForm:stdInformationCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:stdInformationCmd':'navmyForm:stdInformationCmd'},'');return false"
                               href="#">الرواتب</a>
                        </li>
                        <li class="item">
                            <a id="navmyForm:studRewardsCmd"
                               onclick="mojarra.jsfcljs(document.getElementById('navmyForm'),{'navmyForm:studRewardsCmd':'navmyForm:studRewardsCmd'},'');return false"
                               href="#">استحقاقات كلية خدمة المجتمع</a>

                    </ul>
                </div>
                <input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:1" type="hidden"
                       value="467320290596521415:-2986297305866003870" autocomplete="off">
            </form>
        </nav>

    </section>
</header>


@yield('navbar')
<br>


<footer class="site-footer-wrapper">


    <div class="upper-section">
        <div class="row">
            <div class="medium-4 columns hide-for-small-only">
                <div class="wrapper">
                    <img class="QR" alt="uquFooterLogo" src="{{URL::asset('/image/uqu-logo-footer.png ')}}">
                </div>
            </div>
            <div class="medium-4 columns hide-for-small-only">
                <div class="wrapper">
                    <h3>شبكات التواصل الاجتماعي</h3>
                    <ul class="icons-list">
                        <li>
                            <a class="icon" href="https://plus.google.com/112690662174328141733" target="_blank">
                                <span class="fa fa-lg fa-google-plus"></span>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="https://www.facebook.com/uquedu" target="_blank">
                                <span class="fa fa-lg fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="https://twitter.com/uqu_edu" target="_blank">
                                <span class="fa fa-lg fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="https://instagram.com/UQUniversity" target="_blank">
                                <span class="fa fa-lg fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="https://www.youtube.com/UQUTube" target="_blank">
                                <span class="fa fa-lg fa-youtube"></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="medium-4 columns hide-for-small-only">
                <div class="wrapper">
                    <h3>تطبيقات الهواتف الذكية</h3>
                    <ul class="icons-list">
                        <li>
                            <a class="icon" href="https://goo.gl/AWR8yb" target="_blank"><span
                                    class="fa fa-android"></span></a>
                        </li>
                        <li>
                            <a class="icon" href="https://goo.gl/R6PMwm" target="_blank"><span
                                    class="fa fa-apple"></span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-section">
        <div class="row">
            <section class="copy-right medium-6 small-12 columns">جامعة أم القرى ، تطوير فريق<a>&nbsp; 3xH &nbsp;</a>
                <span></span>
            </section>
            <section class="shortcuts medium-6 columns hide-for-small-only">
                <ul class="menu shortcuts">
                    <li><a href="https://uqu.edu.sa/main/PrivacyPolicy"> سياسة الخصوصية</a></li>
                    <li><a href="https://uqu.edu.sa/main/TermsOfUse"> سياسة الاستخدام</a></li>
                    <li><a> مركز الاتصال</a></li>
                </ul>
            </section>
        </div>
    </div>
</footer>

<script src="{{asset('js/Stu_File/app.min.js')}}" type="text/javascript"></script>
<div tabindex="-1" class="reveal-overlay" aria-hidden="true" data-close="searchModal"></div>
<script src="{{asset('js/Stu_File/ajaxHome.js')}}" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">


    function spanFunction(id, image) {
        if (document.getElementById(id).style.display == "none") {
            document.getElementById(id).style.display = "";
            document.getElementById(image).src = '/uqu/images/blueDownAr.gif';
            onAjaxHome(id + "_Dept", "");
        } else {
            document.getElementById(id).style.display = "none";
            document.getElementById(image).src = '/uqu/images/blueAr.gif';
            onAjaxHome(id + "_Dept", "none");
        }
    }

    function openWindow(url) {
        window.open(url, 'mywindow', 'width=800,height=600,resizable=yes,scrollbars=yes');
    }
</script>
<script id="f5_cspm">(function () {
        var f5_cspm = {
            f5_p: 'LOHMBEHMHNLEMMKGOGHKJGDCDGJAEHBMGMONHPOFFOJIMLMPCANEJJIMKPPOANIMODDBHFHMGFMHKNOMAANAGLPEAJALGBHGDBINOLFFPNOLIKDJOKJMKMHBGJAHHJJN',
            setCharAt: function (str, index, chr) {
                if (index > str.length - 1) return str;
                return str.substr(0, index) + chr + str.substr(index + 1);
            },
            get_byte: function (str, i) {
                var s = (i / 16) | 0;
                i = (i & 15);
                s = s * 32;
                return ((str.charCodeAt(i + 16 + s) - 65) << 4) | (str.charCodeAt(i + s) - 65);
            },
            set_byte: function (str, i, b) {
                var s = (i / 16) | 0;
                i = (i & 15);
                s = s * 32;
                str = f5_cspm.setCharAt(str, (i + 16 + s), String.fromCharCode((b >> 4) + 65));
                str = f5_cspm.setCharAt(str, (i + s), String.fromCharCode((b & 15) + 65));
                return str;
            },
            set_latency: function (str, latency) {
                latency = latency & 0xffff;
                str = f5_cspm.set_byte(str, 40, (latency >> 8));
                str = f5_cspm.set_byte(str, 41, (latency & 0xff));
                str = f5_cspm.set_byte(str, 35, 2);
                return str;
            },
            wait_perf_data: function () {
                try {
                    var wp = window.performance.timing;
                    if (wp.loadEventEnd > 0) {
                        var res = wp.loadEventEnd - wp.navigationStart;
                        if (res < 60001) {
                            var cookie_val = f5_cspm.set_latency(f5_cspm.f5_p, res);
                            window.document.cookie = 'f5avr1402279419aaaaaaaaaaaaaaaa_cspm_=' + encodeURIComponent(cookie_val) + ';path=/';
                        }
                        return;
                    }
                } catch (err) {
                    return;
                }
                setTimeout(f5_cspm.wait_perf_data, 100);
                return;
            },
            go: function () {
                var chunk = window.document.cookie.split(/\s*;\s*/);
                for (var i = 0; i < chunk.length; ++i) {
                    var pair = chunk[i].split(/\s*=\s*/);
                    if (pair[0] == 'f5_cspm' && pair[1] == '1234') {
                        var d = new Date();
                        d.setTime(d.getTime() - 1000);
                        window.document.cookie = 'f5_cspm=;expires=' + d.toUTCString() + ';path=/;';
                        setTimeout(f5_cspm.wait_perf_data, 100);
                    }
                }
            }
        }
        f5_cspm.go();
    }());</script>

</body>
</html>
