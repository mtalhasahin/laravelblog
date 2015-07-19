@extends('backend.admin.layout.master')
@section('breadcrumb')
<li>
    <a href="{{URL::to('panel')}}">Panel</a>
</li>
@stop
@section('alttitle')
<h1 id="main-heading">
    Panel <span>Site ile ilgili bütün güncellemeleri buradan takip edebilirsiniz...</span>
</h1>
@stop
@section('content')
Index kısmı
@stop