@extends('base')
@section('title','acceuil du site')
@section('content')
    <h1>Mon blog</h1>

    @foreach($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>
        {{$post->content}}
    </p>
    <p>
        <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }} " class="btn btn-primary">Voir plus</a>
    </p>
   
    @endforeach
   
    {{$posts->links()}}
@endsection