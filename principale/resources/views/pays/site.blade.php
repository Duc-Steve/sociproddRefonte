@extends('layouts.appSite')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}}</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Bienvenue sur la page d'accueil de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta property="og:description" content="Bienvenue sur la page d'accueil de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta property="og:image" content="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta name="twitter:creator" content="SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org" />
    <meta name="twitter:description" content="Bienvenue sur la page d'accueil de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta name="twitter:image" content="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <meta name="twitter:image:height" content="333" />
    <meta name="twitter:image:width" content="500" />

    <!-- Optimisation pour les applications web mobiles -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="SOCIPRODD" />
    <meta name="apple-mobile-web-app-title" content="SOCIPRODD" />
    <meta name="theme-color" content="#050A2E" />
    <meta name="msapplication-navbutton-color" content="#050A2E" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="msapplication-starturl" content="/" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />

    <!-- Liens vers les icônes et le manifest pour les PWA -->
    <link rel="apple-touch-icon" sizes="180x180" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="mask-icon" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" color="#050A2E" />
    <link rel="shortcut icon" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />

    <!-- Balises supplémentaires pour le SEO -->
    <!-- Lien canonique pour éviter le contenu dupliqué -->
    <link rel="canonical" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />
    
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Lien de révision -->
    <link rel="revision" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "breadcrumb": []
                },
                {
                    "@type": "WebSite",
                    "@id": "https://www.sociprodd.org/",
                    "name": "SOCIPRODD",
                    "url": "https://www.sociprodd.org/",
                    "publisher": {
                        "@type": "Organization",
                        "@id": "https://www.sociprodd.org/",
                        "name": "SOCIPRODD",
                        "url": "https://www.sociprodd.org/",
                        "sameAs": [
                            "https://www.facebook.com/",
                            "https://twitter.com/",
                            "https://www.instagram.com/",
                            "https://www.youtube.com/",
                            "https://www.linkedin.com/"
                        ],
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://www.sociprodd.org/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png"
                        }
                    }
                }
            ]
        })}
    </script>

                

@endsection

@section('sliderRevolution')

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- LOADING FONTS AND ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:500%2C400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/paysSystemeConfig/public/assets/plugins/slider-revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/paysSystemeConfig/public/assets/plugins/slider-revolution/fonts/font-awesome/css/font-awesome.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/paysSystemeConfig/public/assets/plugins/slider-revolution/css/settings.css">
    <style type="text/css">
        .tiny_bullet_slider .tp-bullet:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 25px;
            top: -12px;
            left: 0px;
            background: transparent
        }
    </style>
    <style type="text/css">
        .bullet-bar.tp-bullets {}
        
        .bullet-bar.tp-bullets:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box
        }
        
        .bullet-bar .tp-bullet {
            width: 60px;
            height: 3px;
            position: absolute;
            background: #aaa;
            background: rgba(204, 204, 204, 0.5);
            cursor: pointer;
            box-sizing: content-box
        }
        
        .bullet-bar .tp-bullet:hover,
        .bullet-bar .tp-bullet.selected {
            background: rgba(204, 204, 204, 1)
        }
        
        .bullet-bar .tp-bullet-image {}
        
        .bullet-bar .tp-bullet-title {}
    </style>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLICEY ADD-ON FILES -->
    <script type='text/javascript' src='/paysSystemeConfig/public/assets/plugins/slider-revolution/revolution-addons/slicey/js/revolution.addon.slicey.min.js?ver=1.0.0'></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/slider-revolution/js/extensions/revolution.extension.video.min.js"></script>

@endsection

<!-- contenu de page -->
@section('content')


    @if(Crypt::decrypt($FonctionaliteAcces->video) == "true")
        <!-- Page title -->
        
        <section id="page-title" class="text-light" data-bg-video="{{ asset(config('images-basiques-paths.basique')) }}/{{ Crypt::decrypt($PaysEntete->lien_video) }}">
            
            <div class="container">
                <div class="page-title">
                    <h1>{{ Crypt::decrypt($PaysEntete->phrase_video) }}</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
    @endif
    
    
    @if(Crypt::decrypt($FonctionaliteAcces->image_dynamique) == "true")
        <!-- Revolution Slider -->
        <section id="slider">
            <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" style="background:#000000;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="/paysSystemeConfig/public/assets/images/1.jpg"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                            data-slicey_shadow="0px 0px 0px 0px transparent">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset(config('images-basiques-paths.basique')) }}/{{ Crypt::decrypt($PaysEntete->lien_image_dynamique_un) }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0"
                                data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                                data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                                data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                                data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                                data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                                data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                                data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-67-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                                data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-67-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption   tp-resizeme" id="slide-67-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" data-fontsize="['25','25','25','20']"
                                data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Rubik;">{{ Crypt::decrypt($PaysEntete->phrase_un) }}</div>
                            <!-- LAYER NR. 17 -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-66" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="plugins/slider-revolution/assets/images/deskbg-100x50.jpg"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                            data-slicey_shadow="0px 0px 0px 0px transparent">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset(config('images-basiques-paths.basique')) }}/{{ Crypt::decrypt($PaysEntete->lien_image_dynamique_deux) }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0"
                                data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 18 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 19 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                                data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 20 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 21 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                                data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 22 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 23 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                                data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 24 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                                data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 25 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 26 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                                data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 27 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 28 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 29 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                                data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 30 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-66-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                                data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 31 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-66-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 33 -->
                            <div class="tp-caption   tp-resizeme" id="slide-66-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" data-fontsize="['25','25','25','20']"
                                data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Rubik;">{{ Crypt::decrypt($PaysEntete->phrase_deux) }} </div>
                           
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="plugins/slider-revolution/assets/images/reachout_bg-100x50.jpg"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                            data-slicey_shadow="0px 0px 0px 0px transparent">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset(config('images-basiques-paths.basique')) }}/{{ Crypt::decrypt($PaysEntete->lien_image_dynamique_trois) }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0"
                                data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 35 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 36 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                                data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 37 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                                data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 38 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                                data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 39 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 40 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                                data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 41 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                                data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 42 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 43 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                                data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 44 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                                data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 45 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                                data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 46 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                                data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 47 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                                data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on"
                                data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 48 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);">
                            </div>
                            <!-- LAYER NR. 50 -->
                            <div class="tp-caption   tp-resizeme" id="slide-68-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" data-fontsize="['25','25','25','20']"
                                data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Rubik;">{{ Crypt::decrypt($PaysEntete->phrase_trois) }}</div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="height: 5px; background: #226CE0;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <script type="text/javascript">
                var tpj = jQuery;
                var revapi24;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_24_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_24_1");
                    } else {
                        revapi24 = tpj("#rev_slider_24_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "revolution/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    style: "bullet-bar",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 50,
                                    space: 5,
                                    tmp: ''
                                }
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [868, 768, 960, 720],
                            lazyType: "none",
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0px",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                    if (revapi24) revapi24.revSliderSlicey();
                }); /*ready*/
            </script>
        </section>
        <!-- end: Revolution Slider-->
    @endif

     
    @if(Crypt::decrypt($FonctionaliteAcces->image_statique) == "true")
        <!-- Page title -->
        <section id="page-title" class="text-light" style="background-image:url('{{ asset(config('images-basiques-paths.basique')) }}/{{ Crypt::decrypt($PaysEntete->lien_image_statique) }}'); background-size: cover; background-position: center center;">
            <div class="container">
                <div class="page-title">
                    <h1>{{ Crypt::decrypt($PaysEntete->phrase_statique) }}</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
    @endif


    @if(Crypt::decrypt($FonctionaliteAcces->projet) == "true" && $nombreProjetEnCours > 0)
        <!-- Projet -->
        <section id="page-content">
            <div class="container">
                <!-- post content -->
                
                <div class="heading-text heading-section text-left">
                    <h2><span style="background-color: #050A2E; color: #fff; padding-left: 0.25em; padding-right: 0.25em; border-radius: 5px;">Projet en cours</span></h2>
                </div>
                
                <div class="row" style="border: 1px solid #050A2E; box-shadow: 0 0 5px #050A2E;">

                    <div class="col-lg-7">
                        <a href="#" style="margin-left: -1em;">
                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($projetEnCours->lien_photos)}}" style="width: 100%;">
                        </a> 
                    </div>
                    <div class="col-lg-5">
                        <div class="post-item-wrap p-3">
                            <div class="post-item-description">
                                
                                <span class="post-meta-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M7 1V3H3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H10.7546C9.65672 19.6304 9 17.8919 9 16C9 11.5817 12.5817 8 17 8C18.8919 8 20.6304 8.65672 22 9.75463V4C22 3.44772 21.5523 3 21 3H17V1H15V3H9V1H7ZM23 16C23 19.3137 20.3137 22 17 22C13.6863 22 11 19.3137 11 16C11 12.6863 13.6863 10 17 10C20.3137 10 23 12.6863 23 16ZM16 12V16.4142L18.2929 18.7071L19.7071 17.2929L18 15.5858V12H16Z"></path></svg>
                                    {{ $projetEnCours->created_at->format('Y-m-d')}}
                                </span>
                                
                                <span class="post-meta-comments ms-4">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z"></path></svg>
                                        
                                    @if($NombreCommentaire == 0)
                                        {{ $NombreCommentaire }} Commentaire
                                    @else
                                        {{ $NombreCommentaire }} Commentaires
                                    @endif
                                </span>
                                <h2 class="mt-3">{{ Crypt::decrypt($projetEnCours->titre)}}</h2>
                                <p>{{ Crypt::decrypt($projetEnCours->petite_description)}}</p>
                                
                                <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $projetEnCours->id_element]) }}" class="item-link mt-4">
                                    <strong class="item-link bg-sociprodd-jaune p-1 px-3">Lire plus
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        </section>
        <!-- end: Projet -->
    @endif
    
    
    @if(Crypt::decrypt($FonctionaliteAcces->actualite) == "true" && $nombreCinqDerniereActualite > 0)
        <!-- Actualite -->
        <section id="page-content">
            <div id="NosActualites" class="container">
                
                <div class="heading-text heading-section text-left">
                    <h2><span style="background-color: #050A2E; color: #fff; padding-left: 0.25em; padding-right: 0.25em; border-radius: 5px;">Actualités récentes</span></h2>
                </div>
                <!-- Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    
                    @foreach($cinqDerniereActualite as $cinqDerniereActualiteIndividu)
                        <!-- Post item-->
                        <div class="post-item border">
                            <div class="post-item-wrap">

                                @if(Crypt::decrypt($cinqDerniereActualiteIndividu->lien_photos) != null && Crypt::decrypt($cinqDerniereActualiteIndividu->lien_video) == null)
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($cinqDerniereActualiteIndividu->lien_photos)}}">
                                        </a>
                                        <span class="post-meta-category">Image</span>
                                    </div>
                                @endif

                                @if(Crypt::decrypt($cinqDerniereActualiteIndividu->lien_photos) != null && Crypt::decrypt($cinqDerniereActualiteIndividu->lien_video) != null)
                                        
                                    <div class="post-video">
                                        <div class="ratio ratio-16x9">
                                            <iframe width="560" height="376" src="{{ Crypt::decrypt($cinqDerniereActualiteIndividu->lien_video) }}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <span class="post-meta-category">Vidéo</span>
                                    </div>
                                @endif

                                <div class="post-item-description">
                                    <span class="post-meta-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M7 1V3H3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H10.7546C9.65672 19.6304 9 17.8919 9 16C9 11.5817 12.5817 8 17 8C18.8919 8 20.6304 8.65672 22 9.75463V4C22 3.44772 21.5523 3 21 3H17V1H15V3H9V1H7ZM23 16C23 19.3137 20.3137 22 17 22C13.6863 22 11 19.3137 11 16C11 12.6863 13.6863 10 17 10C20.3137 10 23 12.6863 23 16ZM16 12V16.4142L18.2929 18.7071L19.7071 17.2929L18 15.5858V12H16Z"></path></svg>
                                        {{ $cinqDerniereActualiteIndividu->created_at->format('Y-m-d')}}
                                    </span>
                                    <span class="post-meta-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z"></path></svg>
                                            
                                        @if($cinqDerniereActualiteIndividu->nombre_commentaire == 0)
                                            {{ $cinqDerniereActualiteIndividu->nombre_commentaire }} Commentaire
                                        @else
                                            {{ $cinqDerniereActualiteIndividu->nombre_commentaire }} Commentaires
                                        @endif
                                    </span>
                                    <h2 class="mt-3">{{ Crypt::decrypt($cinqDerniereActualiteIndividu->titre)}}</h2>
                                    <p>{{ Crypt::decrypt($cinqDerniereActualiteIndividu->petite_description)}}</p>
                                    <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $cinqDerniereActualiteIndividu->id_element]) }}" class="item-link bg-sociprodd-jaune p-1 px-3"><strong class="text-sociprodd-bleuefoncee">Lire plus 
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post item-->
                    @endforeach   

                    
                </div>
                <!-- end: Blog -->
            </div>
            <!-- end: post content -->
        </section>
        <!-- end: Actualite -->
    @endif


    @if(Crypt::decrypt($FonctionaliteAcces->podcast) == "true" && $NombrePodcast > 0)
        <!-- Podcast -->
        <section id="NosPodcasts" style="background-color: #050A2E;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        <div class="heading-text heading-section text-left">
                            <h1 style="color: #fff; font-size: 20em;">Nos
                                <br> podcasts</h1>
                        </div>
                        <p style="color: #fff; font-size: 1em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus nemo quaerat dolores illo possimus explicabo cupiditate maiores perspiciatis sapiente sit.</p>
                    </div>
                    <div class="col-lg-8 mt-3">
                        <article class="node node--type-article-push node--view-mode-grand-format-big">
                            <div class="bg-image image">
                                <figure>
                                    <img src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($dernierPodcast->lien_photos)}}" width="910" height="603" alt="{{ Crypt::decrypt($dernierPodcast->titre)}}">
                                    
                                </figure>
                            </div>
                            <div class="text">
                                <div class="overtitle">{{ $dernierPodcast->created_at->format('Y-m-d') }}</div>
                                <h3><span>« {{ Crypt::decrypt($dernierPodcast->titre )}} »</span></h3>
                                <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $dernierPodcast->id_element]) }}" class="item-link">
                                    <strong class="item-link bg-sociprodd-jaune p-1 px-3">Lire plus
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="grand-format-small">
                    <div class="rows">
                        
                        @if(!empty($troisAvantDernierPodcast))

                            @foreach($troisAvantDernierPodcast as $troisAvantDernierPodcastIndividu)
                                <article class="node node--type-article-push node--view-mode-grand-format-medium">
                                    <div class="bg-image image">
                                        <figure>
                                            <img src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($troisAvantDernierPodcastIndividu->lien_photos)}}" width="380" height="265" alt="« {{ Crypt::decrypt($troisAvantDernierPodcastIndividu->titre)}} »">
                                          
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <div class="overtitle">{{ $troisAvantDernierPodcastIndividu->created_at->format('Y-m-d') }}</div>
                                        <h3><span>« {{ Crypt::decrypt($troisAvantDernierPodcastIndividu->titre )}} »</span></h3>
                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $troisAvantDernierPodcastIndividu->id_element]) }}" class="item-link">
                                            <strong class="item-link bg-sociprodd-jaune p-1 px-3">Lire plus
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong>
                                        </a>
                                    </div>
                                </article>
                            @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- end: Podcast -->
    @endif
     
    
    @if(Crypt::decrypt($FonctionaliteAcces->reportage) == "true" && $nombreTroisDernierReportage > 0)
        <!-- Reportage -->
        <section id="page-content">
            <div id="NosReportages" class="container">
                <div class="heading-text heading-section text-left">
                    <h2><span style="background-color: #050A2E; color: #fff; padding-left: 0.25em; padding-right: 0.25em; border-radius: 5px;">Nos reportages</span></h2>
                </div>
                <div class="row">

                @foreach($troisDernierReportage as $troisDernierReportageIndividu)
                    <div class="col-lg-4 mt-4">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ Crypt::decrypt($troisDernierReportageIndividu->lien_video) }}" allowfullscreen style="border-radius: 5px;"></iframe>
                        </div>
                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $troisDernierReportageIndividu->id_element]) }}" style="color: #000000;"><strong style="margin-top: 1em">{{ Crypt::decrypt($troisDernierReportageIndividu->titre) }}</strong></a> 
                    </div> 
                @endforeach
                   
                </div>
            </div>
        </section>
        <!-- end: Reportage -->
    @endif

    
    @if(Crypt::decrypt($FonctionaliteAcces->membre_executif) == "true" && $nombreSousMembrePays > 0)
        <!-- Gallery -->
        <section>
            <div class="container">
                <!--Team members shadow-->
                <div class="heading-text heading-section text-left">
                    <h2><span style="background-color: #050A2E; color: #fff; padding-left: 0.25em; padding-right: 0.25em; border-radius: 5px;">Sous membre exécutif</span></h2>
                </div>
                <div class="carousel team-members team-members-shadow" style=" margin-bottom: 2em;" data-arrows="false" data-margin="20" data-items="4">
                    @foreach($sousMembrePays as  $sousMembrePaysIndividu)
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($sousMembrePaysIndividu->lien_photo)}}">
                            </div>
                            <div class="team-desc">
                                <h3>{{ Crypt::decrypt($sousMembrePaysIndividu->nom_prenom)}}</h3>
                                <span>{{ Crypt::decrypt($sousMembrePaysIndividu->poste)}}</span>
                                <p>{{ Crypt::decrypt($sousMembrePaysIndividu->petit_message)}} </p>
                                <div class="align-center">
                                    @if(Crypt::decrypt($sousMembrePaysIndividu->url_facebook) != null)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ Crypt::decrypt($sousMembrePaysIndividu->url_facebook)}}">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span></a>
                                    @endif

                                    @if(Crypt::decrypt($sousMembrePaysIndividu->url_twitter) != null)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ Crypt::decrypt($sousMembrePaysIndividu->url_twitter)}}" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span></a>
                                    @endif
                                        
                                    @if(Crypt::decrypt($sousMembrePaysIndividu->url_linkedin) != null)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ Crypt::decrypt($sousMembrePaysIndividu->url_linkedin)}}" data-width="118">
                                            <i class="fab fa-linkedin"></i>
                                            <span>Linkedin</span></a>
                                    @endif

                                    @if(Crypt::decrypt($sousMembrePaysIndividu->url_portefolio) != null)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ Crypt::decrypt($sousMembrePaysIndividu->url_portefolio)}}" data-width="80">
                                            <i class="ri-passport-fill"></i>
                                            <span>Folio</span></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--END: Team members shadow-->
            </div>
        </section>
        <!-- end: Gallery -->
    @endif
    

        <!-- CONTACT -->
        <section>
            <div class="container">
                <div class="row">
                    @if(Crypt::decrypt($FonctionaliteAcces->contact) == "true" && Crypt::decrypt($FonctionaliteAcces->coordonnee) == "true")
                        <div class="col-lg-6">
                            <h3 class="text-uppercase">Contactez-nous !</h3>
                            <p>Cher utilisateur, vous pouvez contacter la représentation ({{Crypt::decrypt($PaysDonnee->nom_normale)}}) à tout moment.</p>

                            <div class="m-t-30">
                                <div>
                                   
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nom et Prénom</label>
                                            <input type="text" id="nom_prenom" class="form-control name bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre nom et prénom" maxlength="35" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Adresse Email</label>
                                            <input type="email" id="email" class="form-control email bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre adresse mail" maxlength="250" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="subject">Sujet</label>
                                            <input type="text" id="sujet" class="form-control" placeholder="Entrer le sujet du message bdr-sociprodd-all-bleuefoncee"  maxlength="150" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea type="text" id="description" rows="5" class="form-control bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre message" style="resize:none;"  maxlength="500" required></textarea>
                                    </div>
                                    <button class="btn btn-primary mt-4"  type="button" onclick="enregistrerContact()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M1.94619 9.31543C1.42365 9.14125 1.41953 8.86022 1.95694 8.68108L21.0431 2.31901C21.5716 2.14285 21.8747 2.43866 21.7266 2.95694L16.2734 22.0432C16.1224 22.5716 15.8178 22.59 15.5945 22.0876L12 14L18 6.00005L10 12L1.94619 9.31543Z"></path></svg>
                                        Envoyer le message</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">

                            <h3 class="text-uppercase">Address & Carte</h3>
                            <address>
                                <h4>
                                {{ Crypt::decrypt($coordonneePays->localisation) }} <br></h4>
                                <abbr title="Phone">Téléphone: {{ Crypt::decrypt($coordonneePays->telephone) }} <br>
                                <abbr title="Phone">Fixe: {{ Crypt::decrypt($coordonneePays->fixe) }} <br>
                            </address>

                            <div style="height: 500px;"> 
                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($coordonneePays->image_carte_pays) }}" class="w-100 h-100">
                            </div>
                        </div>
                    @endif

                    
                </div>
            </div>
        </section>
        <!-- end: CONTACT -->

    @if(Crypt::decrypt($FonctionaliteAcces->newsletter) == "true")
        <!-- Newsletter -->
        <section>
            <div class="container">
                <div class="bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee br-sociprodd-1 p-4">
                    <h3 class="text-uppercase">Newsletter</h3>
                    <p>Cher utilisateur, vous pouvez vous inscrire à notre newsletter appelée NEWS-{{ Crypt::decrypt($PaysDonnee->nom_normale) }} pour recevoir nos informations instantanément.</p>

                    <div class="m-t-30">
                        <div>
                            <div style="position: relative;">
                            <div class="form-group">
                                <input type="email" id="email_newsletter" class="form-control email bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre adresse mail" maxlength="250" required>
                            
                            </div>
                            
                            <button class="btn btn-primary mt-4" type="button" onclick="enregistrerNewsletter()" style="position: absolute; left: auto; right: 0; top: -1em;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M1.94619 9.31543C1.42365 9.14125 1.41953 8.86022 1.95694 8.68108L21.0431 2.31901C21.5716 2.14285 21.8747 2.43866 21.7266 2.95694L16.2734 22.0432C16.1224 22.5716 15.8178 22.59 15.5945 22.0876L12 14L18 6.00005L10 12L1.94619 9.31543Z"></path></svg>
                            
                            </button>
                        </div>
                            
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Newsletter -->
    @endif


@endsection




<!-- contenu de page -->
@section('jsMap')
    <!--Google Maps files-->
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="/paysSystemeConfig/public/assets/plugins/gmap3/map-styles.js"></script>
@endsection





<!-- contenu jsScript -->
@section('jsScript')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
    
        // Remplacer ces variables par les valeurs appropriées
        var PaysUrl = "{{$PaysDonnee->nom_url}}";  // Dynamique selon le pays

        function enregistrerNewsletter() {
            // Récupérer les valeurs des champs d'entrée
            var emailNews = document.getElementById("email_newsletter").value;
        
            if (!emailNews || !validateEmail(emailNews)) {
                afficherErreur("L'adresse e-mail est invalide.");
                return;
            }
        
        
            // URL de l'API pour les newsletters (inclut les paramètres dynamiques)
            const apiUrl = `https://pays.sociprodd.org/api/v1/${PaysUrl}/newsletter`;
        
            const NewsletterData = {
                'email': emailNews,
            };
        
            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(NewsletterData) // Convertit les données en chaîne JSON
            })
            .then(response => response.json())
            .then(data => {
                // Traiter la réponse JSON
                if (data.code === 200) {
                    // Afficher un message en cas de succès
                    afficherErreur(data.message);
                    // Réinitialiser les champs
                    reinitialiserChampsNews();
                } else {
                    // Gérer d'autres codes de réponse si nécessaire
                    afficherErreur("Une erreur est survenue: " + data.message);
                }
            })
            .catch(error => {
                // Traiter les erreurs de la réponse ou autres exceptions
                if (typeof error === 'object' && error !== null && 'error' in error) {
                    afficherErreur(error.error);
                } else {
                    alert(error.message);
                }
            });
        }
        
        function enregistrerContact() {
            // Récupérer les valeurs des champs d'entrée
            var nomPrenom = document.getElementById("nom_prenom").value;
            var emailContact = document.getElementById("email").value;
            var messageContact = document.getElementById("description").value;
            var sujetContact = document.getElementById("sujet").value;
        
            // Validation des champs
            if (!nomPrenom || nomPrenom.length > 50) {
                afficherErreur("Le nom et prénom est requis et doit contenir au maximum 50 caractères.");
                return;
            }
        
            if (!emailContact || !validateEmail(emailContact)) {
                afficherErreur("L'adresse e-mail est invalide.");
                return;
            }
        
            if (!messageContact || messageContact.length > 500) {
                afficherErreur("Le commentaire est requis et doit contenir au maximum 500 caractères.");
                return;
            }
            
            if(!sujetContact || sujetContact.length > 100) {
                afficherErreur("Le sujet est requis et doit contenir au maximum 100 caractères.");
                return;
                
            }
        
        
            // URL de l'API pour les demandes de contacts (inclut les paramètres dynamiques)
            const apiUrl = `https://pays.sociprodd.org/api/v1/${PaysUrl}/contact`;
        
            const ContactData = {
                'nomPrenom': nomPrenom,
                'email': emailContact,
                'message': messageContact,
                'sujet': sujetContact,
            };
        
            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(ContactData) // Convertit les données en chaîne JSON
            })
            .then(response => response.json())
            .then(data => {
                // Traiter la réponse JSON
                if (data.code === 200) {
                    // Afficher un message en cas de succès
                    afficherErreur(data.message);
                    // Réinitialiser les champs
                    reinitialiserChamps();
                } else {
                    // Gérer d'autres codes de réponse si nécessaire
                    afficherErreur("Une erreur est survenue: " + data.message);
                }
            })
            .catch(error => {
                // Traiter les erreurs de la réponse ou autres exceptions
                if (typeof error === 'object' && error !== null && 'error' in error) {
                    afficherErreur(error.error);
                } else {
                    alert(error.message);
                }
            });
        }

        function reinitialiserChamps() {
            // Réinitialiser les valeurs des champs d'entrée à vide
            document.getElementById("nom_prenom").value = "";
            document.getElementById("email").value = "";
            document.getElementById("description").value = "";
            document.getElementById("sujet").value = "";
        }
        

        function reinitialiserChampsNews() {
            // Réinitialiser les valeurs des champs d'entrée à vide
            document.getElementById("email_newsletter").value = "";
        }
        
        // Fonction de validation d'email
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }

    </script>



    <script>
        
        function afficherErreur(message) {
            return new Promise((resolve, reject) => {
                Swal.fire({
                    html: `
                        <div style="text-align: center;">
                            <img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" class="img-fluid" width="132" height="132">
                            <h2 style="color: #073066;">${message}</h2>
                        </div>`,
                    background: 'ff914d',
                    timer: '4000',
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    // Rafraîchir la page
                    window.location.reload();
                });
            });
        }

    </script>



@endsection