@extends('layouts.backbone')
@section('content')

@include('layouts.loading')
@include('layouts.head')
@include('layouts.header-gradient')

<!-- vue.js render section (id: app) -->
<div id="app">
    <team-jg-hero></team-jg-hero>
    <team-jg-werdegang></team-jg-werdegang>
    <team-jg-stack></team-jg-stack>
    <team-jg-lebenslauf></team-jg-lebenslauf>
    <team-jg-links></team-jg-links>
</div>

@include('layouts.footer')

@stop