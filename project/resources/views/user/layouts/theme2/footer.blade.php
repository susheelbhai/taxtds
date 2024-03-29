@php
    $settings = Config::get('settings');
@endphp

<style>
    .widget.quick-link ul li a {
        padding-bottom: 0
    }
</style>
<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="netabout">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('storage/common/images/logo/' . $settings->light_logo) }}" alt="netcom">
                        </a>
                        <p> {{ $settings->short_description }}</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ $settings->address }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">{{ $settings->phone }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{ $settings->email }}</p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ $settings->facebook }}" style="padding: 4px; margin 4px"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="{{ $settings->twitter }}" style="padding: 4px; margin 4px"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="{{ $settings->instagram }}" style="padding: 4px; margin 4px"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a>
                                <a href="{{ $settings->linkedin }}" style="padding: 4px; margin 4px"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget quick-link clearfix">
                        <h3 class="widget-title">Free listing to all over cities</h3>
                        <div class="quick-links">
                            <ul class="one-half mr-5">
                                <li><a href="{{ route('home') }}">Ahmedabad</a></li>
                                <li><a href="{{ route('home') }}">Bangalore</a></li>
                                <li><a href="{{ route('home') }}">Chandigarh</a></li>
                                <li><a href="{{ route('home') }}">Chennai</a></li>
                                <li><a href="{{ route('home') }}">Coimbatore</a></li>
                                <li><a href="{{ route('home') }}">Delhi-NCR</a></li>
                            </ul>
                            <ul class="one-half">
                                <li><a href="#">Hyderabad</a></li>
                                <li><a href="{{ route('contact') }}">Goa</a></li>
                                <li><a href="{{ route('privacy') }}">Indore</a></li>
                                <li><a href="{{ route('tnc') }}">Jaipur</a></li>
                                <li><a href="{{ route('tnc') }}">Kolkata</a></li>
                                <li><a href="{{ route('tnc') }}">Mumbai</a></li>
                                <li><a href="{{ route('tnc') }}">Mysore</a></li>
                                <li><a href="{{ route('tnc') }}">Nagpur </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget quick-link clearfix">
                        <h3 class="widget-title">Popular categories</h3>
                        <div class="quick-links">
                            <ul class="one-half mr-5">
                                <li> <a href="#registration-services">Registration Services</a> </li>
                                <li> <a href="#company-compliance">Company compliance </a> </li>
                                <li> <a href="#tax-filling">Tax filling</a> </li>
                                <li> <a href="#audit-and-insurance">Audit and Insurance</a> </li>
                                <li> <a href="#taxation-advisory-and-personal-advisory">Taxation Advisory and Personal
                                        Advisory </a> </li>


                                <li> <a href="#fcra-fema-ngos">FCRA FEMA NGOs</a> </li>
                                <li> <a href="#valuations">Valuations</a> </li>
                                <li> <a href="#accounting-services">Accounting Services</a> </li>
                                <li> <a href="#investment-planning">Investment Planning</a> </li>
                                <li> <a href="#gst-return">GST Return</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-none">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                            your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>{{ $settings->app_name }} ©2021 All rights reserved. </p>
            <ul class="netsocials">
                {{-- <li><a href="{{ $settings->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> --}}
                <li>
                    Developed with <i class="fa fa-heart text-danger"></i> by <a href="https://digilight.in"
                        target="_blank">Digilight</a>
                </li>

            </ul>
        </div>
    </div>
</footer>
