

      <!-- TOP NAV WITH LOGO -->
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="{{route('index')}}">
                  My <span> Web Developing</span>
                </a>
                  <h1>Best Web Developing News and Open Source Project</h1>
                  <ul class="top-ul right">
                    @if(Auth::check())
                     <li>
                        <a href="{{route('index')}}">Blog</a>
                     </li>
                     <li>
                        <a href="{{route('about')}}">About</a>
                     </li>
                     <li>
                        <a href="{{route('contact')}}">Contact</a>
                     </li>
                     <li>
                        <a href="{{route('user')}}">User Panel</a>
                     </li>
                     @endif
                     <div class="social right">
                        <a target="_blank" href="https://www.facebook.com/">
                        <i class="icon-facebook_circle icon2x"></i>
                        </a>
                        <a target="_blank" href="https://twitter.com/">
                        <i class="icon-twitter_circle icon2x"></i>
                        </a>

                     </div>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
