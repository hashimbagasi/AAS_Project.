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
            <li><a href=""> عرض طلبات التسجيل  </a></li>
        </ul>
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
                <td class="text">{{$Student->Academic_Status}}</td>
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
    <td xmlns:text-align="http://www.w3.org/1999/xhtml">
        <div class="small-12 columns">
            <h1 id="page-title" style="color: #2fac9b">عرض طلبات التسجيل الأكاديمي</h1>
            <hr>
        </div>

        <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="HEADING" scope="col" width="15%">رمز المقرر</th>
                <th class="HEADING" scope="col" width="15%">اسم المقرر</th>
                <th class="HEADING" scope="col" width="6%">الشعبة</th>
                <th class="HEADING" scope="col">النشاط</th>
                <th class="HEADING" scope="col" width="5%">عدد الساعات</th>
                <th class="HEADING" scope="col" width="15%">المحاضر</th>
                <th class="HEADING" scope="col" width="12%">التوقيت</th>
                <th class="HEADING" scope="col" width="10%">نوع الطلب</th>
                <th class="HEADING" scope="col" width="10%">حالة الطلب</th>
                <th class="HEADING" scope="col" width="5%">الغاء الطلب</th>
            </tr>
            </thead>
            <tbody>
            <tr class="ROW1">
                <td>
                    <center></center>
                </td>
                <td>
                    <center><span class="fontTextSmall"> </span></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center>&nbsp;</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center>&nbsp;</center>
                </td>

                <td>

                    <table id="j_id_id538:dataTbl:0:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
                        <tbody>
                        <tr>
                            <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                            <td class="inside insideWidth30"><span class="fontTextSmall"></span></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <span class="icon"><i class="far fa-times-circle"></i></span>
                </td>
            </tr>
            <tr class="ROW2">
                <td>
                    <center></center>
                </td>
                <td>
                    <center><span class="fontTextSmall"> </span></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>

                <td>

                    <table id="j_id_id538:dataTbl:1:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
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
                <td>
                    <center></center>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="ROW1">
                <td>
                    <center></center>
                </td>
                <td>
                    <center><span class="fontTextSmall"> </span></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>

                <td>

                    <table id="j_id_id538:dataTbl:2:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
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
                <td>
                    <center></center>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="ROW2">
                <td>
                    <center></center>
                </td>
                <td>
                    <center><span class="fontTextSmall"></span></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>

                <td>

                    <table id="j_id_id538:dataTbl:3:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
                        <tbody>
                        <tr>
                            <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                            <td class="inside insideWidth30"><span class="fontTextSmall"> </span></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <center></center>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr class="ROW1">
                <td>
                    <center></center>
                </td>
                <td>

                    <center><span class="fontTextSmall"></span></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>

                    <table id="j_id_id538:dataTbl:4:dataTb2" class="inside" border="0" cellpadding="0" cellspacing="0"
                           width="100%">
                        <tbody>
                        <tr>
                            <td class="inside insideWidth70"><span class="fontTextSmall"></span></td>
                            <td class="inside insideWidth30"><span class="fontTextSmall"></span></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <center></center>
                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>
    </td>
    <div id="left" style="float: left;margin-left: 20px">
        <a id="back-buttom"
           href="../Student/StuHome"> ➤ رجوع </a>
    </div>
    <div>

        &nbsp;
        &nbsp;
        &nbsp;

    </div>

@endsection
