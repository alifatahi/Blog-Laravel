@if(Session::has('fail'))
<section class="info-box fail" style="font-size:30px;  text-shadow: 2px 2px 2px black;">
        {{Session::get('fail')}}
   </section>
@endif
<!--out put success-->
@if(Session::has('success'))
  <section class="info-box success">
     {{Session::get('success')}}
  </section>
@endif
