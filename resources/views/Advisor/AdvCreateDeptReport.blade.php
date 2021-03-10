@extends('layouts.navbar')
@section('navbar')
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
   href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:2"
                                         type="hidden" value="467320290596521415:-2986297305866003870"
                                         autocomplete="off">
</form>
</span>
            </li>
            <li><a href="/Advisor/AdvHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="../Advisor/AdvReports"> التقارير </a></li>
            <li><a href=""> إنشاء تقرير للقسم </a></li>
        </ul>
        <hr>

    </div>


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
    <div id="centered" style="width: 90%;margin: auto;">
        <table width="90%" class="box-wrapper withShadow" style="font-size:90%; margin: auto" border="0" cellspacing="0"
               cellpadding="0">
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
        &nbsp;@include('messages')
        <div>

            {!! Form::open(['Link_to_action'=>'AdvCreateDeptReportController@ReportStore','method'=>'POST','enctype'=>'multipart/form-data','files'=>'true']) !!}

            <div class="form-group" width='100%'>
                <select datatype="text" id="Receiver_id" name="Receiver_id" style="width: 45%;padding: 5px">
                    @foreach($Departments as $Department)
                        <option value="{{$Department->id}} ">{{$Department->name}} </option>
                    @endforeach
                </select>
                <select datatype="text" class="custom-select" id="related_to" name="related_to"
                        style="width: 45%;padding: 5px">
                    <option value="" disabled selected>اختار علاقة التقرير ب</option>
                    <option value="عام">عام</option>
                    @foreach($Students as $Student)
                        <option value="{{$Student->id}}">{{$Student->id}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <select class="custom-select" id="Report_Type" name="Report_Type" style="width:92%;padding: 5px">
                    <option value="" disabled selected>اختر نوع التقرير</option>
                    <option value="صحي">صحي</option>
                    <option value="اكاديمي"> اكاديمي</option>
                    <option value="اجتماعي">اجتماعي</option>
                    <option value="غير ذلك">غير ذلك</option>
                </select>
            </div><br>


            <div class="form-group" style="font-size:90%; margin: auto;width:92%">
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'عنوان التقرير'])}}
                {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'نص التقرير'])}}
                {{Form::file('file')}}
            </div>

            <div id="left">
                <a id="back-buttom"
                   href="./AdvReports"> ➤ رجوع </a>
            </div>

            {{Form::submit('إنشاء التقرير',['class'=>'submit-bottom'])}}
            {!!Form::close()!!}
        </div>
    </div>
    <br>

@endsection
