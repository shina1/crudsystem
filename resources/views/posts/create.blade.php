@extend('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-6 col-md-offset-3">
		{{ Form::open(['route' => 'posts.store', 'method' => 'POST']) }}
		@include('post.form_master')
		{{ Form::close()}}
	</div>
</div>

@endcontent