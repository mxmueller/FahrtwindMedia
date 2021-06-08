@extends('layouts.backbone')
@section('content')

@include('layouts.loading')
@include('layouts.head')
@include('layouts.header-gradient')

<!-- vue.js render section (id: app) -->
<div id="app">
    <hero-team></hero-team>
    <teaser-team></teaser-team>
</div>

@include('layouts.footer')

@stop