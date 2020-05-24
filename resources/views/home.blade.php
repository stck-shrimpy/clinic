@extends('layouts.app')

@section('content')
<div class="container home pt-5">

	<div class="row justify-content-center mt-5 mb-5">
		<div class="col-md-12 pd-0">
			<div class="card shadow-lg">
				<div class="card-body">
					<h5 class="card-title pl-3 font-weight-bolder mb-4">今週の予約状況</h5>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">診察時間</th>

								<th scope="col">月</th>
								<th scope="col">火</th>
								<th scope="col">水</th>
								<th scope="col">木</th>
								<th scope="col">金</th>
								<th scope="col">土</th>


							</tr>
						</thead>
						<tbody>
							<tr>
								<td>9:00 ~ 19:00</td>

								<td><i class="far fa-circle"></i></td>
								<td><i class="far fa-circle"></i></td>
								<td><i class="far fa-circle"></i></td>
								<td><i class="fas fa-times"></i></td>
								<td><i class="fas fa-times"></i></td>
								<td><span class="material-icons">change_history</span></td>

							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row justify-content-center pt-5">
			@guest
				<div class="col-md-6">
					<div class="card shadow-lg">
						<div class="card-body">
							<h5 class="card-title font-weight-bolder">体験談</h5>
								<ul>
									@foreach ($reviews as $review)
										<li class="mt-4 text-dark"><p class="card-text">{{ $review->body }}&nbsp;&nbsp;<small >{{ $review->user->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $review->created_at }}</small></p></li>
									@endforeach
								</ul>
								
									
							
							
							
						</div>
					</div>

				</div>
			@else
				<div class="col-md-6">
					<div class="card shadow-lg">
						<div class="card-body">
							<h5 class="card-title">こんばんは、{{ Auth::user()->name }}</h5>
							<p>今月の予約がまだのようです！</p>
							{{-- <p>今週は{{  }}件の予約があります</p> --}}
							<a href="#" class="btn btn-green">予約を確認</a>
						</div>
					</div>

				</div>	
			@endguest
						
			
			<div class="col-md-6">
				<div class="card shadow-lg">
					<div class="card-body">
						<h5 class="card-title font-weight-bolder">今日の空席状況</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>

			</div>
		</div>

	</div>
	@endsection