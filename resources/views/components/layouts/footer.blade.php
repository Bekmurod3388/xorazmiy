<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">

                {{-- ABOUT --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="{{ route('index', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('texnikum_img/logo_texnikum.png') }}" width="160px" alt="Logo">
                            </a>
                        </div>

                        <p>{{ __('footer.about.address_full') }}</p>

                        <ul class="mt-20">
                            <li><a href="#" aria-label="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://t.me/+YWnl_WpB7nYyZjVi" target="_blank" rel="noopener" aria-label="Telegram"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="https://utktt.uz" target="_blank" rel="noopener" aria-label="Website"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.instagram.com/utktt_texnikum/?next=https%3A%2F%2Fwww.instagram" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                {{-- SITEMAP --}}
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>{{ __('footer.sitemap.title') }}</h6>
                        </div>

                        <ul>
                            <li><a href="{{ route('index', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.home') }}</a></li>
                            <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.about') }}</a></li>
                            <li><a href="{{ route('director', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.structure') }}</a></li>
                            <li><a href="{{ route('photos', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.gallery') }}</a></li>
                            <li><a href="{{ route('veterans', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.honorary_teachers') }}</a></li>
                        </ul>

                        <ul>
                            <li><a href="{{ route('teachers', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.all_teachers') }}</a></li>
                            <li><a href="{{ route('news', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.news') }}</a></li>
                            <li><a href="{{ route('actives', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.active_students') }}</a></li>
                            <li><a href="{{ route('olimpics', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.olympiad_winners') }}</a></li>
                            <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"><i class="fa fa-angle-right"></i>{{ __('footer.sitemap.contact') }}</a></li>
                        </ul>
                    </div>
                </div>

                {{-- CONTACT --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>{{ __('footer.contact.title') }}</h6>
                        </div>

                        <ul>
                            <li>
                                <div class="icon"><i class="fa fa-home"></i></div>
                                <div class="cont">
                                    <p>{{ __('footer.contact.address_short') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <div class="cont">
                                    <p>+998-(93)-337-81-10</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="cont">
                                    <p>info@urgtex3.uz</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p>
                            <a target="_blank" rel="noopener" href="https://www.amusoft.uz">amusoft.uz</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">
                        {{-- bo'sh --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
