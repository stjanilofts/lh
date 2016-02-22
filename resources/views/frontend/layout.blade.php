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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/freewall/1.0.5/freewall.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>

        <script>
        Vue.config.debug = true;
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
        </script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="uk-container uk-container-center">
            <div class="Haus uk-margin-large-bottom uk-margin-large-top">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-5 uk-flex uk-flex-middle uk-flex-center">
                        <i class="uk-icon-small uk-icon-phone-square uk-margin-right"></i>563 1000
                    </div>

                    <div class="uk-width-medium-3-5 uk-text-center">
                        <a href="/" id="logo"><img src="/img/logo.png" /></a>
                    </div>

                    <div class="uk-width-medium-1-5 uk-flex uk-flex-middle uk-flex-center">
                        <a href="http://facebook.com" title="Facebook" class="uk-margin-right"><i class="uk-icon uk-icon-facebook-square uk-icon-small"></i></a>
                        <a href="/veftre/" title="Veftré" class="uk-margin-right"><i class="uk-icon uk-icon-sitemap uk-icon-small"></i></a>
                        <a href="/hafa-samband/" title="Senda fyrirspurn" class="uk-margin-right"><i class="uk-icon uk-icon-envelope-square uk-icon-small"></i></a>
                    </div>
                </div>
            </div>

            <div class="Menu uk-margin-large-bottom">
                <nav class="top">
                    <ul>   
                        <li class="uk-hidden-large mobile-button"><a><i class="uk-icon-bars uk-margin-right"></i>Meira</a></li>

                        {!! kalMenuBasicAll() !!}
                    </ul>
                </nav>
                <script>
                $(document).ready(function() {
                    $('li.mobile-button a').click(function() {
                        $(this).parents('li').next('ul').slideToggle();
                    });
                    
                    $('span.open').click(function() {
                        var ctx = $(this);
                        var sub = ctx.parent('li').find('> ul');

                        sub.slideToggle('fast', function() {
                            if(sub.is(':visible')) {
                                ctx.find('i').removeClass('uk-icon-caret-square-o-down');
                                ctx.find('i').addClass('uk-icon-caret-square-o-up');
                            } else {
                                ctx.find('i').removeClass('uk-icon-caret-square-o-up');
                                ctx.find('i').addClass('uk-icon-caret-square-o-down');
                            }
                        });
                    })
                })
                </script>
            </div>

            <?php

            $boxes = [
                [
                    'size' => '2-2',
                    'image' => '1.jpg',
                    'title' => 'Lýtalækningar',
                    'link' => '#',
                ],
                [
                    'size' => '2-1',
                    'image' => '2.jpg',
                    'title' => 'Burt með hrukkurnar',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '3.jpg',
                    'title' => 'Æðaskurðlækningar',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '4.jpg',
                    'title' => 'Panta tíma',
                    'link' => '#',
                ],
                [
                    'size' => '2-2',
                    'image' => '5.jpg',
                    'title' => 'Almennar surðlækningar',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '6.jpg',
                    'title' => 'Blóðtökur',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '7.jpg',
                    'title' => 'Augnaðgerðir',
                    'link' => '#',
                ],
                [
                    'size' => '1-2',
                    'image' => '8.jpg',
                    'title' => 'Þvagfæraskurðlækningar',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '9.jpg',
                    'title' => 'Kviðslit',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '10.jpg',
                    'title' => 'Starfsfólk Læknahússins',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '11.jpg',
                    'title' => 'Handaaðgerðir',
                    'link' => '#',
                ],
                [
                    'size' => '1-1',
                    'image' => '12.jpg',
                    'title' => 'Æðahnútaaðgerðir',
                    'link' => '#',
                ],                
            ];

            ?>

            @if(frontpage())
                <div class="Boxes uk-margin-large-bottom">
                    @foreach($boxes as $box)
                        <div class="Box item-{{ $box['size'] }}">
                            <div class="Box__image" style="background-image: url('/imagecache/large/{{ $box['image'] }}');">
                            </div>
                            <div class="Box__inner">
                                <a class="Box__anchor" href="{{ $box['link'] }}"></a>
                                <div class="Box__content">
                                    <h4>{{ $box['title'] }}</h4>
                                    <div class="Box__text">Vitað er um að nítján börn hafi verið seld mansali til Danmerkur frá árinu 2009.</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="Content uk-margin-large-bottom">
                    <h1>@yield('title', 'Titil vantar')</h1>
                    
                    @yield('content')
                </div> 
            @endif

            <div class="uk-text-center uk-margin-large-bottom uk-text-bold">
                <hr>

                &copy; Læknahúsið | Egilsgata 3, 101 Reykjavík | Sími 563 1000

            </div>

        </div>

        <script src="/js/scripts.js"></script>
    </body>
</html>