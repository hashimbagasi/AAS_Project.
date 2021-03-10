@extends('layouts.stFrame')
@section('stFrame')

    <h1 id="page-title">
        الملف الشخصي
    </h1>

<div class="small-12 columns">
    <div class="profile-data row">
        <div class="large-2 medium-3 small-12 columns img-wrapper">
            <img class="profile-img boxShadow" src="https://drive.uqu.edu.sa/up/avatar/436/s436014231.png" alt="الصورة الشخصية">
        </div>
        <div class="wrapper large-4 medium-9 columns">
            @foreach($StuProfile as $Students)
            <h1 class="profileName">{{$Students->Name}}</h1>
            @endforeach
            <div>
                <br>
            </div>
        </div>
        <div class="large-6 medium-12 small-12 columns social-contact">
            <ul>
            </ul>
        </div>
<table id="page-body">
        <div class="small-12 columns profile-all-data">
            <div class="data-items row">
                <div class="item large-6 columns">
                    <div class="row">
                        <div class="large-4 columns">
                            <div class="Data">
                                <span>البريد الجامعي</span>
                            </div>
                        </div>
                        <div class="large-8 columns">
                            <div class="value">
<span>
 @foreach($StuProfile as $Students)
        <h1 class="Email">{{$Students->Email}}</h1>
    @endforeach</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item large-6 columns">
                    <div class="row">
                        <div class="large-4 columns">
                            <div class="data">
                                <span>الجهة</span>
                            </div>
                        </div>
                        <div class="large-8 columns">
                            <div class="value">
                                @foreach($StuProfile as $Students)
                                    <h1 class="College">{{$Students->College}}</h1>
                                @endforeach                            </div>
                        </div>
                    </div>
                </div>
                <div class="item large-6 columns">
                    <div class="row">
                        <div class="large-4 columns">
                            <div class="box-wrapper">
                                <span>القسم</span>
                            </div>
                        </div>
                        <div class="large-8 columns">
                            <div class="value">
                                @foreach($StuProfile as $Students)
                                    <h1 class="Department">{{$Students->Department}}</h1>
                                @endforeach                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <hr>

            <div class="row data-edit">

                <div class="small-12 columns text-center">
                </div>

            </div>
        </div>
</table>

    </div>
</div>
    @endsection
