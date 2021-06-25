@extends('layouts.backbone')
@section('content')

@include('layouts.loading')
@include('layouts.head')
@include('layouts.header-gradient')

<!-- vue.js render section (id: app) -->
<div id="app">
    <imprint-hero></imprint-hero>
    <imprint-text></imprint-text>
</div>

@include('layouts.footer')

@stop