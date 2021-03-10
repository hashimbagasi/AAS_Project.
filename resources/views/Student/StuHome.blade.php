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
            <li><a href="">منظومة الإرشاد الأكاديمي</a></li>
        </ul>
        <hr>
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

    <br>
    <br>
    <table width="100%" class="box-wrapperQ withShadowQ" style="font-size:90%" border="0" cellspacing="0"
           cellpadding="0">
        <tbody>

        <tr style="margin:auto;text-align: center;font-weight: bold">
            <td width="20%"><a id="Mainbuttons"
                               style="width:90%;font-size: 18px;border-radius: 15px;background-color: #C39D4C;color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;"
                               href="StuChatAdvisor" target="_blank">التواصل مع المرشد الأكاديمي</a></td>
            {{--            <td width="25%"><a id="Mainbuttons"--}}
            {{--                               style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"--}}
            {{--                               href="StuReg">التسجيل الأكاديمي</a></td>--}}
            {{--  <td width="25%"><a id="Mainbuttons"
                                 style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                 href="https://uquweb.uqu.edu.sa/uqu/ui/student/registration/registrationRequests/index/showRegRequestsIndex.faces">
                      عرض طلبات التسجيل</a></td>--}}
            <td width="20%"><a id="Mainbuttons"
                               style="width:90%;font-size: 18px;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                               href="StuReports">التقارير</a></td>
        </tr>
        </tbody>
    </table>
    <br>
@endsection
