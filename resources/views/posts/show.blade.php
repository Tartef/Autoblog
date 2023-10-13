@extends("layouts.app")
@section("title", $post->title)
@section("content")

    <h1>{{ $post->title }}</h1>

    <div>{{ $post->content }}</div>

    <p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

@endsection
