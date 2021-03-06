@extends('layouts.frontend-sub')

@section('content')
	<div class="site-content">
        <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
            	<div class="mdl-card__title">
                	<h1 class="mdl-card__title-text">Working Group on {{ $group->name }}</h1>
            	</div>
            	<div class="mdl-card__media">
              		<img class="article-image" src="{{ URL::to('src/frontend/img/portfolio-header.jpg')}}" border="0" alt="Portfolio Page">
              	</div>
            	<div class="mdl-grid site-copy">
	              	<div class="mdl-cell mdl-cell--12-col">
	              		<div class="mdl-cell mdl-cell--10-col mdl-card__supporting-text no-padding ">
	    					<p>{{ $group->narrative }}</p>
	    					<br>
	    					
	    				</div>
						
						<div class="mdl-grid">
							<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Members</h3>
							<div class="mdl-cell mdl-cell--12-col mdl-card__supporting-text no-padding ">
	    						@if(count($members) == 0)
									<ul>
										<li>No Members</li>
									</ul>
								@else
									<ul>
										@foreach($members as $member)
											<li>{{ $member->name }}, {{ $member->position}}</li>
										@endforeach
									</ul>
								@endif
							</div>
						</div>

						<div class="mdl-grid">
						  <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Document</h3>
						  <div class="mdl-cell mdl-cell--12-col mdl-card__supporting-text no-padding ">
						      	@if(count($docugroups) == 0)
								    <ul>
								    	<li>No Document</li>
								    </ul>
								@else
									@foreach($docugroups as $docugroup)
										<ul>
											<li>
												<a href="{{ asset("documents/docugroup/$docugroup->file") }}">
												{{ $docugroup->name }} 
												</a>
											</li>
										</ul>
									@endforeach
								@endif
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection