@extends('User.Master.master')

@section('content')
    

	

	@include('User.Home.coverImage'); {{-- photo section --}}
		
	<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3 leftSide">
							@include('User.Home.leftSideBar');
							</div>
							<div class="col-lg-6">
								<div class="loadMore">
									

									@include('User.Home.postSomething'); {{-- New post --}}

								

							

									@include('User.Home.scrollingFeed'); {{-- Scrolling Feed area --}}

								
								</div>
							</div>
							<div class="col-lg-3">

								

								@include('User.Home.rightSideBar'); {{-- Right Side bar Create your Own page friends --}}

								

							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
    @endsection