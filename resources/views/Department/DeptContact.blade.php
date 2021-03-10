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
            <li><a href="">  التواصل مع عمادة القبول والتسجيل   </a></li>        </ul>
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

    <footer class="site-footer-wrapper">
        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0" cellpadding="0">
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
        &nbsp;
        &nbsp;
        &nbsp;

    &nbsp;
    &nbsp;
    &nbsp;
    <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0" width=40%">
        <thead>
        <tr>
            <th class="HEADING" scope="col">التاريخ</th>
            <th class="HEADING" scope="col">عنوان الرسالة</th>

        </tr>
        </thead>
        <tbody>
        <tr class="ROW1">
            <td>
                <table id="j_id_id538:dataTbl:0:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"></span></td>
                    </tr>
                    </tbody>
                </table>   <center></center>
            </td>
            <td>
                <center><span class="fontTextSmall"> </span></center>
            </td>




        </tr>
        <tr class="ROW2">

            <td>
                <center><span class="fontTextSmall"> </span></center>
            </td>


            <td>

                <table id="j_id_id538:dataTbl:1:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"> </span></td>
                    </tr>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"> </span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"> </span></td>
                    </tr>
                    </tbody>
                </table>
            </td>

        </tr>
        <tr class="ROW1">

            <td>
                <center><span class="fontTextSmall"> </span></center>
            </td>


            <td>

                <table id="j_id_id538:dataTbl:2:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"></span></td>
                    </tr>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"></span></td>
                    </tr>
                    </tbody>
                </table>
            </td>

            <td></td>
        </tr>
        <tr class="ROW2">

            <td>
                <center><span class="fontTextSmall"></span></center>
            </td>


            <td>

                <table id="j_id_id538:dataTbl:3:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                        <td class="inside insideWidth30"><span class="fontTextSmall"> </span></td>
                    </tr>
                    </tbody>
                </table>
            </td>


        </tr>
        <tr class="ROW1">
            <td>
                <center> </center>
            </td>
            <td>

                <center><span class="fontTextSmall"></span></center>



            </td>
            <td>
                <center> </center>
            </td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <div id="left">
        <a id="back-button"
           href="../Department/DeptHome" >  ➤➤ رجوع </a>

    </div>
    <div id="left">
        <a
            style="width:90%;border-radius: 5px;&#10;  background-color: #2a8f99;&#10;  color: white;&#10;  padding: 5px 10px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
            href="/Department/DeptCreateMessage" > إنشاء رسالة </a>

    </div>
    <div>
        &nbsp;
        &nbsp;
        &nbsp;
    </div>
    @endsection
