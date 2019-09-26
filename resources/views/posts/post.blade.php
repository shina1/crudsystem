@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="full-right">
			<h2>CRUD</h2>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<tr>
		<th with="80px">NO</th>
		<th>Tittle</th>
		<th width="140px" class="text-center">
			<a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
				<i class="gluphicon glyphicon-plus"></i>
			</a>
		</th>
	</tr>
	@foreach ($post as $key => $value)
	<tr>
		<td>{{$no++}}</td>
		<td>{{$value->title}}</td>
		<td>
			<a href="{{route('posts.show',$value-> id)}}" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-th-large"></i></a>
			<a class="btn btn-primary btn-sm" href="{{route('post.edit', $value->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
			{ Form::open(['method' => 'DELETE','route' =>['post.destroy', $value->id], 'style' => 'display' ]  <button type="submit" style="display:inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-plus"></i> > )}
				{ Form::close() }
		</td>
	</tr>
	@endforeach
</table>

@endsection 