<section id="section-1-1" class="hero hero-bg-1 layout-2">
    <div class="container">
        <!-- items outer -->
        <div class="outer clearfix z-1 relative">

            <div class="row flex"><!-- row -->

                <!-- phones image -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="phones">
                        <img src="{{ $about_us->aboutUsImage->url ?? "#"}}" alt="hero"/>
                    </div>
                </div>

                <!-- call to action -->
                <div class="col-md-7 col-md-offset-1 col-sm-12 col-xs-12">

                    <div class="cta">

                        <!-- text -->
                        <h2 class="b20-1">
                            <span class="strong">
                                {{ trim(strip_tags($about_us['title_'. app()->getLocale()])) }}
                            </span>
                        </h2>
                        <p class="b20-2">


                            {{ strip_tags(trim($about_us->data['content_'. app()->getLocale()])) }}



                        </p>

                        <!-- buttons -->
                        <div class="buttons b20-3">
                            <a href="{{ $shared['settings']['ios_link'] ?? '#' }}" target="_blank" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Download on the</span><br>App Store
								</span>
                            </a>
                            <a href="{{ $shared['settings']['android_link'] ?? '#' }}" target="_blank" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Get it on</span><br>Google Play
								</span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- light overlay -->
    <div class="overlay-light"></div>

</section>
