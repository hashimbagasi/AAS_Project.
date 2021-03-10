<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Student

    Route::get('/Student/StuMandatorySurvay', 'StuMandatorySurvayController@index');
    Route::post('/Student/StuMandatorySurvay', 'StuMandatorySurvayController@ReportStore');
    Route::get('/Student/StuHome', 'StuHomeController@index');
    Route::get('/Student/StuChatAdvisor', 'StuChatController@index');
    Route::get('/Student/StuShowReg', 'StuShowRegController@index');
    Route::get('/Student/StuReports', 'StuReportsController@index');
    Route::get('/Student/StuCreateReport', 'StuCreateReportsController@index');
    Route::post('/Student/StuCreateReport', 'StuCreateReportsController@ReportStore');
    Route::get('/Student/StuReg', 'StuRegController@index');
    Route::get('/Student/StuChatAdvisor/message/{id}', 'StuChatController@getMessage')->name('message');
    Route::post('/Student/StuChatAdvisor/message', 'StuChatController@sendMessage');
    Route::get('file/download/{Report_Id}','StuCreateReportsController@ReportShow')->name('downloadfile');



// Advisor
Route::get('/Advisor/AdvHome', 'AdvHomeController@index')->name('AdvHome');
Route::get('/Advisor/AdvContactStu', 'AdvContactStController@index')->name('ContactStu');
Route::get('/Advisor/AdvContactDept', 'AdvContactDeptController@index')->name('ContactStu');
Route::get('/Advisor/AdvReports','AdvReportsController@index');
Route::get('/Advisor/AdvCreateStuReport','AdvCreateStuReportController@index');
Route::get('/Advisor/AdvCreateDeptReport','AdvCreateDeptReportController@index');
Route::post('/Advisor/AdvCreateStuReport','AdvCreateStuReportController@ReportStore');
Route::post('/Advisor/AdvCreateDeptReport','AdvCreateDeptReportController@ReportStore');
Route::post('Advisor/AdvContactDept','AdvContactDeptController@getRelatedToID');
Route::get('Advisor/AdvContactStu/message/{id}', 'AdvContactStController@getMessage')->name('message');
Route::post('/Advisor/AdvContactStu/message', 'AdvContactStController@sendMessage');
Route::get('Advisor/AdvContactDept/message/{id}', 'AdvContactDeptController@getMessage')->name('message');
Route::post('/Advisor/AdvContactDept/message', 'AdvContactDeptController@sendMessage');
Route::get('/Advisor/AdvHome/AdvStuInfo','AdvStuInfoController@index');
Route::POST('/Advisor/AdvHome/AdvStuInfo','AdvStuInfoController@Show');
Route::get('/Advisor/AdvStuData','AdvStuDataController@index');
Route::get('file/download/{Report_Id}','AdvReportsController@ReportShow')->name('downloadfile');
Route::get('Adv/file/download/{Student_id}','AdvStuInfoController@SurveyShow')->name('downloadfile_Adv');



// Department
Route::get('/Department/DeptHome','DepartmentController@index');
Route::get('/Department/DeptContact','DepartmentController@DeptContact');
Route::get('/Department/DeptRequests','DepartmentController@DeptRequests');
Route::get('/Department/DeptReports','DepartmentController@DeptReports');
Route::get('/Department/DeptChatInfo','DepartmentController@DeptChatInfo');
Route::post('/Department/DeptChatInfo','DepartmentController@ShowChat');
Route::get('/Department/DeptStuInfo','DepartmentController@DeptStuInfo');
Route::get('/Department/DeptCreateMessage','DepartmentController@DeptCreateMessage');
Route::get('/Department/DeptCreateAdvReport','DepartmentController@DeptCreateAdvReport');
Route::get('/Department/DeptCreateAdminReport','DepartmentController@DeptCreateAdminReport');
Route::get('/Department/DeptChatAdv','DeptChatAdvController@Index');
Route::get('Department/DeptChatAdv/message/{id}', 'DeptChatAdvController@getMessage')->name('message');
Route::post('/Department/DeptChatAdv/message', 'DeptChatAdvController@sendMessage');
Route::post('/Department/DeptCreateAdvReport','DepartmentController@ReportStore');
Route::post('/Department/DeptCreateAdminReport','DepartmentController@ReportStore');
Route::get('file/download/{Report_Id}','DepartmentController@ReportShow')->name('downloadfile');
Route::get('Dept/file/download/{Student_id}','DepartmentController@SurveyShow')->name('downloadfile_Dept');




// Administrator

Route::get('/Administrator/AdminHome','AdminController@index');
Route::get('/Administrator/AdminHome/AdminColleges','AdminController@Colleges');
Route::get('/Administrator/AdminHome/AdminRegistration','AdminController@Registration');
Route::get('/Administrator/AdminHome/AdminReports','AdminController@Reports');
Route::get('file/download/{Report_Id}','AdminController@ReportShow')->name('downloadfile');
Route::get('/Administrator/AdminCreateReport','AdminController@CreateReport');
Route::get('/Administrator/AdminStuInfo','AdminController@AdminStuInfo');
Route::get('/Administrator/AdminHome/AdminStatistics','AdminController@Statistics');
Route::post('/Administrator/AdminCreateReport','AdminController@ReportStore');
Route::get('/Administrator/AdminChatInfo', 'AdminController@AdminChatInfo');
Route::post('/Administrator/AdminChatInfo','AdminController@ShowChat');
Route::get('Admin/file/download/{Student_id}','AdminController@SurveyShow')->name('downloadfile_Admin');




//Route::get('/Department/DeptCreateReport','UploadFileController@index');
//Route::post('/Department/DeptCreateReport','UploadFileController@showUploadFile');


//Profile
Route::get('/Student/StuProfile','ProfileController@StuProfile');


//
