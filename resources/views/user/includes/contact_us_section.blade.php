<section id="section-1-12" class="download-cta colored">
    <div class="container container-800 z-1 relative">
        <div class="cta text-center">
            <h2 class="light">

                @lang('trans.contact us')

            </h2>
            <p>

                @lang('trans.contact us through phone or email')

            </p>
            <ul class="contact-list">
                <li><a href="mailto:info@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i>

                        {{ $shared['settings']['email'] ?? '' }}

                    </a></li>
                <li><a href="tel:{{ $shared['settings']['phone'] ?? '' }}"><i class="fa fa-phone" aria-hidden="true"></i> {{ $shared['settings']['phone'] ?? '' }} </a></li>
            </ul>

            <!-- buttons -->
            <div class="cta-buttons">
                <a href="{{ $shared['settings']['ios_link'] ?? '#' }}" target="_blank" class="btn btn-primary btn-download hvr-float-shadow">
                    <i class="fa fa-apple" aria-hidden="true"></i>
                    <span class="text">
						<span class="little">Download on the</span><br>App Store
					</span>
                </a>
                <a href="{{ $shared['settings']['android_link'] ?? '#' }}"  target="_blank" class="btn btn-primary btn-download hvr-float-shadow">
                    <i class="fa fa-android" aria-hidden="true"></i>
                    <span class="text">
						<span class="little">Get it on</span><br>Google Play
					</span>
                </a>
            </div>

        </div>

    </div>
</section>
