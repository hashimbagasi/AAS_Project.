@extends('layouts.DeptNavbar')
@section('DeptNavbar')
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
            <li><a href="../Department/DeptHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="../Department/DeptReports"> التقارير </a></li>
            <li><a href=""> إنشاء تقرير </a></li>
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

    <div class="site-footer-wrapper" style="margin: auto;width: 90%">
        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            <tr>
                @foreach ($Departments as $Department)

                    <td class="Title"><span id="Dept-top-Form">رقم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->id}}</span></td>
                    <td class="Title"><span id="Dept-top-Form">اسم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->name}}</span></td>
                    <td class="Title"><span id="Dept-top-Form">الكلية</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->college}}</span></td>
                    <td class="Title"><span id="Dept-top-Form">القسم</span></td>
                    <td><span id="myForm:facNameText2">{{ $Department->Department}}</span></td>
                    <td class="text"></td>
            </tr>
            <tr>
                <td class="Title"><span id="Dept-top-Form">الفصل</span></td>
                <td><span id="myForm:facNameText2">{{ $Department->NSemester}}</span></td>
                <td class="Title"><span id="Dept-top-Form">العبء النظامي</span></td>
                <td><span id="myForm:facNameText2">{{ $Department->Official_Load}}</span></td>
                <td class="Title"><span id="Dept-top-Form"></span>العبء الفعلي</td>
                <td><span id="myForm:facNameText2">{{ $Department->Actual_Load}}</span></td>
                <td class="Title"><span id="Dept-top-Form">الدرجة العلمية </span></td>
                <td><span id="myForm:facNameText2">{{ $Department->Academic_Degree}}</span></td>
            </tr>
            <tr>
                <td class="text"></td>
            </tr>

            </tbody>
            @endforeach
        </table>
        <br>
        &nbsp;@include('messages')

        {!! Form::open(['Link_to_action'=>'DepartmentController@ReportStore','method'=>'POST','enctype'=>'multipart/form-data','files'=>'true']) !!}
        <div class="form-group" width='100%' style="font-size:90%" border="0">

            <select class="custom-select" id="Receiver_id" name="Receiver_id">
                @foreach($Advisors as $Advisor)
                    <option value="{{$Advisor->Id}}">{{$Advisor->Name}}</option>
                @endforeach
            </select>
            <select class="custom-select" id="related_to" name="related_to">
                <option value=""disabled selected>اختار علاقة التقرير ب</option>
                <option value="عام">عام</option>
                @foreach($Students as $Student)
                    <option value="{{$Student->id}}">{{$Student->id}}</option>
                @endforeach
            </select>

            <select class="custom-select" id="Report_Type" name="Report_Type">
                <option value="" disabled selected>اختر نوع التقرير</option>
                <option value="صحي">صحي</option>
                <option value="اكاديمي"> اكاديمي</option>
                <option value="اجتماعي">اجتماعي</option>
                <option value="غير ذلك">غير ذلك</option>
            </select>
            
            <span style="width: 100%;">
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'عنوان التقرير'])}}</span>
        </div>
        <div class="form-group" width='100%' style="font-size:90%" border="0">
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'نص التقرير'])}}
            {{Form::file('file')}}
        </div>

        {{Form::submit('إنشاء التفرير',['class'=>'submit-bottom'])}}

        {!!Form::close()!!}


        <div id="left">
            <a id="back-buttom" style="font-size: 15px"
               href="./DeptReports"> ➤ رجوع </a>
        </div>
        <div id="left">

        </div>
    </div>
    <br>
@endsection
