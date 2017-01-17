@extends('layout.master')

@section('title')
  Contact
@stop

@section('content')
                  <!-- text -->
                  <div class="post-text">
                     <h1>Contact Me</h1>
                     <div class="line">
                        <div class="margin">
                           <div class="s-12 l-6">
                              <h4>Vision Design - graphic zoo</h4>
                              <address>
                                 <p><i class="icon-home icon"></i> Gallayova 19, 841 02 Bratislava</p>
                                 <p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
                                 <p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
                              </address>
                              <br />
                              <h4>Social</h4>
                              <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/">Facebook</a></p>
                              <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/">Twitter</a></p>
                           </div>
             <div class="s-12 l-6">
                <h4>Contact Me</h4>
                <form class="customform" action="" method="post">
                  @if($errors->has('email'))
                  <span class="help-block">{{ $errors->first('email')}}</span>
                  @endif
                   <div class="s-12"><input name="email" placeholder="Your e-mail"
                      title="Your e-mail" type="email"
                      value="{{ Request::old('email') ?: ''}}" /></div>
                   @if($errors->has('subject'))
                   <span class="help-block">{{ $errors->first('subject')}}</span>
                   @endif
                   <div class="s-12"><input name="subject" placeholder="Subject"
                      title="Your Subject" type="text"
                      value="{{ Request::old('subject') ?: ''}}" /></div>
                      @if($errors->has('message'))
                      <span class="help-block">{{ $errors->first('message')}}</span>
                      @endif
                   <div class="s-12"><textarea placeholder="Your massage"
                     name="message" rows="5">{{ Request::old('message') ?: ''}}</textarea></div>
                   {{ csrf_field() }}
                   <button type="submit">Submit Button</button>
                </form>
              </div>
                        </div>
                     </div>
                  </div>
                  <!-- MAP -->
                  <div id="map-block">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d682251.1123056135!2d17.063451638281247!3d48.09010461740988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka%2C+Slovensk%C3%A1+republika!5e0!3m2!1ssk!2s!4v1412519122400" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                  </div>

@stop
