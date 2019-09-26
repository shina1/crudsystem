@extend('layout.php')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Post Show</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{route('posts.home')}}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

			
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title : </strong>
			{{$post->title}}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Body : </strong>
			{{$post->body}}
		</div>
	</div>
</div>

@endcontent()