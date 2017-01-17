<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
        <title>My Web News | @yield('title')</title>

              <meta name="description" content="Best News and Open Source Projects For Web Developer"/>
              <meta name="keywords" content="Developing, Web Developing,Web News,"/>

              <link rel="stylesheet" href="{{URL::to('css/components.css')}}">
              <link rel="stylesheet" href="{{URL::to('css/responsee.css')}}">

              <!-- CUSTOM STYLE -->
              <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
              <link rel="stylesheet" href="{{URL::to('css/template-style.css')}}">
              <script type="text/javascript" src=" {{URL::to('js/jquery-1.8.3.min.js')}}"></script>
              <script type="text/javascript" src=" {{URL::to('js/jquery-ui.min.js')}}"></script>
              <script type="text/javascript" src=" {{URL::to('js/modernizr.js')}}"></script>
              <script type="text/javascript" src=" {{URL::to('js/responsee.js')}}"></script>
              <!--[if lt IE 9]>
              <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
              <![endif]-->
           </head>

   <body class="size-1140">
         @include('includes.header')
          <!-- MAIN SECTION -->
        <section id="article-section" class="line">
          <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-9">
            <!-- ARTICLE 1 -->
            <article class="margin-bottom">
              @yield('content')
            </article>
          </div>
          @include('includes.sidebar2')
        </div>
      </section>
         @include('includes.footer')
  </body>
</html>
