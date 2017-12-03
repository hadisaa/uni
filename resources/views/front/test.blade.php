@extends('front.layouts.master')

@section('title', 'Computer Science')

@section('content')
<div class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="side latest_news">
                    <h3>Computer Science</h3>
                        <ul>
                            <li>
                                <p><a href="#">Overview</a></p>
                            </li>
                            <li>
                                <p><a href="#">Dean of Faculty</a></p>
                            </li>
                            <li>
                                <p><a href="#">Departments</a></p>
                            </li>
                             <li>
                                <p><a href="#">Strategic Plan</a></p>
                            </li>
                             <li>
                                <p><a href="#">Activities</a></p>
                            </li>
                                 
                        </ul>
                </div>
			</div>
			<div class="col-md-6">
                <h4>{{ $test->title }}</h4>
                <p>
                    {{ $test->body }}

                    {{ LaravelLocalization::getCurrentLocaleRegional() }}

                     {{ LaravelLocalization::getCurrentLocaleScript() }}
                </p>             
            </div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
@endsection