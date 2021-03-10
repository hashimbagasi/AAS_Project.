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
            <li><a href="">التقارير</a></li>
        </ul><hr>
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

                function SearchById() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("SearchById");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("j_id_id538:dataTbl");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
                function SearchByReceiverId() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("SearchByReceiverId");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("j_id_id538:dataTbl");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
                $(document).ready(function() {
                    $('input[type="radio"]').click(function () {
                        var inputValue = $(this).attr("value");
                        var targetBox = $("." + inputValue);
                        $(".box").not(targetBox).hide();
                        $(targetBox).show();
                    });
                });
            </script>

            ﻿
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


    <head>
        <style>
            .uploadFile{
                width: 8%;
                padding: 3px 4px;
                color: white;
                font-family: sans-serif;
                font-size: 16px;
                font-weight: bold;
                display: inline;
                float: left;
                margin-left: 12px;
                margin-top: 6px;
                border: 1px solid #2fac9b;
                border-radius: 5px;
                background-color: #2fac9b;
            }
            .uploadFile:hover{
                background-color: #248776;
            }
        </style>
    </head>

    <br>
    <td xmlns:text-align="http://www.w3.org/1999/xhtml">
        <div class="small-12 columns">
            <h1 id="page-title" style="color: #2fac9b">التقارير</h1>
            <hr>
        </div>
        <div id="centered">
            &nbsp;<div>
                <label><input type="radio" name="Radio" value="SeId">  البحث برقم المرسل (من) &nbsp;
                    <input type="radio" name="Radio" value="ReId"> البحث برقم المرسل اليه (الى) &nbsp;
                </label>
            </div>
            <div  class="SeId box" style="display:none"><strong><input   type="text"  id="SearchById"   onkeyup="SearchById()" placeholder="ابحث برقم المرسل  (من) " >
                </strong></div>
            <div class="ReId box" style="display:none"> <strong><input  type="text" id="SearchByReceiverId" onkeyup="SearchByReceiverId()" placeholder="ابحث برقم المرسل اليه  (الى) " >
                </strong></div>
            <div class="RelatedTo box" style="display:none"><strong><input  type="text" id="SearchByRelatedTo" onkeyup="SearchByRelatedTo()" placeholder="ابحث برقم الطالب المتعلق بالتقرير " >
                </strong></div>
        </div>
        <table id="j_id_id538:dataTbl" class="student-plan"  style="margin: auto;width: 100%">
            <thead>
            <tr>
                <th class="HEADING" scope="col">من</th>
                <th class="HEADING" scope="col">الى </th>
                <th class="HEADING" scope="col">رقم التقرير</th>
                <th class="HEADING" scope="col">مرسل التقرير</th>
                <th class="HEADING" scope="col">تاريخ انشاء التقرير</th>
                <th class="HEADING" scope="col">نوع التقرير</th>
                <th class="HEADING" scope="col">عنوان التقارير</th>
                <th class="HEADING" scope="col">نص التقرير</th>
                <th class="HEADING" scope="col">المرفقات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Reports as $Report)

                <tr class="ROW1">
                    <td>
                        <center>{{ $Report->Sender_id}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Receiver_id}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Report_Id}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->name}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->created_at}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Report_Type}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Report_Title}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Report_body}}</center>
                    </td>
                    <td>
                        @if($Report->Report_File!==null)
                            <center>&nbsp;{{$Report->Report_File}} <strong  class="card-title" ><a href="{{route('downloadfile',$Report->Report_Id)}}" class="btn btn-primary">
                                        <img src="https://img.icons8.com/android/24/000000/download.png"/>
                                    </a></strong></center>
                        @endif
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </td>
<br>
    <div id="left" >
        <a id="back-buttom"
           href="../Student/StuHome"> ➤ رجوع </a>
    </div>
    <div id="">
        <a class="submit-button" style="margin-left: 10px"
            href="/Student/StuCreateReport"  > إنشاء تقرير </a>
    </div>


    <br>

@endsection
