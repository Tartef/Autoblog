@extends("layouts.app")
@section("title", "Editer un post")
@section("content")
    @vite(['resources/css/posts.css', 'resources/js/posts.js'])



    <h1>Créer un post</h1>

    <!-- Si nous av
    ons un Post $post -->
    @if (isset($post))

        <!-- Le formulaire est géré par la route "posts.update" -->
        <form method="POST" action="{{ route('posts.create', $post) }}" enctype="multipart/form-data" >

            <!-- <input type="hidden" name="_method" value="PUT"> -->
            @method('PUT')

            @else

                <!-- Le formulaire est géré par la route "posts.store" -->
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

                    @endif

                    <!-- Le token CSRF -->
                    @csrf

                    <p>
                        <label for="title" >Titre</label><br/>

                        <!-- S'il y a un $post->title, on complète la valeur de l'input -->
                        <input type="text" name="title" value="{{ isset($post->title) ? $post->title : old('title') }}"  id="title" placeholder="Le titre du post" >

                    </p>


                    <p>
                        <label for="content" >Contenu</label><br/>

                        <!-- S'il y a un $post->content, on complète la valeur du textarea -->
                        <textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ isset($post->content) ? $post->content : old('content') }}</textarea>

                    </p>

                    <input type="submit" name="valider" value="Valider" >

                </form>

        @endsection
