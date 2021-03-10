<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">

    <style>
    table.minimalistBlack {
        border: 3px solid #000000;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }
    table.minimalistBlack td, table.minimalistBlack th {
        border: 1px solid #000000;
        padding: 5px 4px;
    }
    table.minimalistBlack tbody td {
        font-size: 13px;

    }
    table.minimalistBlack thead {
        background: #CFCFCF;
        background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        border-bottom: 3px solid #000000;
    }
    table.minimalistBlack thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        text-align: left;
    }
    table.minimalistBlack tfoot td {
        font-size: 14px;
    }
</style>


<table class="minimalistBlack">
    <thead>
    <tr>
        <th>تاريخ الرسالة</th>
        <th>محتوى الرسالة</th>
        <th>المرسل اليه</th>
        <th>المرسل</th>
    </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
    <tr>
        <td>{{$message->created_at}}</td>
        <td>{{$message->message}}</td>
        <td>{{$message->to}}</td>
        <td>{{$message->from}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
