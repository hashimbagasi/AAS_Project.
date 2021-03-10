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
            <li><a href="../AdvHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="">معلومات الطلاب</a></li>
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
    <div id="centered" style=" width:70%; margin: auto;">
        <select datatype="text" class="Stu_Info" name="Stu_Info"
                onChange="getElementById('selectedValue').innerHTML=this.value"
        style="padding: 5px">
            <option value="None">-- اختر الطالب --</option>
            @foreach($Advisors as $Advisor)
                <option value="{{$Advisor->id}}">{{$Advisor->id}}</option>
            @endforeach


            <script>


                // Inserting the code block to wrapper element

                @foreach($Stu_Infos as $Stu_Infos)
                $(document).ready(function () {
                    $("select.Stu_Info").change(function () {
                        var Stu_Info = $(this).children("option:selected").val();
                        var Stu_id = parseInt(Stu_Info);
                        if ([{{$Stu_Infos->Student_id}}] == Stu_id) {
                            var codeBlock = '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3  class="box-header">الرقم  الجامعي  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->Student_id}} </h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >  الإسم  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->Name}}</h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >  رقم الجوال   </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->phone_number}}</h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >  البريد الإلكتروني  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->STemail}}</h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >  الحالة الإجتماعية  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->SocialStatus}}</h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >  المشاكل الاسرية  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->familyProblem}}    {{$Stu_Infos->family_info}}</h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 >المشاكل  الصحية  </h3>' +
                                '<h2 class="text-secondary">{{$Stu_Infos->healthProblem}}    {{$Stu_Infos->health_info}} </h2>' +
                                '</div>' +
                                '<div id="centered" class="box-wrapper withShadow">' +
                                '<h3 > الملف المرفق</h3>' +

                                @if($Stu_Infos->Survey_File!==null)
                                    '<h2 class="text-secondary">{{$Stu_Infos->Survey_File}} </h2>' +
                                '<a href="{{route('downloadfile_Adv',$Stu_Infos->Student_id)}}" class="btn btn-primary">'+
                               ' <img src="https://img.icons8.com/android/24/000000/download.png"/>'+
                              '  </a>'
                            @endif
                               + '</div>'
                            ;
                            document.getElementById("codeBlock").innerHTML = codeBlock;


                        }
                    });
                });
                @endforeach


            </script>

        </select>

        <div id="codeBlock"></div>
    </div>


    <br><br>

    <div style="width: 90%;margin: auto;">

        <div id="left">
            <a id="back-buttom" style="font-size: 15px;float: left;margin-left: 40%;"
               href="/Advisor/AdvHome">➤ رجوع</a>
        </div>


        <br>
    </div>
@endsection
