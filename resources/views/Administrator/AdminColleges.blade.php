@extends('layouts.AdminNavbar')
@section('AdminNavbar')
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
   href="#">البوابة الاكاديمية</a><input name="javax.faces.ViewState" id="j_id_id0:javax.faces.ViewState:2"
                                         type="hidden" value="467320290596521415:-2986297305866003870"
                                         autocomplete="off">
</form>
</span>
            </li>
            <li><a href="../AdminHome">منظومة الإرشاد الأكاديمي</a></li>
            <li><a href="">الكليات</a></li>

        </ul>
    </div>

    <table width="100%" class="box-wrapper withShadow" style="font-size:90%" border="0" cellspacing="0" cellpadding="0">
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
    @endsection
