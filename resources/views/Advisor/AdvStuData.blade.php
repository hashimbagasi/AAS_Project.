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
            <li><a href="">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="">سجل معلومات الطلاب</a></li>
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

    <table width="90%" class="box-wrapper withShadow" style="font-size:90%;margin: auto" border="0" cellspacing="0"
           cellpadding="0">
        @foreach ($Advisor as $Advisor)
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
        &nbsp;
    </table>
    <br>
    <div style="width: 90%;margin: auto">
        <div>
            <label>اختر الطالب</label>
            <select>
                <option>1</option>
                <option>2</option>
                p
            </select>

            <label>الرقم الجامعي</label>
            <input type="text" name="stuID" placeholder="ادخل الرقم الجامعي للطالب">

            <label>ااسم الطالب</label>
            <input type="text" name="stuName" readonly>
        </div>
        <br>
        <div>
            <div style="display: inline-block;width: 45%;margin-left: 2%">
                <label>تقارير الطالب</label>
                <hr>
                <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0"
                       width="90%"
                       style="margin: auto">
                    <thead>
                    <tr>
                        <th class="HEADING" scope="col">م</th>
                        <th class="HEADING" scope="col">عنوان التقارير</th>
                        <th class="HEADING" scope="col">الإطلاع على التقرير</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    <tr class="ROW1">
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    <tr class="ROW2">
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="display: inline-block;width: 45%;margin-right: 2%">
                <label>محادثات الطالب</label>
                <hr>
                <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0"
                       width="90%"
                       style="margin: auto">
                    <thead>
                    <tr>
                        <th class="HEADING" scope="col">رسالة الطالب</th>
                        <th class="HEADING" scope="col">رسالة المرشد</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    <tr class="ROW1">
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    <tr class="ROW2">
                        <td>
                            0
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>

    <div id="left">
        <a id="back-buttom" style="font-size: 15px; margin-right: 5px"
           href="../Advisor/AdvHome/AdvStuInfo">➤ رجوع</a>

    </div>
    <br>

@endsection
