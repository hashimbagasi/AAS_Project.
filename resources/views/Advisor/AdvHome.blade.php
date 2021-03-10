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

        <table width="90%" class="box-wrapper withShadow" style="font-size:90%;margin: auto" border="0" cellspacing="0" cellpadding="0">
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


        <br>
        <table width="90%" class="box-wrapperQ withShadowQ" style="font-size:90%;margin: auto" border="0" cellspacing="0"
               cellpadding="0">
            <tbody>

            <tr style="margin-left:auto;margin-right:auto;text-align: center;font-weight: bold">
                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Advisor/AdvContactStu" target="_blank">التواصل مع الطالب</a></td>
                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Advisor/AdvContactDept" target="_blank">التواصل مع القسم</a></td>
                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Advisor/AdvHome/AdvStuInfo" >معلومات الطلاب</a></td>
                <td width="25%"><a id="Mainbuttons"
                                   style="width:90%;border-radius: 15px;&#10;  background-color: #C39D4C;&#10;  color: white;&#10;  padding: 14px 25px;&#10;  text-align: center;&#10;  text-decoration: none;&#10;  display: inline-block;"
                                   href="/Advisor/AdvReports" >التقارير</a></td>
            </tr>
            </tbody>
        </table>

    <br>
        <input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:3" type="hidden"
               value="467320290596521415:-2986297305866003870" autocomplete="off">

                    <table align="center" width="90%" border="0" cellpadding="0" cellspacing="0" style="margin: auto">
                        <tr>
                            <td colspan="10" width="100%" height="5"></td>
                        </tr>
                        <tr>
                            <td>
                                <table id="j_id_id538:dataTbl" class="student-plan" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th class="HEADING" scope="col">اسم الطالب</th>
                                        <th class="HEADING" scope="col">&nbsp;الرقم الجامعي&nbsp;</th>
                                        <th class="HEADING" scope="col">&nbsp;الدرجة العلمية</th>
                                        <th class="HEADING" scope="col">&nbsp;حالة الطالب&nbsp;</th>
                                        <th class="HEADING" scope="col">الساعات المسجلة</th>
                                        <th class="HEADING" scope="col">المعدل التراكمي </th>
                                        <th class="HEADING" scope="col">اخر تسجيل دخول</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr class="ROW1">

                                        <td>
                                            <center>{{ $user->name }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $user->id }} </center>
                                        </td>
                                            <td>
                                                <center>{{ $user->Academic_Degree }} </center>
                                            </td>
                                        <td>
                                            <center>متوقع تخرجه</center>
                                        </td>
                                        <td>
                                            <center>&nbsp;{{ $user->Recorded_Hours }}</center>
                                        </td>
                                            <td>
                                                <center>&nbsp;{{ $user->GPA }}</center>
                                            </td>
                                            <td>
                                                <center>&nbsp;{{ $user->updated_at }}</center>
                                            </td>
                                    </tr>
                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
@endsection

