@extends('applayout')

@section('title')
	Create New Article
@endsection

@section('main_content')
	<h1>Create New Article</h1>

	<form method="POST">
		{{ csrf_field() }}
		<label>Title: </label><input type="text" name="title"><br>
		</label>Content: </label><textarea name="content"></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>

@endsection