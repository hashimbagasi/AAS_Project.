@extends('layouts.DeptNavbar')
@section('DeptNavbar')

    <head>
        <style>
            .submit-bottom {
                border-radius: 5px;
                background-color: #2a8f99;
                color: white;
                padding: 0 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                margin: 5px;
            }

            #left0 {
                float: left;
                margin: auto;
                display: inline-block;
            }

        </style>
    </head>
    <div style="margin: auto;width: 90%;">
        <div class="breadcrumbs-wrapper hide-for-print">
            <ul class="breadcrumbs">
                <li><a href="https://uqu.edu.sa/"> الصفحة الرئيسية</a></li>
                <li><a href="https://uqu.edu.sa/">بوابة الخدمات الالكترونية</a></li>
                <li>
                    <span class="current">
                    <form name="brdcrmbForm" id="brdcrmbForm" action="/uqu/ui/Dept/homeIndex.faces"
                          enctype="application/x-www-form-urlencoded" method="post">
                    <input name="brdcrmbForm" type="hidden" value="brdcrmbForm">
                    <a id="brdcrmbForm:actorHomeCmd"
                       onclick="mojarra.jsfcljs(document.getElementById('brdcrmbForm'),{'brdcrmbForm:actorHomeCmd':'brdcrmbForm:actorHomeCmd'},'');return false"
                       href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState"
                                                             id="j_id_id0:javax.faces.ViewState:2"
                                                             type="hidden"
                                                             value="467320290596521415:-2986297305866003870"
                                                             autocomplete="off">
                    </form>
                    </span>
                </li>
                <li><a href="../Department/DeptHome">منظومة الإرشاد الأكاديمي</a></li>
                <li><a href=""> عرض محادثات الطلاب </a></li>
            </ul>
            <hr>

        </div>

        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            @foreach ($Departments as $Department)
                <tr>
                    <td class="Title"><span id="Administrator-top-Form">رقم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->id}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">اسم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->name}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">الكلية</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->college}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">القسم</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->Department}}</span></td>

                </tr>
                <tr>
                    <td class="Title"><span id="Administrator-top-Form">الفصل</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->NSemester}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">العبء النظامي</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->Official_Load}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form"></span>العبء الفعلي</td>
                    <td><span id="myForm:facNameText2">{{ $Department->Actual_Load}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">الدرجة العلمية</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->Academic_Degree}}</span></td>
                </tr>
                <tr>
                    @endforeach
                    <td class="text"></td>
                </tr>

            </tbody>
        </table>
        <script type="text/javascript">
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

            function errorCertHCS() {
                document.getElementById('errorCertHCSDiv').style.display = "";
            }
        </script>

        ﻿


        <div class="site-footer-wrapper">

            &nbsp;@include('messages')

            {!! Form::open(['Link_to_action'=>'DepartmentController@ShowChat','method'=>'post','enctype'=>'multipart/form-data']) !!}
            <select class="custom-select" id="Sender" name="Sender">
                <option value=""disabled selected>اختر رقم المرشد</option>
                @foreach($Advisors as $Advisor)
                    <option value="{{$Advisor->Id}}">{{$Advisor->Id}}</option>
                @endforeach
            </select>

            <select class="custom-select" id="Receiver" name="Receiver">
                <option value=""disabled selected>اختار رقم الطالب</option>
                @foreach($Students as $Student)
                    <option value="{{$Student->id}}">{{$Student->id}}</option>
                @endforeach
            </select>
            <div id="left0">
                {{Form::submit('إنشاء الملف' ,['class'=>'submit-button'])}}
            </div>
            {!!Form::close()!!}
        </div>
    </div>
    <div id="left">
        <a id="back-buttom"
           href="./DeptHome">➤ رجوع </a>
    </div>
    <br>
    <br>

@endsection
