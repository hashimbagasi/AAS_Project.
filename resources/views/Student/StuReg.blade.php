@extends('layouts.stFrame')
@section('stFrame')

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
            <li><a href=""> طلبات التسجيل الأكاديمي </a></li>
        </ul>
    </div>
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
                <td class="text">{{$Student->Academic_Status}}</td>
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


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tabs</title>

        <style>
            [data-tab-content] {
                display: none;
            }

            .active[data-tab-content] {
                display: block;
                height: 85%;
                background-color: #ffffff;
                color: white;
                text-align: center;
                padding-top: 50px;
                box-sizing: border-box;
                font-family: sans-serif;
                font-size: 22px;

            }

            .tabContainer {
                width: 100%;
                height: 350px;
            }

            .tabContainer .Tabs {
                height: 15%;
                /*border-color: gray;*/
            }

            /*.tabContainer .Tabs .tab {*/
            /*    width: 25%;*/
            /*    height: 100%;*/
            /*    float: right;*/
            /*    list-style-type: none;*/
            /*    border: 1px solid lightgrey;*/
            /*    outline: none;*/
            /*    cursor: pointer;*/
            /*    padding: 10px;*/
            /*    font-family: sans-serif;*/
            /*    font-size: 18px;*/
            /*    background-color: #eee;*/
            /*    text-decoration: none;*/
            /*    text-align: center;*/
            /*}*/

            /*.tabContainer .Tabs .tab:hover {*/
            /*    background-color: #d7d4d4;*/
            /*}*/

            .tab.active {
                background-color: #7b5e0f;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .tab {
                width: 24%;
                height: 100%;
                float: right;
                margin: 5px;
                color: white;
                list-style-type: none;
                border: 1px solid #9c7911;
                border-radius: 10px;
                outline: none;
                cursor: pointer;
                padding: 10px;
                font-family: http://fonts.googleapis.com/earlyaccess/droidarabickufi.css;
                font-size: 16px;
                font-weight: bold;
                background-color: #9c7911;
                text-decoration: none;
                text-align: center;
            }

            .tab:hover {
                background-color: #7b5e0f;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .EditGroup {
                margin-right: auto;
                margin-left: auto;
                width: 90%;
                font-family: sans-serif;
                font-size: 16px;
            }

            #optionList {
                width: 90%;
                padding: 6px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin: 5px
            }

            .submit {
                width: 8%;
                /*background-color: #4CAF50;*/
                color: white;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                /*margin-right:auto;*/
                /*margin-left:auto;*/
                font-weight: bold;
                font-size: 15px;
                float: left;
                display: block;
            }

            .submit:hover {
                background-color: #45a049;
            }

            .Submit {
                width: 8%;
                padding: 3px 4px;
                color: white;
                font-family: sans-serif;
                font-size: 15px;
                font-weight: bold;
                display: inline;
                float: left;
                margin-left: 12px;
                margin-right: 15px;
                margin-top: 6px;
                border: 1px solid #2fac9b;
                border-radius: 5px;
                background-color: #4CAF50;
            }

            .Submit:hover {
                background-color: #45a049;
            }

        </style>
    </head>

    <body>

    <br>
    <div class="small-12 columns">
        <h1 id="page-title">
            التسجيل الأكاديمي
        </h1>
        <hr>
    </div>
    <br>
    <div class="tabContainer">
        <ul class="Tabs">
            <li class="tab" data-tab-target="#TAB1"><a href="https://uquweb.uqu.edu.sa/uqu/ui/student/registration/registrationRequests/index/preRequestIndex.faces">اضافة مقرر</a></li>
            <li class="tab" data-tab-target="#TAB2"><a href="https://uquweb.uqu.edu.sa/uqu/ui/student/registration/registrationRequests/index/preRequestIndex.faces">تعديل شعبة</a></li>
            <li class="tab" data-tab-target="#TAB3"><a href="https://uquweb.uqu.edu.sa/uqu/ui/student/registration/registrationRequests/index/preRequestIndex.faces">حذف مقرر</a></li>
            <li class="tab" data-tab-target="#TAB4"><a href="https://uquweb.uqu.edu.sa/uqu/ui/student/registration/registrationRequests/index/preRequestIndex.faces">الانسحاب من مقرر</a></li>
        </ul>

{{--        <div class="tab-content">--}}

{{--            <!--Add Course-->--}}
{{--            <div id="TAB1" data-tab-content>--}}
{{--                <div class="row">--}}
{{--                    <div class="column  large-12 ">--}}
{{--                        <div style="background-color: #f9f9f9; border: 1px soild #f9f9f9;border-radius: 15px">--}}
{{--                            <table width="25%" class="student-plan EditGroup" id="j_id_id538:dataTbl" border="0"--}}
{{--                                   cellspacing="0" cellpadding="0">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th width="25%">--}}
{{--                                        رمز المقرر--}}
{{--                                    </th>--}}
{{--                                    <th width="25%">--}}
{{--                                        اسم المقرر--}}
{{--                                    </th>--}}
{{--                                    <th width="25%">--}}
{{--                                        المقر--}}
{{--                                    </th>--}}
{{--                                    <th width="25%">--}}
{{--                                        الساعات--}}
{{--                                    </th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                            </table>--}}
{{--                            <ul class="accordion" role="tablist" data-allow-all-closed="true"--}}
{{--                                data-accordion="xc1uo3-accordion">--}}
{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" id="panel1d-3954-label" role="tab"--}}
{{--                                       aria-expanded="true"--}}
{{--                                       aria-selected="true" aria-controls="panel1d-3954" href="#panel1d-3954">--}}
{{--                                        <span>--}}
{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0" cellpadding="0">--}}
{{--                                                    <tr>--}}
{{--                                                        @foreach($Course1 as $Course1)--}}
{{--                                                            <td width="25%">--}}
{{--                                                        {{ $Course1->Course_id }}--}}
{{--                                                    </td>--}}
{{--                                                            <td width="25%">--}}
{{--                                                        {{ $Course1->Course_name }}--}}
{{--                                                    </td>--}}
{{--                                                            <td width="25%">--}}
{{--                                                        {{ $Course1->Course_location }}--}}
{{--                                                    </td>--}}
{{--                                                            <td width="25%">--}}
{{--                                                        {{ $Course1->Course_hour }}--}}
{{--                                                    </td>--}}
{{--                                                        @endforeach--}}
{{--                                                </tr>--}}

{{--                                            </table>--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                    <div class="accordion-content" id="panel1d-3954" role="tabpanel"--}}
{{--                                         aria-hidden="false"--}}
{{--                                         aria-labelledby="panel1d-3954-label" style="display: block;"--}}
{{--                                         data-tab-content="">--}}
{{--                                                <span class="text-primary">--}}
{{--                                                    <table width="40%" class="student-plan EditGroup"--}}
{{--                                                           id="j_id_id538:dataTbl" border="0"--}}
{{--                                                           cellspacing="0" cellpadding="0">--}}
{{--                                                        <thead>--}}
{{--                                                            <tr>--}}
{{--                                                                <td>--}}
{{--                                                                    الشعبة--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    النشاط--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    الحالة--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    المحاضر--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    التوقيت--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    اختر--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                        </thead>--}}
{{--                                                        <tbody>--}}
{{--                                                        @foreach($ACourse1 as $ACourse)--}}
{{--                                                            <tr>--}}
{{--                                                                <td>--}}
{{--                                                                    {{ $ACourse->Course_group }}--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    {{ $ACourse->Course_type }}--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    {{ $ACourse->Course_state }}--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    {{ $ACourse->Course_instructor }}--}}
{{--                                                                </td>--}}
{{--                                                                <td>--}}
{{--                                                                    {{ $ACourse->Course_time }}--}}
{{--                                                                </td>--}}

{{--                                                                <td>--}}
{{--                                                                    <input type="radio" name="addCourse" value=""--}}
{{--                                                                           style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                                                </td>--}}

{{--                                                            </tr>--}}
{{--                                                        @endforeach--}}
{{--                                                        </tbody>--}}
{{--                                                    </table>--}}
{{--                                                </span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                       aria-expanded="false"--}}
{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                        <span>--}}
{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <tr>--}}
{{--                                                    @foreach($Course2 as $Course2)--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                                    </td>--}}
{{--                                                    @endforeach--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                         aria-hidden="true"--}}
{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                        <span class="text-primary">--}}

{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            الشعبة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            النشاط--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            الحالة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            المحاضر--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            التوقيت--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            اختر--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                @foreach($ACourse2 as $ACourse)--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                       aria-expanded="false"--}}
{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                        <span>--}}
{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <tr>--}}
{{--                                                    @foreach($Course3 as $Course3)--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course3->Course_id }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course3->Course_name }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course3->Course_location }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course3->Course_hour }}--}}
{{--                                                    </td>--}}
{{--                                                    @endforeach--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                         aria-hidden="true"--}}
{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                        <span class="text-primary">--}}

{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            الشعبة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            النشاط--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            الحالة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            المحاضر--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            التوقيت--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            اختر--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                @foreach($ACourse3 as $ACourse)--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                         </span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                       aria-expanded="false"--}}
{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                        <span>--}}
{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <tr>--}}
{{--                                                    @foreach($Course4 as $Course4)--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course4->Course_id }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course4->Course_name }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course4->Course_location }}--}}
{{--                                                    </td>--}}
{{--                                                        <td width="25%">--}}
{{--                                                        {{ $Course4->Course_hour }}--}}
{{--                                                    </td>--}}
{{--                                                    @endforeach--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                         aria-hidden="true"--}}
{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                        <span class="text-primary">--}}

{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                                   border="0"--}}
{{--                                                   cellspacing="0"--}}
{{--                                                   cellpadding="0">--}}
{{--                                                <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            الشعبة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            النشاط--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            الحالة--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            المحاضر--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            التوقيت--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            اختر--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                @foreach($ACourse4 as $ACourse)--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                         </span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <span>--}}
{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course5 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse5 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}

{{--                                    --}}{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course6 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse6 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}

{{--                                    --}}{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course7 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse7 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}

{{--                                    --}}{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course8 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse8 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}

{{--                                    --}}{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course9 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse9 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}

{{--                                    --}}{{--                                <li class="accordion-item">--}}
{{--                                    --}}{{--                                    <a class="accordion-title" id="panel1d-3957-label" role="tab"--}}
{{--                                    --}}{{--                                       aria-expanded="false"--}}
{{--                                    --}}{{--                                       aria-selected="false" aria-controls="panel1d-3957" href="#panel1d-3957">--}}
{{--                                    --}}{{--                                        <span>--}}
{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <tr>--}}
{{--                                    --}}{{--                                                    @foreach($Course10 as $Course2)--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_id }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_name }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_location }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                        <td width="25%">--}}
{{--                                    --}}{{--                                                        {{ $Course2->Course_hour }}--}}
{{--                                    --}}{{--                                                    </td>--}}
{{--                                    --}}{{--                                                    @endforeach--}}
{{--                                    --}}{{--                                                </tr>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </a>--}}
{{--                                    --}}{{--                                    <div class="accordion-content" id="panel1d-3957" role="tabpanel"--}}
{{--                                    --}}{{--                                         aria-hidden="true"--}}
{{--                                    --}}{{--                                         aria-labelledby="panel1d-3957-label" data-tab-content="">--}}
{{--                                    --}}{{--                                        <span class="text-primary">--}}

{{--                                    --}}{{--                                            <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl"--}}
{{--                                    --}}{{--                                                   border="0"--}}
{{--                                    --}}{{--                                                   cellspacing="0"--}}
{{--                                    --}}{{--                                                   cellpadding="0">--}}
{{--                                    --}}{{--                                                <thead>--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الشعبة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            النشاط--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            الحالة--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            المحاضر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            التوقيت--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            اختر--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                </thead>--}}
{{--                                    --}}{{--                                                <tbody>--}}
{{--                                    --}}{{--                                                @foreach($ACourse10 as $ACourse)--}}
{{--                                    --}}{{--                                                    <tr>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_group }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_type }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_state }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_instructor }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            {{ $ACourse->Course_time }}--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                        <td>--}}
{{--                                    --}}{{--                                                            <input type="radio" name="addCourse" value=""--}}
{{--                                    --}}{{--                                                                   style="text-align: center; margin-right: auto;margin-left: auto">--}}
{{--                                    --}}{{--                                                        </td>--}}
{{--                                    --}}{{--                                                    </tr>--}}
{{--                                    --}}{{--                                                @endforeach--}}
{{--                                    --}}{{--                                                </tbody>--}}
{{--                                    --}}{{--                                            </table>--}}
{{--                                    --}}{{--                                        </span>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </li>--}}
{{--</span>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br><br>--}}
{{--                <input class="Submit" type="button" id="reqEG" value="ارسال">--}}
{{--            </div>--}}

{{--            <!--Edit Group-->--}}
{{--            <div id="TAB2" data-tab-content>--}}
{{--                <div class="row">--}}
{{--                    <div class="column  large-12 ">--}}
{{--                        <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl" border="0"--}}
{{--                               cellspacing="0"--}}
{{--                               cellpadding="0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="HEADING" scope="col">رمز المقرر</th>--}}
{{--                                <th class="HEADING" scope="col">اسم المقرر</th>--}}
{{--                                <th class="HEADING" scope="col">النشاط</th>--}}
{{--                                <th class="HEADING" scope="col">الشعبة</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($stable as $stable)--}}
{{--                            <tr class="ROW1">--}}
{{--                                    <td>--}}
{{--                                        {{$stable->course_id}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$stable->course_name}}--}}
{{--                                    </td>--}}
{{--                                    <td width="20%">--}}
{{--                                        {{$stable->course_type}}--}}
{{--                                        <form action="">--}}
{{--                                            <select id="optionList" name="Activity">--}}
{{--                                                <option value="activity">الرجاء اختيار النشاط</option>--}}
{{--                                                    <option value="activity">{{$stable->course_type}}</option>--}}
{{--                                            </select>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                    <td width="20%">--}}
{{--                                        <form action="">--}}
{{--                                            <select id="optionList" name="GroupNo">--}}
{{--                                                <option value="activity">الرجاء اختيار رقم الشعبة</option>--}}
{{--                                                    <option value="activity">1</option>--}}
{{--                                                    <option value="activity">2</option>--}}
{{--                                            </select>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}


{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br><br>--}}
{{--                <input class="Submit" type="button" id="reqEG" value="ارسال">--}}
{{--            </div>--}}

{{--            <!--Delete Course-->--}}
{{--            <div id="TAB3" data-tab-content>--}}
{{--                <div class="row">--}}
{{--                    <div class="column  large-12 ">--}}
{{--                        <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl" border="0"--}}
{{--                               cellspacing="0"--}}
{{--                               cellpadding="0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="HEADING" scope="col">رمز المقرر</th>--}}
{{--                                <th class="HEADING" scope="col">اسم المقرر</th>--}}
{{--                                <th class="HEADING" scope="col" width="20%">المقر</th>--}}
{{--                                <th class="HEADING" scope="col">الساعات</th>--}}
{{--                                <th class="HEADING" scope="col">اختر</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($stDelT as $stDelT)--}}
{{--                            <tr class="ROW1">--}}
{{--                                <td>--}}
{{--                                    {{$stDelT->course_id}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$stDelT->course_name}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$stDelT->course_location}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$stDelT->course_hour}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <input type="radio" id="r1" name="Dcourse" value="1">--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br><br><br>--}}
{{--                <input class="Submit" type="button" id="reqEG" value="ارسال">--}}
{{--            </div>--}}

{{--            <!--Withdraw from Course-->--}}
{{--            <div id="TAB4" data-tab-content>--}}
{{--                <div class="row">--}}
{{--                    <div class="column  large-12 ">--}}
{{--                        <table width="40%" class="student-plan EditGroup" id="j_id_id538:dataTbl" border="0"--}}
{{--                               cellspacing="0"--}}
{{--                               cellpadding="0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="HEADING" scope="col">رمز المقرر</th>--}}
{{--                                <th class="HEADING" scope="col">اسم المقرر</th>--}}
{{--                                <th class="HEADING" scope="col" width="20%">المقر</th>--}}
{{--                                <th class="HEADING" scope="col">الساعات</th>--}}
{{--                                <th class="HEADING" scope="col">اختر</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($stWT as $stWT)--}}
{{--                                <tr class="ROW1">--}}
{{--                                    <td>--}}
{{--                                        {{$stWT->course_id}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$stWT->course_name}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$stWT->course_location}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$stWT->course_hour}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input type="radio" id="r1" name="Wcourse" value="1">--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br><br><br>--}}
{{--                --}}{{--                <button class="submit">ارسال</button>--}}
{{--                <input class="Submit" type="button" id="reqEG" value="ارسال">--}}
{{--            </div>--}}


{{--            <br>--}}
{{--        </div>--}}
    </div>

{{--    <br><br>--}}
    <script>
        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                })
                tabs.forEach(tab => {
                    tab.classList.remove('active')
                })
                tab.classList.add('active')
                target.classList.add('active')
            })
        })
    </script>
    </body>
    <div id="left">
        <a id="back-buttom" href="/Student/StuHome" style="float: left;margin-left: 10px">➤ رجوع</a>
    </div>

    {{--    <head>--}}
    {{--        <meta charset="utf-8">--}}
    {{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
    {{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
    {{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
    {{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}

    {{--        <style>--}}

    {{--        </style>--}}

    {{--    </head>--}}
    {{--    <body>--}}
    {{--    <br>--}}
    {{--    <div class="small-12 columns">--}}
    {{--        <h1 id="page-title">--}}
    {{--            التسجيل الأكاديمي--}}
    {{--        </h1>--}}
    {{--        <hr>--}}
    {{--    </div>--}}
    {{--   --}}

    {{--    <div class="tabContainer">--}}
    {{--        <div class="buttonContainer">--}}
    {{--            <a class="nav-link {{request()->is('/Student/StuReg/tab1')?'active':null}}" href="{{url('/Student/StuReg/tab1')}}"--}}
    {{--               role="tab">اضافة مقرر</a>--}}
    {{--            <a class="nav-link {{request()->is('/Student/StuReg/tab2')?'active':null}}" href="{{url('/Student/StuReg/tab2')}}"--}}
    {{--               role="tab">تعديل شعبة</a>--}}
    {{--            <a class="nav-link {{request()->is('/Student/StuReg/tab3')?'active':null}}" href="{{url('/Student/StuReg/tab3')}}"--}}
    {{--               role="tab">حذف مقرر</a>--}}
    {{--            <a class="nav-link {{request()->is('/Student/StuReg/tab4')?'active':null}}" href="{{url('/Student/StuReg/tab4')}}"--}}
    {{--               role="tab">الانسحاب من مقرر</a>--}}
    {{--        </div>--}}
    {{--        <div class="tab-content">--}}
    {{--            <div class="tabPanel tab-pane {{request()->is('/Student/StuReg/tab1') ? 'active':null}}" id="{{url('/Student/StuReg/tab1')}}" role="tab1"><p>TAB 1</p></div>--}}
    {{--            <div class="tabPanel tab-pane {{request()->is('/Student/StuReg/tab2') ? 'active':null}}" id="{{url('/Student/StuReg/tab2')}}" role="tab2"><p>TAB 2</p></div>--}}
    {{--            <div class="tabPanel tab-pane {{request()->is('/Student/StuReg/tab3') ? 'active':null}}" id="{{url('/Student/StuReg/tab3')}}" role="tab3"><p>TAB 3</p></div>--}}
    {{--            <div class="tabPanel tab-pane {{request()->is('/Student/StuReg/tab4') ? 'active':null}}" id="{{url('/Student/StuReg/tab4')}}" role="tab4"><p>TAB 4</p></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    </body>--}}





    {{--    <script>--}}
    {{--        var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");--}}
    {{--        var tabPanels=document.querySelectorAll(".tabContainer .tabPanel");--}}

    {{--        function showPanel(panelIndex,colorCode) {--}}
    {{--            tabButtons.forEach(function (node) {--}}
    {{--               node.style.backgroundColor="";--}}
    {{--               node.style.color="";--}}
    {{--            });--}}
    {{--            tabButtons[panelIndex].style.backgroundColor=colorCode;--}}
    {{--            tabButtons[panelIndex].style.color=white;--}}
    {{--            tabPanels.forEach(function (node) {--}}
    {{--                node.style.display="none";--}}
    {{--            });--}}
    {{--            tabPanels[panelIndex].style.display="block";--}}
    {{--            tabPanels[panelIndex].style.backgroundColor=colorCode;--}}
    {{--        }--}}
    {{--    </script>--}}
    {{--    <div class="buttonContainer">--}}
    {{--        <button onclick="showPanel(0,gray)">اضافة مقرر</button>--}}
    {{--        <button onclick="showPanel(1,gray)">تعديل شعبة</button>--}}
    {{--        <button onclick="showPanel(2,gray)">حذف مقرر</button>--}}
    {{--        <button onclick="showPanel(3,gray)">الانسحاب من مقرر</button>--}}
    {{--    </div>--}}

    {{--    @if(isset($tabLink))--}}
    {{--        <div class="myContent">--}}

    {{--            <ul class="nav nav-tabs">--}}
    {{--                @if($tabLink=="add")--}}
    {{--                    <li class="active"><a href="#add" data-toggle="tab">اضافة مقرر</a></li>--}}
    {{--                    <li><a href="#edit" data-toggle="tab">تعديل شعبة</a></li>--}}
    {{--                    <li><a href="#delete" data-toggle="tab">حذف مقرر</a></li>--}}
    {{--                    <li><a href="#withdraw" data-toggle="tab">الانسحاب من مقرر</a></li>--}}

    {{--                @elseif($tabLink=="edit")--}}
    {{--                    <li ><a href="#add" data-toggle="tab">اضافة مقرر</a></li>--}}
    {{--                    <li class="active"><a href="#edit" data-toggle="tab">تعديل شعبة</a></li>--}}
    {{--                    <li><a href="#delete" data-toggle="tab">حذف مقرر</a></li>--}}
    {{--                    <li><a href="#withdraw" data-toggle="tab">الانسحاب من مقرر</a></li>--}}

    {{--                @elseif($tabLink=="delete")--}}
    {{--                    <li ><a href="#add" data-toggle="tab">اضافة مقرر</a></li>--}}
    {{--                    <li><a href="#edit" data-toggle="tab">تعديل شعبة</a></li>--}}
    {{--                    <li class="active"><a href="#delete" data-toggle="tab">حذف مقرر</a></li>--}}
    {{--                    <li><a href="#withdraw" data-toggle="tab">الانسحاب من مقرر</a></li>--}}

    {{--                @else($tabLink=="myorders")--}}
    {{--                    <li ><a href="#add" data-toggle="tab">اضافة مقرر</a></li>--}}
    {{--                    <li><a href="#edit" data-toggle="tab">تعديل شعبة</a></li>--}}
    {{--                    <li><a href="#delete" data-toggle="tab">حذف مقرر</a></li>--}}
    {{--                    <li class="active"><a href="#withdraw" data-toggle="tab">الانسحاب من مقرر</a></li>--}}
    {{--                @endif--}}
    {{--            </ul>--}}
    {{--        </div>--}}

@endsection
