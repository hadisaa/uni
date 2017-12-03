<header>
              <div class="container">
                  <div class="row">
                      <div class="col-md-5 topar_left">
                        <div class="logo">
                            <a href="#">
                              <img src="{{ asset(__('global.logo')) }}">
                            </a>
                        </div>
                      </div>
                      <div class="col-md-7 top_right">
                          <div class="social_bar clearfix">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="mailto:info@balkh-university.com"><i class="fa fa-envelope"></i>  info@balkh-university.com</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>  00123456789</a></li>
                            </ul>
                          </div>
                        
                          <div class="language_bar clearfix">
                              <ul>
                                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
                                  <li><button class="btn btn-success">Search</button></li>
                                  <li><input type="text" name="" class="form-control"></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
            </header>