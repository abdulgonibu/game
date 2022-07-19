@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <div class="body">
		<style>
			.body .centerize .rows_allgames_wp .row img {
				height: 180px;
			}
		</style>
		<div class="centerize">
			<div class="head">
				<div class="offer">
					<marquee class="mrqdsgn">{{ $setting->slide_text }}</marquee>
				</div>
				<div class="mySlides">
					<a href="{{ route('reviewpage') }}">
						<img src="{{ asset('FILE/IMAGE/slider-img-1.png') }}">
					</a>
				</div>
				<div class="mySlides">
					<a href="{{ route('reviewpage') }}">
						<img src="{{ asset('FILE/IMAGE/slider-img-2.png') }}">
					</a>
				</div>
				<div class="mySlides">
					<a href="{{ route('reviewpage') }}">
						<img src="{{ asset('FILE/IMAGE/slider-img-3.png') }}">
					</a>
				</div>
				<center>
					<div class="dotted">
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
					</div>
				</center>
			</div>
			<div class="rows_allgames_wp">
				@foreach ($games as $item)
					<div class="row">
						<img src="{{ $item->image }}" alt="">
						<div class="flex">
							<small class="text-muted">★ ★ ★ ★ ★</small>
							<li onclick="location.href='{{ route($item->game_name, $item->id) }}'">Play</li>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection











