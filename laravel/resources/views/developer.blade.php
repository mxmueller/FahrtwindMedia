@extends('layouts.backbone')
@section('content')

@include('layouts.head')
@include('layouts.header')

<!-- vue.js render section (id: app) -->
<div id="app">
    <intro></intro>
    <hello></hello>
</div>

@include('layouts.footer')

@stop

