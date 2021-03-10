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
            <li><a href="">منظومة الإرشاد الأكاديمي</a></li>

        </ul>
        <hr>

    </div>
    <div id="page-content-wrapper">
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
    </div>
    <div style="margin: auto;width: 90%;">
        <div class="site-footer-wrapper">
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
        </div>

        <br>
        <table width="100%" class="box-wrapperQ withShadowQ" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>

            <tr style="margin-left:auto;margin-right:auto;text-align: center;font-weight: bold">
                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Department/DeptChatAdv" target="_blank">التواصل مع المرشديين الأكاديمين </a></td>

                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Department/DeptStuInfo" target="_blank">عرض معلومات الطلاب</a></td>

                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Department/DeptChatInfo" target="_blank">عرض محادثات الطلاب</a></td>

                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Department/DeptReports">التقارير</a></td>

            </tr>
            </tbody>
        </table>


        <br>
        <h1 class="Title"><span id="Dept-top-Form">قائمة المرشدين الأكاديميين </span></h1>
        <hr>
        <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="10" width="100%" height="5"></td>
            </tr>
            <tr>
                <td>
                    <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th class="HEADING" scope="col">اسم المرشد الأكاديمي</th>
                            <th class="HEADING" scope="col">رقم المحاضر</th>
                            <th class="HEADING" scope="col">العبء النظامي</th>
                            <th class="HEADING" scope="col">العبء الفعلي</th>
                            <th class="HEADING" scope="col">&nbsp;عدد الطلاب&nbsp;</th>
                            <th class="HEADING" scope="col">اخر تسجيل دخول</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Adv_list as $Adv_list)
                            <tr class="ROW1">

                                <td>
                                    <center>{{ $Adv_list->Name}}<span class="fontTextSmall"> </span></center>
                                </td>
                                <td>
                                    <center> {{ $Adv_list->Id}}</center>
                                </td>
                                <td>
                                    <center> {{ $Adv_list->Official_Hours}}</center>
                                </td>
                                <td>
                                    <center> {{ $Adv_list->Actual_Hours}}</center>
                                </td>
                                <td>
                                    <center> {{ $Adv_list->Number_Of_Student}}</center>
                                </td>

                                <td>
                                    <center>{{$Adv_list->updated_at}}</center>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
@endsection
