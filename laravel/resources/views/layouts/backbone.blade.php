<!doctype html>
<html>

@include('layouts.head')

<!-- Cookie Consent by https://www.CookieConsent.com -->
<script type="text/javascript" src="//www.cookieconsent.com/releases/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
document.addEventListener('DOMContentLoaded', function () {
cookieconsent.run({"notice_banner_type":"interstitial","consent_type":"express","palette":"dark","language":"de","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"website_name":"fahrtwindmedia.de"});
});
</script>

<!-- Google Analytics -->
<script type="text/plain" cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-DM1YFRCHP3"></script>
<script type="text/plain" cookie-consent="tracking">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DM1YFRCHP3');
</script>
<!-- end of Google Analytics-->

<noscript>ePrivacy and GPDR Cookie Consent by <a href="https://www.CookieConsent.com/" rel="nofollow noopener">Cookie Consent</a></noscript>
<!-- End Cookie Consent by https://www.CookieConsent.com -->

<body class="antialiased">
    @yield('content')
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>
