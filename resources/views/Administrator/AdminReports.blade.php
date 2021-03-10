@extends('layouts.AdminNavbar')
@section('AdminNavbar')
    <div style="width: 90%;margin:auto">
        <script>
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

        <div class="breadcrumbs-wrapper hide-for-print">
            <ul class="breadcrumbs">
                <li><a href="https://uqu.edu.sa/"> الصفحة الرئيسية</a></li>
                <li><a href="https://uqu.edu.sa/">بوابة الخدمات الالكترونية</a></li>
                <li>
                    <span class="current">
                    <form name="brdcrmbForm" id="brdcrmbForm" action="/uqu/ui/Administrator/homeIndex.faces"
                          enctype="application/x-www-form-urlencoded" method="post">
                    <input name="brdcrmbForm" type="hidden" value="brdcrmbForm">
                    <a id="brdcrmbForm:actorHomeCmd"
                       onclick="mojarra.jsfcljs(document.getElementById('brdcrmbForm'),{'brdcrmbForm:actorHomeCmd':'brdcrmbForm:actorHomeCmd'},'');return false"
                       href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState"
                                                             id="j_id_id0:javax.faces.ViewState:2"
                                                             type="hidden"
                                                             value="467320290596521415:-2986297305866003870"
                                                             autocomplete="off">
                    </form>
                    </span>
                </li>
                <li><a href="/Administrator/AdminHome">منظومة الإرشاد الأكاديمي</a></li>
                <li><a href="">التقارير</a></li>

            </ul>
            <hr>
        </div>

        <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>
            @foreach ($Admins as $Admin)
                <tr>
                    <td class="Title"><span id="Administrator-top-Form">رقم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->id}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">اسم المحاضر</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->name}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">الكلية</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->College}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">القسم</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->department}}</span></td>

                </tr>
                <tr>
                    <td class="Title"><span id="Administrator-top-Form">الفصل</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->NSemester}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">العبء النظامي</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->Official_Load}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form"></span>العبء الفعلي</td>
                    <td><span id="myForm:facNameText2">{{ $Admin->Actual_Load}}</span></td>
                    <td class="Title"><span id="Administrator-top-Form">الدرجة العلمية</span></td>
                    <td><span id="myForm:facNameText2">{{ $Admin->Academic_Degree}}</span></td>
                </tr>
                <tr>
                    @endforeach
                    <td class="text"></td>
                </tr>

            </tbody>
        </table>
        <br>
        <div id="centered">
            <div>
                <label><input type="radio" name="Radio" value="SeId"> البحث برقم المرسل (من) &nbsp;
                    <input type="radio" name="Radio" value="ReId"> البحث برقم المرسل اليه (الى) &nbsp;
                    <input type="radio" name="Radio" value="RelatedTo"> البحث برقم الطالب المتعلق بالتقرير
                </label>
            </div>

            <div class="SeId box" style="display:none; "
            ><strong><input type="text" id="SearchById" onkeyup="SearchById()" placeholder="ابحث برقم المرسل  (من) ">
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

        <table id="j_id_id538:dataTbl" class="student-plan" style="margin: auto">
            <thead>
            <tr>
                <th class="HEADING" scope="col">من</th>
                <th class="HEADING" scope="col">الى</th>
                <th class="HEADING" scope="col">رقم التقرير</th>
                <th class="HEADING" scope="col">مرسل التقرير</th>
                <th class="HEADING" scope="col">علاقة التقرير ب</th>
                <th class="HEADING" scope="col">نوع التقرير</th>
                <th class="HEADING" scope="col">عنوان التقارير</th>
                <th class="HEADING" scope="col">تاريخ انشاء التقرير</th>
                <th class="HEADING" scope="col">نص التقرير</th>
                <th class="HEADING" scope="col">المرفقات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Admin_reports as $Report)

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
                        <center>{{ $Report->Report_Type}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->Report_Title}}</center>
                    </td>
                    <td>
                        <center>{{ $Report->created_at}}</center>
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
        <div id="left">
            <a id="back-buttom"
               href="../AdminHome"> ➤ رجوع </a>

        </div>

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

                #left0 {
                    float: left;
                    margin: auto;
                    display: inline-block;
                }
            </style>
        </head>

        <div id="left0">
            <a id="btnGo"
               href="/Administrator/AdminCreateReport"> إنشاء تقرير للقسم </a>
        </div>
        <br>
    </div>
@endsection
