 <nav class="navbar navbar-expand-md navbar-light bg-white main_nav navbar-toggleable-md">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav {{ __('global.margin') }}">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}" >{{ __('navbar.home') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" id="n" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         {{ __('navbar.about') }}
                                        </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">History of Balkh University</a>
                                  <a class="dropdown-item" href="#">Chancellor</a>
                                  <a class="dropdown-item" href="#">Vice Chancellor of Academic Affairs</a>
                                  <a class="dropdown-item" href="#">Vice Chancellor of Student Affairs</a>
                                  <a class="dropdown-item" href="#">Strategy and Policy</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" id="n" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         {{ __('navbar.faculties') }}
                                        </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Literature</a>
                                  <a class="dropdown-item" href="#">Art</a>
                                  <a class="dropdown-item" href="#">Engineering</a>
                                   <a class="dropdown-item" href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/test') }}">
                                    {{ \App\Test::where('locale', LaravelLocalization::getCurrentLocale())->first()->title }}
                                   </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" >{{ __('navbar.research') }}</a>
                            </li>
                             <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" id="n" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         {{ __('navbar.services') }}
                                        </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">ITCB</a>
                                  <a class="dropdown-item" href="#">Female Dormitory</a>
                                  <a class="dropdown-item" href="#">Male Dormitory</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" id="n" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         {{ __('navbar.students') }}
                                        </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">ITCB</a>
                                  <a class="dropdown-item" href="#">Female Dormitory</a>
                                  <a class="dropdown-item" href="#">Male Dormitory</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>