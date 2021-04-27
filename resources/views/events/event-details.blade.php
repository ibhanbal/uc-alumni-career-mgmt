@extends('layout.master')
@section('title')
  News and Events
@endsection

@section('content')
<section class="bg-lighter">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-content">
					<img class="pull-right flip mr-15 center" style="width: 755px; height: 480px;" src="{{ asset('images/event-images/' . $event->image_url) }}" alt="">
				</div>
				<h3 class="text-uppercase mt-15">{{ $event->name }}</h3>
				<p>{!! nl2br(e($event->long_description)) !!}</p>
			</div>
		</div>
	</div>
</section>
@endsection
