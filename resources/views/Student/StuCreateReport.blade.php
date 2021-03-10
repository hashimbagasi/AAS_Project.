@extends('layouts.stFrame')
@section('stFrame')

    <head>
        <style>
            #btn2 {
                width: 10%;
                border-radius: 5px;
                background-color: #2a8f99;
                color: black;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-weight: bold;
            }

            .AdvBar {
                background-color: white;
                width: 90%;
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
            <li><a href="../Student/StuReports"> التقارير </a></li>
            <li><a href=""> إنشاء تقرير </a></li>
        </ul>
        <hr>

    </div>
    <script type="text/javascript">
        function spanFunction(id, image) {
            if (document.getElementById(id).style.display == "none") {
                document.getElementById(id).style.display = "";
                document.getElementById(image).src = '/uqu/images/blueDownAr.gif';
                onAjaxHome(id + "_Stu", "");
            } else {
                document.getElementById(id).style.display = "none";
                document.getElementById(image).src = '/uqu/images/blueAr.gif';
                onAjaxHome(id + "_Stu", "none");
            }
        }

        function openWindow(url) {
            window.open(url, 'mywindow', 'width=800,height=600,resizable=yes,scrollbars=yes');
        }

        function errorCertHCS() {
            document.getElementById('errorCertHCSDiv').style.display = "";
        }
    </script>

    <div class="site-footer-wrapper">
        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            <tr>
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

        &nbsp;@include('messages')

        {!! Form::open(['Link_to_action'=>'StuCreateReportController@ReportStore','method'=>'POST','enctype'=>'multipart/form-data','files'=>'true']) !!}

        <div class="form-group" border="0">
            <div width="90%">

                    <div style="width: 90%;margin: auto">
                        <select datatype="text" id="Receiver_id" name="Receiver_id" style="width: 100%;margin: auto;text-align-last:center; ">
                            @foreach($Advisors as $Advisor)
                            <option value="{{$Advisor->Id}}" ->{{$Advisor->Name}}  </option>
                        </select>

                        @endforeach
                    </div><br>
                <div style="width: 90%;margin: auto">
                    <select class="custom-select" id="Report_Type" name="Report_Type" style="width: 100%;margin: auto;text-align-last:center; ">
                        <option value="" disabled selected>اختر نوع التقرير</option>
                        <option value="صحي">صحي</option>
                        <option value="اكاديمي"> اكاديمي</option>
                        <option value="اجتماعي">اجتماعي</option>
                        <option value="غير ذلك">غير ذلك</option>
                    </select>

                </div><br>
                <div style="width: 90%;margin: auto;" border="0">
                    <span style="width: 100%;">
                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'عنوان التقرير'])}}</span><br>
                    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'نص التقرير'])}}
                    {{Form::file('file')}}
                </div>
            </div>
            {{Form::submit('إنشاء التقرير',['class'=>'submit-bottom'])}}

            {!!Form::close()!!}


            <div style="float: left;font-size: 15px">
                <a id="back-buttom"
                   href="./StuReports"> ➤ رجوع </a>
            </div>
        </div>
    </div>



@endsection
