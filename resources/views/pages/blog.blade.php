@extends('layouts.app')

@section('content')
    <div class="home-hero">
    </div>
    <h2 class="h2-title">
        {{ $blog->title }}
    </h2>
    {!! $blog->content !!}
@stop
