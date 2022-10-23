@extends('layouts.page')

@section('content')
<div class="columns is-variable is-8-desktop">
                
                <div class="column is-8 article-featured">

                    <a href="{{ route('blog_show', $lastestBlogs->first()->slug ) }}" class="article-item">

                        <img class="visual" src="{{ Storage::url($lastestBlogs->first()->image)}}" alt="{{ $lastestBlogs->first()->title }}" />

                        <p class="tag-item">
                            @foreach ($lastestBlogs->first()->tags as $tag)
                                {{ $tag }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>

                        <h2 class="item-title">{{ $lastestBlogs->first()->title }}</h2>

                        <p class="text">
                            {{ $lastestBlogs->first()->resume }}
                        </p>

                    </a>

                </div>

                <div class="column is-4">
                    
                    <a href="{{ route('blog_show', $lastestBlogs[1]->slug ) }}" class="article-item">
                        <img class="visual" src="{{ Storage::url($lastestBlogs[1]->image)}}" alt="{{ $lastestBlogs[1]->title }}" />
                        <p class="tag-item">
                            @foreach ($lastestBlogs[1]->tags as $tag)
                                {{ $tag }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                        <h2 class="item-title">
                            {{ $lastestBlogs[1]->title }}
                        </h2>
                        <p class="text">
                            {{ $lastestBlogs[1]->resume }}
                        </p>
                    </a>

                    <a href="{{ route('blog_show', $lastestBlogs[2]->slug ) }}" class="article-item">
                        <img class="visual" src="{{ Storage::url($lastestBlogs[2]->image)}}" alt="{{ $lastestBlogs[2]->title }}" />
                        <p class="tag-item">
                            @foreach ($lastestBlogs[2]->tags as $tag)
                                {{ $tag }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                        <h2 class="item-title">
                            {{ $lastestBlogs[2]->title }}
                        </h2>
                        <p class="text">
                            {{ $lastestBlogs[2]->resume }}
                        </p>
                    </a>

                </div>

            </div>

            <div class="signup">

                <div class="columns">

                    <div class="column is-6 col-infos">
                        
                        <p class="signup-title">
                            Sign up for our newsletter and never miss any of our tips.
                        </p>

                        <form action="" class="signup-newsletter">
                            <input type="text" placeholder="Email" />
                            <button type="submit">Subscribe</button>
                        </form>
                        
                        <!-- <p class="signup-newsletter-status success">Success!</p> -->
                        <!-- <p class="signup-newsletter-status error">Error!</p> -->

                    </div>

                    <div class="column is-6 signup-bg"></div>

                </div>

            </div>

            <div class="blog-tabs">
                
                <div class="tab-list">
                    <span class="tab-link" data-tab="hp-funding-tab-1">All blogs</span>
                        @foreach ($tags as $tag)
                            <span class="tab-link" data-tab="hp-funding-tab-{{ strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $tag))) }}">{{ $tag }}</span>
                        @endforeach
                </div>

                <div class="tab-content-list">
                    <div class="tab-content-item" id="hp-funding-tab-1">
                        @foreach ($blogs as $blog)
                            <a href="{{ route('blog_show', $blog->slug ) }}" class="article-item">
                                <div class="columns">
                                    <div class="column is-4">
                                        <img class="visual" src="{{ Storage::url($blog->image)}}" alt="{{ $blog->title }}" />
                                    </div>
                                    <div class="column is-8">
                                        <h2 class="item-title">
                                            {{ $blog->title }}
                                        </h2>
                                        <p class="tag-item">
                                            @foreach ($blog->tags as $tag)
                                                {{ $tag }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </p>
                                        <p class="text">
                                            {{ $blog->resume}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {{ $blogs->links() }}
                    </div>
                    

                    @foreach ($blogsByTag as $tag => $blogsTags)
                    <div class="tab-content-item" id="hp-funding-tab-{{strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $tag)))}}">
                        @foreach ($blogsTags as $blog)
                            <a href="{{ route('blog_show', $blog->slug ) }}" class="article-item">

                            <div class="columns">

                                <div class="column is-4">

                                    <img class="visual" src="{{ Storage::url($blog->image)}}" alt="{{ $blog->title }}" />

                                </div>

                                <div class="column is-8">

                                    <h2 class="item-title">
                                        {{ $blog->title }}
                                    </h2>
                                    
                                    <p class="tag-item">
                                        @foreach ($blog->tags as $tag)
                                            {{ $tag }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </p>
                                    
                                    <p class="text">
                                        {{ $blog->resume}}
                                    </p>

                                </div>

                            </div>

                        </a>
                        @endforeach

                    </div>
                    @endforeach


                </div>

            </div>
            <!--<div class="pagination">
                <a class="pagination-item active" href="#">1</a>
                <a class="pagination-item" href="#">2</a>
                <a class="pagination-item" href="#">3</a>
                <a class="pagination-item" href="#">4</a>
                <a class="pagination-item" href="#">5</a>
                <a class="pagination-item" href="#">Next</a>
            </div>
            -->


@stop
