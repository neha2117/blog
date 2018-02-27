@extends('layouts.app')

@section('title')
Blog
@endsection

@section('brandname')
Blog
@endsection

@section('content1')
	<a href="/home" class="btn btn-primary"> Add new</a>
	
	<table class="w3-theme table table-bordered table-responive" style="margin-top:18px ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Title</th>
			<th>Created At</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody class="w3-theme-l4">
		@foreach( $categors as  $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->category}}</td>
			<td>{{ $category->title}}</td>
			<td>{{ $category->created_at}}</td>
			<td>
				<a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
			</td>
			<td>
				{!!Form::open(['method'=>'delete','route'=>['category.destroy',$category->id]])!!}

				{!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}

				{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	
	@endsection