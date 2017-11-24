@extends('front.layouts.master')

@section('title', 'Balkh University')

@section('content')

	@include('front.carousel')

	<div class="main_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="related_post">
                                <div class="news">
                                    <h3>News</h3>
                                    <ul>
                                      <li>
                                          <span class="rel_thumb">
                                              <a>
                                                <img src="img/news1.png">
                                              </a>
                                          </span>
                                          <div class="rel_right">
                                              <h4>
                                                  <a href="#">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a>
                                              </h4>
                                              <div class="meta">
                                                  <i>Posted: </i><span class="date">January 24, 2015</span>
                                              </div>
                                                
                                              <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...
                                              </p>
                                          </div>
                                      </li>
                                      <li>
                                          <span class="rel_thumb">
                                              <a>
                                                <img src="img/news1.png">
                                              </a>
                                          </span>
                                          <div class="rel_right">
                                              <h4>
                                                  <a href="#">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a>
                                              </h4>
                                              <div class="meta">
                                                  <span class="date">January 24, 2015</span>
                                              </div>
                                                
                                              <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...
                                              </p>
                                          </div>
                                      </li>
                                    </ul>
                                </div>
                                <div class="events">
                                    <h3>Events</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/news1.png">
                                            <div class="meta">
                                                <div class="time"><i class="fa fa-clock-o"></i>  12 June, 2017</div>
                                                <div class="place">
                                                  <i class="fa fa-map-marker"></i> New Compus, ITCB
                                                </div>
                                            </div>
                                            <h4>
                                                <a href="#">Balkh University Private Kankor Results</a>
                                            </h4>
                                        </div>
                                        <div class="col-md-4">
                                              <a class="btn btn-lg btn-success" href="{{ @url('/faculty/art') }}"></a>
                                        </div>
                                        <div class="col-md-4">
                                            <h3> {{ __('message.title') }} </h3>
                                            <p>
                                                
                                                {{ trans('v.name') }} 

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-12">
                            <div class="upcoming_events side">
                                  <h3>Upcoming Events</h3>
                                  <ul>
                                      <li>
                                          <div class="date_wrapper">
                                              <span class="date">
                                                  <span class="day">24</span>
                                                  <span class="month">January</span>
                                              </span>
                                          </div>
                                          <div class="event_right">
                                              <h4>
                                                  <a href="#">Offered in small class sizes with great emphasis...</a>
                                              </h4>
                                              <div class="meta">
                                                  <span class="place">
                                                      <i class="fa fa-map-marker"></i>
                                                      Main Campus
                                                  </span>
                                                  <span class="time">
                                                      <i class="fa fa-clock-o"></i>
                                                      11.00 am
                                                  </span>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="date_wrapper">
                                              <span class="date">
                                                  <span class="day">24</span>
                                                  <span class="month">January</span>
                                              </span>
                                          </div>
                                          <div class="event_right">
                                              <h4>
                                                  <a href="#">Offered in small class sizes with great emphasis...</a>
                                              </h4>
                                              <div class="meta">
                                                  <span class="place">
                                                      <i class="fa fa-map-marker"></i>
                                                      Main Campus
                                                  </span>
                                                  <span class="time">
                                                      <i class="fa fa-clock-o"></i>
                                                      11.00 am
                                                  </span>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="date_wrapper">
                                              <span class="date">
                                                  <span class="day">24</span>
                                                  <span class="month">January</span>
                                              </span>
                                          </div>
                                          <div class="event_right">
                                              <h4>
                                                  <a href="#">Offered in small class sizes with great emphasis...</a>
                                              </h4>
                                              <div class="meta">
                                                  <span class="place">
                                                      <i class="fa fa-map-marker"></i>
                                                      Main Campus
                                                  </span>
                                                  <span class="time">
                                                      <i class="fa fa-clock-o"></i>
                                                      11.00 am
                                                  </span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <a href="#" class="btn btn-block">More Events</a>
                            </div>
                              <div class="latest_news side">
                                  <h3>Latest News</h3>
                                  <ul>
                                      <li>
                                          <p>
                                              <a href="#">Offered in small class size with great emphasis</a>

                                          </p>
                                          <span class="date">
                                              Posted: <span>Steptember 24, 2017</span>
                                          </span>
                                          
                                      </li>
                                      <li>
                                          <p>
                                              <a href="#">Offered in small class size with great emphasis</a>

                                          </p>
                                          <span class="date">
                                              Posted: <span>Steptember 24, 2017</span>
                                          </span>
                                          
                                      </li>
                                      <li>
                                          <p>
                                              <a href="#">Offered in small class size with great emphasis</a>

                                          </p>
                                          <span class="date">
                                              Posted: <span>Steptember 24, 2017</span>
                                          </span>
                                          
                                      </li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
          </div>      
    

@endsection