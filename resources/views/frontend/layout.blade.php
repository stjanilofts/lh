<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{!! config('formable.site_title') !!}{!! isset($pagetitle) ? ' | '.$pagetitle : '' !!}</title>

        <meta name="description" content="">
        <meta name="keywords" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="token" name="token" value="{{ csrf_token() }}">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/uikit.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/slideshow.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/slider.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/dotnav.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/notify.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/slidenav.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/tooltip.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/sticky.min.css" rel="stylesheet">
        <link href="/css/app.css?v=3" rel='stylesheet' type='text/css'>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/slideshow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/slider.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/slideset.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/notify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/tooltip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/lightbox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/grid.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/components/sticky.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>

        <script>
        Vue.config.debug = true;
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
        </script>

        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Læknahúsið</h1>
        @yield('content')
    </body>
</html>