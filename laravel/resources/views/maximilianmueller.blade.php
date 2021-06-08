@extends('layouts.backbone')
@section('content')

@include('layouts.loading')
@include('layouts.head')
@include('layouts.header-gradient')

<!-- vue.js render section (id: app) -->
<div id="app">
    <team-mm-hero></team-mm-hero>
    <team-mm-stack></team-mm-stack>
    <team-mm-lebenslauf></team-mm-lebenslauf>
</div>



@include('layouts.footer')

@stop