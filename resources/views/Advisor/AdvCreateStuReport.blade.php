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
                   href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState"
                                                         id="j_id_id0:javax.faces.ViewState:2"
                                                         type="hidden" value="467320290596521415:-2986297305866003870"
                                                         autocomplete="off">
                </form>
                </span>
            </li>
            <li><a href="/Advisor/AdvHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="../Advisor/AdvReports"> التقارير </a></li>
            <li><a href=""> إنشاء تقرير للطالب </a></li>
        </ul>
        <hr>

    </div>
    <div>
        <table width="90%" class="box-wrapper withShadow" style="font-size:90%; margin: auto" border="0" cellspacing="0" cellpadding="0">
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


    <div style="width: 90%;margin: auto;">
        &nbsp;@include('messages')

        {!! Form::open(['Link_to_action'=>'AdvCreateStuReportController@ReportStore','method'=>'POST','enctype'=>'multipart/form-data','files'=>'true']) !!}
        <div class="form-group" width='100%' style="font-size:90%" border="0">
            <div>
            <select class="custom-select" id="Receiver_id" name="Receiver_id" style="width: 100%;margin: auto;text-align-last:center; ">
                @foreach($Students as $Student)
                    <option value="{{$Student->id}}">{{$Student->name}}</option>
                @endforeach
            </select>
            </div><br>
            <div>
            <select class="custom-select" id="Report_Type" name="Report_Type" style="width: 100%;margin: auto;text-align-last:center; ">
                <option value="" disabled selected>اختر نوع التقرير</option>
                <option value="صحي">صحي</option>
                <option value="اكاديمي"> اكاديمي</option>
                <option value="اجتماعي">اجتماعي</option>
                <option value="غير ذلك">غير ذلك</option>
            </select>
            </div><br>
          <div class="form-group" width='100%' style="width: 100%;margin: auto;text-align-last:center;">
              {{Form::text('title','',['class'=>'form-control','placeholder'=>'عنوان التقرير'])}}
          </div>
        </div>
        <div class="form-group" width='100%' style="width: 100%;margin: auto;text-align-last:center;">
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'نص التقرير'])}}
        </div>

            {{Form::file('file')}}
            {{Form::submit('إنشاء التفرير',['class'=>'submit-bottom'])}}
            {!!Form::close()!!}


        <div id="left">
            <a id="back-buttom"
               href="./AdvReports"> ➤ رجوع </a>
        </div>
        <br>
    </div>

@endsection
