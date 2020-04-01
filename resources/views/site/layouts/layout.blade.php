<!DOCTYPE html>
<html lang="pt-br">

<head>

   <!--[MOBILE]-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--[PWA]-->
   <meta name="application-name" content="Restaurante">
   <meta name="theme-color" content="#f51313">
   <meta name="apple-mobile-web-app-status-bar-style" content="#f51313">
   <meta name="msapplication-navbutton-color" content="#f51313">
   <link rel="icon" sizes="192x192" href="{{ asset('/assets/img/logoHM192x192.png') }}">
   <link rel="apple-touch-icon" href="{{ asset('/assets/img/logoHM192x192.png') }}">
   <link rel="shortcut icon" type="image/png href=" {{ asset('/assets/img/logoHM144x144.png') }}"">
   <link rel="manifest" href="{{ asset('/assets/manifest/manifest.json') }}">

   <!--[ICON]-->
   <link rel="icon" href="{{ asset('/assets/img/icon.png') }}">

   <!--[META:OG]-->
   <meta property="og:locale" content="pt-BR">
   <meta property="og:url" content="{{ url('') }}'">
   <meta property="og:title" content="Restaurante">
   <meta property="og:site_name" content="Restaurante">
   <meta property="og:description" content="Vendas no restaurante">
   <meta property="og:image" content="{{ asset('/assets/img/icon.png') }}">
   <meta property="og:image:type" content="image/png">
   <meta property="og:image:width" content="144">
   <meta property="og:image:height" content="144">

   <!--[META:TWITTER]-->
   <meta name="twitter:title" content="Restaurante">
   <meta name="twitter:description" content="Vendas no restaurante">
   <meta name="twitter:image" content="{{ asset('/assets/img/icon.png') }}">

   <!--[META:AUTHOR]-->
   <meta property="article:author" content="M4theus.dev" href="https://M4theus.dev">
   <meta property="article:section" content="M4theus.dev" href="https://M4theus.me">
   <meta property="article:published_time" content="M4theus.dev" href="https://M4theus.me">

   <!--[META:Keywords]-->
   <meta name="keywords" content="Restaurante, restaurante, matheus dev, mths.dev">
   <meta name="description" content="Vendas no restaurante">
   <meta name="copyright" content="Restaurante, Inc. ©">

   <!--[LINK:Outros]-->
   <link href="{{ url('assets/css/sweetalert2-dark.css') }}" rel="stylesheet">
   <link href="{{ url('assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
   <link href="http://hypemanager.ml/arquivos/css/ionicons/ionicons.min.css" rel="stylesheet" type="text/css">

   <!--[LINK:Styles]-->
   <link href="{{ url(mix('assets/css/style.css')) }}" rel="stylesheet">




   <title>Title do Site</title>
</head>

<body>
   @yield('content')

   <!--[SCRIPTS:Outros]-->
   <script src="{{ url('assets/js/jquery.js') }}"></script>
   <script src="{{ url('assets/js/sweetalert2.min.js') }}"></script>
   <script src="{{ url('assets/js/bootstrap/bootstrap.js') }}"></script>
   <!--[SCRIPTS:Site]-->
   <script src="{{ url(mix('assets/js/main.js')) }}"></script>
</body>

</html>