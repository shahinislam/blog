@extends('layouts.master')

@section('title')
     {{$post->title}}
@endsection

@section('content')
     <article>
     	<h3>{{$post->title}}</h3>
     	<span class="subtitle">{{$post->author}} | {{$post->create_at}}</span>
     	<p>{{$post->body}}</p>
     </article>
@endsection 