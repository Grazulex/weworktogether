@extends('layouts.page')

@section('content')
<div class="columns">

                <div class="column is-12">

                    <div class="article-item current-article">

                        <img class="visual" src="{{ Storage::url($blog->image)}}" alt="{{ $blog->title }}" />

                        <p class="tag-item">
                            @foreach ($blog->tags as $tag)
                                {{ $tag }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>

                        <div class="share-post">
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/icon-facebook.svg" alt="" />
                            </a>
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/icon-twitter.svg" alt="" />
                            </a>
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/icon-linkedin.svg" alt="" />
                            </a>
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/icon-mail.svg" alt="" />
                            </a>
                        </div>

                        <h2 class="item-title">{{ $blog->title }}</h2>

                            {!!$blog->content !!}

                    </div>

                </div>

            </div>

            <div class="columns is-marginless read-next is-vcentered is-mobile">
                <div class="column is-paddingless is-narrow">
                    <h2 class="h2-title is-light">
                        Read next
                    </h2>
                </div>
                <div class="column is-paddingless has-text-right">
                    <a href="{{ route('blog') }}" class="link-arrow">
                        Read all our blogs
                    </a>
                </div>
            </div>

            <div class="columns insights-guidelines">
                @foreach ($otherBlogs as $blog)
                    <div class="column is-4">
                        <a href="article.html">
                            <img class="visual" src="{{ Storage::url($blog->image)}}" alt="{{ $blog->title }}" />
                            <p class="tag-item">
                                @foreach ($blog->tags as $tag)
                                    {{ $tag }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </p>
                            <p class="item-title">
                                {{ $blog->title }}
                            </p>
                            <p class="text">
                                {{ $blog->resule }}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
@stop
