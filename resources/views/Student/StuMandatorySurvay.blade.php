@extends('layouts.stFrame')
@section('stFrame')
    <head>
        <style>
            body {
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>

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
                           href="">البوابة الاكاديمية
                        </a>
                        <input name="javax.faces.ViewState"
                               id="j_id_id0:javax.faces.ViewState:2" type="hidden"
                               value="467320290596521415:-2986297305866003870" autocomplete="off">
                    </form>
                </span>
            </li>
            <li><a href="../Department/DeptHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="../Department/DeptReports"> التقارير </a></li>
            <li><a href=""> استبانة الطالب </a></li>
        </ul>
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


    @include('messages')
    <body>
    {!! Form::open(['Link_to_action'=>'StuMandatorySurvayController@ReportStore','method'=>'POST','enctype'=>'multipart/form-data','files'=>'true']) !!}
    <div id="formBody">
        <div id="errors"></div>
        <h2 class="callout primary"><i class="fa fa-indent "></i> معلومات الطالب الشخصية </h2>
        <div class="row">
            <div class="large-8 columns large-centered">

                <input type="hidden" name="phone_number" value="304239">
                <div>الرجاء ادخال رقم جوال ليتواصل معك المرشد في حال
                    الحاجة<input type="tel" name="phone_number" id="phone_number"
                                 class="draftable mobile required " value=""
                                 placeholder="على سبيل المثال: 0500000000" required>
                </div>
                <hr>
                <input type="hidden" name="STemail" value="304252">
                <div>الرجاء ادخال البريد الالكتروني ليتواصل معك المرشد في
                    حال الحاجة<input type="text" name="STemail" id="STemail"
                                     class="draftable email required " value=""
                                     placeholder="على سبيل المثال: s400000000@st.uqu.edu.sa" required>
                </div>
                <hr>
                <input type="hidden" name="SocialStatus" value="304253">
                <div>ما هي حالتك الاجتماعية؟
                    <label for="TlWGlHw9Y8_1">
                        <input class="draftable required " id="TlWGlHw9Y8_1" type="radio"
                               name="SocialStatus" value="أعزب" required>&nbsp;أعزب
                    </label>
                    <label for="TlWGlHw9Y8_2">
                        <input class="draftable required " id="TlWGlHw9Y8_2" type="radio"
                               name="SocialStatus" value="متزوج" required>&nbsp;متزوج
                    </label>
                    <label for="TlWGlHw9Y8_3">
                        <input class="draftable required " id="TlWGlHw9Y8_3" type="radio"
                               name="SocialStatus" value="مطلق" required>&nbsp;مطلق
                    </label>
                </div>
                <hr>
                <div><span class="text-alert">*</span>&nbsp;هل تعاني من مشاكل اسرية؟
                    <label for="PNA3TQxlUI_1">
                        <input onclick="document.getElementById('family_info').disabled = false;"
                               class="draftable required " id="PNA3TQxlUI_1" type="radio"
                               name="familyProblem" value="نعم" required>&nbsp;نعم
                    </label>
                    <label for="PNA3TQxlUI_2">
                        <input onclick="document.getElementById('family_info').disabled = true;"
                               class="draftable required " id="PNA3TQxlUI_2" type="radio"
                               name="familyProblem" value="لا" required>&nbsp;لا
                    </label></div>

                <input type="hidden" name="family_info" value="">
                <div>&nbsp;ان كنت تعاني من مشاكل اسرية<br>
                    <input disabled type="text" name="family_info"
                           id="family_info" class="draftable"
                           value="" placeholder="فما المشاكل الأسرية التي تعاني منها ؟">
                </div>
                <hr>


                <div>هل تعاني من مشاكل صحية وأمراض مزمنة؟
                    <label for="5VlUGR69Fz_1">
                        <input onclick="document.getElementById('health_info').disabled = false;"
                               type="radio" id="healthProblem" name="healthProblem" required>&nbsp;نعم
                    </label>
                    <label for="5VlUGR69Fz_2">
                        <input onclick="document.getElementById('health_info').disabled = true;" id="healthProblem"
                               type="radio"
                               name="healthProblem" value="لا" required>&nbsp;لا
                    </label></div>

                <div>&nbsp;ان كنت تعاني من مشاكل صحية وأمراض مزمنة<br>
                    <input disabled type="text" name="healthProblem" id="health_info"
                           class="draftable " value=""
                           placeholder="فعبر عما تعانيه من مشاكل صحية وأمراض مزمنة">
                </div>
                <hr>

                <div>هل تعاني من مشاكل داخل الحرم الجامعي؟
                    <label for="5VlUGR79Fz_1">
                        <input onclick="document.getElementById('U_problem').disabled = false;" id="problemInUniv"
                               type="radio"
                               name="problemInUniv" value="نعم" required>&nbsp;نعم
                    </label>
                    <label for="5VlUGR67Fz_2">
                        <input onclick="document.getElementById('U_problem').disabled = true;" id="problemInUniv"
                               type="radio"
                               name="problemInUniv" value="لا" required>&nbsp;لا
                    </label></div>


                <div>&nbsp;ان كنت تعاني من مشاكل داخل الحرم الجامعي<br>
                    <input disabled type="text" name="problemInUniv" id="U_problem"
                           class="draftable  " value=""
                           placeholder="فعبر عما تعاني من مشاكل داخل الحرم الجامعي">
                </div>
                <hr>
            </div>
        </div>
    </div>

    </body>
    <div class="form-group" width='80%' style="font-size:90%;margin-left: auto;margin-right: auto" border="0">
        {{Form::file('file')}}
    </div>

    <div style="text-align: center;margin-right: auto;margin-left: auto">
        {{Form::submit('حفظ وارسال',['class'=>'submit-bottom'])}}
        {!!Form::close()!!}
    </div>


    <br>

@endsection
