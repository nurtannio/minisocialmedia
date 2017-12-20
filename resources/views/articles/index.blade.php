@extends('layouts.app')

@section('content')
	<div class="row">
		@forelse($articles as $article)
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span>Nurtannio</span>
						<span class="pull-right">
							{{$article->created_at->diffForHumans()}}
						</span>
		
					</div>

					<div class="panel-body">
						{{$article->content}}
					</div>

					<div class="panel-footer clearfix" style="background: white">
						<i class="fa fa-heart pull-right"></i>
					</div>
			
				</div>
			</div>
		@empty
			No Articles.
		@endforelse
		
	</div>

@endsection