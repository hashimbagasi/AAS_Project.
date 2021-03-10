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
            <li><a href=""> التقارير </a></li>
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

        function SearchByRelatedTo() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("SearchByRelatedTo");
            filter = input.value.toUpperCase();
            table = document.getElementById("j_id_id538:dataTbl");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
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

        $(document).ready(function () {
            $('input[type="radio"]').click(function () {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

    <div class="site-footer-wrapper">
        <table width="90%" class="box-wrapper withShadow" style="font-size:90%;margin: auto" border="0" cellspacing="0"
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
            &nbsp;


        </table>
        <div id="centered" style="width: 90%;margin: auto">
            &nbsp;<div>
                <label><input type="radio" name="Radio" value="SeId"> البحث برقم المرسل (من) &nbsp;
                    <input type="radio" name="Radio" value="ReId"> البحث برقم المرسل اليه (الى) &nbsp;
                    <input type="radio" name="Radio" value="RelatedTo"> البحث برقم الطالب المتعلق بالتقرير
                    &nbsp;</label>
            </div>
            <div style="width: 70%;margin: auto;">
                <div class="SeId box" style="display:none"><strong><input type="text" id="SearchById"
                                                                          onkeyup="SearchById()"
                                                                          placeholder="ابحث برقم المرسل  (من) ">
                    </strong></div>
                <div class="ReId box" style="display:none"><strong><input type="text" id="SearchByReceiverId"
                                                                          onkeyup="SearchByReceiverId()"
                                                                          placeholder="ابحث برقم المرسل اليه  (الى) ">
                    </strong></div>
                <div class="RelatedTo box" style="display:none"><strong><input type="text" id="SearchByRelatedTo"
                                                                               onkeyup="SearchByRelatedTo()"
                                                                               placeholder="ابحث برقم الطالب المتعلق بالتقرير ">
                    </strong></div>
            </div>
        </div>
        <table id="j_id_id538:dataTbl" class="student-plan" style="margin: auto;width: 90%;">
            <thead>
            <tr>
                <th class="HEADING" scope="col">من</th>
                <th class="HEADING" scope="col">الى</th>
                <th class="HEADING" scope="col">رقم التقرير</th>
                <th class="HEADING" scope="col">مرسل التقرير</th>
                <th class="HEADING" scope="col">التقرير متعلق ب</th>
                <th class="HEADING" scope="col">تاريخ انشاء التقرير</th>
                <th class="HEADING" scope="col">نوع التقرير</th>
                <th class="HEADING" scope="col">عنوان التقارير</th>
                <th class="HEADING" scope="col">نص التقرير</th>
                <th class="HEADING" scope="col">المرفقات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Adv_reports as $Report)
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
                        <center>{{ $Report->related_to}}</center>
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
        <br><br>

        <head>
            <style>
                #btnGo {
                    border-radius: 5px;
                    background-color: #2a8f99;
                    color: white;
                    padding: 0 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 15px;
                    margin: 5px;
                }
                #left0{
                    float: left;
                    margin: auto;
                    display: inline-block;
                }
            </style>
        </head>
        <div id="left0">
            <a id="btnGo"
               href="/Advisor/AdvCreateDeptReport"> إنشاء تقرير للقسم
            </a>

            <a id="btnGo"
               href="/Advisor/AdvCreateStuReport"> إنشاء تقرير للطالب
            </a>
        </div>
        <div id="left">
            <a id="back-buttom" style="font-size: 15px; margin-right: 5px;"
               href="../Advisor/AdvHome"> ➤ رجوع </a>
        </div>
        {{--        <div id="left">--}}
        {{--            <a--}}
        {{--                style="width:99%;border-radius: 5px;&#10;  background-color: #2a8f99;  color: white;&#10;  padding: 5px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"--}}
        {{--                href="/Advisor/AdvStuData"> سجل معلومات للطالب--}}
        {{--            </a>--}}
        {{--        </div>--}}

        <br><br>

    </div>
@endsection
