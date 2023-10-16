@extends("layouts.app")
@section("title", $post->title)
@section("content")
@vite(['resources/css/posts.css', 'resources/js/posts.js'])


    <h1>{{ $post->title }}</h1>

    <div>{{ $post->content }}</div>

<p><a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a></p>
<p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

@endsection
