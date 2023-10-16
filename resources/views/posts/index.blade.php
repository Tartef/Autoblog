@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")
@vite(['resources/css/posts.css', 'resources/js/posts.js'])


    <h1>Tous les articles</h1>

    <p>
        <!-- Lien pour créer un nouvel article : "posts.create" -->
        <a href="{{ route('posts.create') }}" title="Créer un article" >Créer un nouveau post</a>
    </p>

    <!-- Le tableau pour lister les articles/posts -->
    <table border="1" >
        <thead>
        <tr>
            <th>Titre</th>
            <th>Opérations sur les posts</th>
        </tr>
        </thead>
        <tbody>
        <!-- On parcourt la collection de Post -->
        @foreach ($posts as $post)
            <tr>
                <td>
                    <!-- Lien pour afficher un Post : "posts.show" -->
                    <a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
                </td>

                <td>
                    <a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a>
                </td>

                <td>
                    <button><!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                        <form method="POST" action="{{ route('posts.destroy', $post) }}" >
                            <!-- CSRF token -->
                            @csrf
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                            @method("DELETE")
                            <input type="submit" value="Supprimer" >
                        </form>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
