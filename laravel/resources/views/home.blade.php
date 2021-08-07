@extends('layouts.backbone')
@section('content')

@include('layouts.loading')
@include('layouts.head')
@include('layouts.header')

<!-- vue.js render section (id: app) -->
<div id="app">
    <intro></intro>
    <hello></hello>
    <social-media></social-media>
</div>

@include('layouts.footer')

<script>
    $(function () {
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        
        Noty.overrideDefaults({
            callbacks: {
                onTemplate: function () {
                    if (this.options.type === 'email') {
                        this.barDom.innerHTML += '<div class="bg-white p-5 rounded-md"><a href="mailto:fahrtwindmedia@aol.com" class="no-underline hover:underline text-lg">Nimm Kontakt mit uns auf! ✍️</a></div>'
                    }
                }
            }
        })

            setTimeout(function () {
                new Noty({
                    type: 'email',
                    layout: 'bottomRight',
                    timeout: 30000,
                    progressBar: true,
                }).show();
            }, 2000);
    })
</script>

@stop
