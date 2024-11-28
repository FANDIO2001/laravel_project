@extends('base')
@section('content')
@section('title',$post->title)

    <h1>{{$post->title}}</h1>
<p>
    {{$post->content}}
</p>

@endsection