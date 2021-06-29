<section class="hero-wrap ">
   <section class="banner-area electronic-banner-area">
    
    
            <img src="{{theme_asset('img/zingmydealcover2.jpg')}}" alt="banner-img" title="About us"   style="width: 100%; max-height: 399px;">
        
     
    </section>
</section> 

<section class="contact">
    <div class="container pb-10">

        <div class="row pb-20">
            <div class="col-md-12 pt-20 pb-20" style="text-align: center;">
             <h1 style="color: #0d68a4;">Contact Us</h1>
         </div>
            <div class="col-md-6 pb-10">
              <div class="form mb30">
                    <div class="title">
                        <h3>
                            Review About Us
                        </h3>
                        <div class="separator">
                            <span>
                            </span>
                            <span>
                            </span>
                            <span>
                            </span>
                        </div>
                    </div>
                    <div class="mb30" id="success">
                    </div>
            {!!Form::vertical_open()
            ->id('send-message')
            ->method('POST')
            ->action(url('contact/review'))!!}
                        <div class="row">
                            @include('notifications')
                            <div class="col-sm-12">
                                <div class="form-group">
                                {!!Form::text('name')
                                ->placeholder('Name')
                                ->raw()!!}
                                </div>
                            </div>
                           
                            
                            <div class="col-md-12 mb20">
                              <div class="form-group">
                              {!!Form::textarea('review')
                              ->placeholder('Review')->rows(6)
                              ->required()
                              ->raw()!!}
                              </div>

                            </div>
                            <div class="col-md-12 end-view">
                                <button class="btn view-btn  loadbutton" id="contact-submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="form mb30">
                    <div class="title">
                        <h3>
                            Get In Touch
                        </h3>
                        <div class="separator">
                            <span>
                            </span>
                            <span>
                            </span>
                            <span>
                            </span>
                        </div>
                    </div>
                    <div class="mb30" id="success">
                    </div>
            {!!Form::vertical_open()
            ->id('send-message')
            ->method('POST')
            ->action(url('contact/sendmail'))!!}
                        <div class="row">
                            @include('notifications')
                            <div class="col-sm-12">
                                <div class="form-group">
                                {!!Form::text('name')
                                ->placeholder('Name')
                                ->raw()!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                {!!Form::email('email')
                                ->placeholder('Email')
                                ->required()
                                ->raw()!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                {!!Form::text('phone')
                                ->placeholder('Phone')
                                ->raw()!!}
                              </div>
                            </div>
                            <div class="col-md-12 mb20">
                              <div class="form-group">
                              {!!Form::textarea('message')
                              ->placeholder('Message')->rows(6)
                              ->required()
                              ->raw()!!}
                              </div>

                            </div>
                            <div class="col-md-12 end-view">
                                <button class="btn view-btn  loadbutton" id="contact-submit" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>

</section>

