@extends('layouts.app')

@section('content')

    <div class="home-hero">

        <h1>
            Turn your home into a<br />collaborative workspace <strong>for free</strong>
        </h1>

        <p class="text">
            Stop working on your own and start sharing a home office.
        </p>

        <a href="{{ route('filament.pages.dashboard') }}" class="btn btn-orange">Join the movement</a>

    </div>

    <h2 class="h2-title">
        Finding coworkers has never been that simple
    </h2>

    <div class="columns finding-coworkers">
        <div class="column is-4">
            <img src="images/paper.png" class="visual" alt="" />
            <p class="title">Create one ad for free</p>
            <p class="text">Tell other users about your needs, your availability and location to work in the
                best conditions.</p>
        </div>
        <div class="column is-4">
            <img src="images/chat.png" class="visual" alt="" />
            <p class="title">Get in touch with coworkers</p>
            <p class="text">Discuss with coworkers that match your criterias about the terms of your
                cooperation.</p>
        </div>
        <div class="column is-4">
            <img src="images/deal.png" class="visual" alt="" />
            <p class="title">Start sharing your home office</p>
            <p class="text">You can start sharing a home office with other coworkers. As simple as that!</p>
        </div>
    </div>

    <div class="columns fight-isolation is-vcentered">
        <div class="column is-7 col-visual">
            <img class="visual" src="images/thestandingdesk-qFyUmsp2YTc-unsplash.jpg" alt="" />
        </div>
        <div class="column is-5 col-text">
            <h2 class="h2-title">
                Let’s fight isolation at work
            </h2>
            <p class="text">
                Wheter you are a freelancer, working from home or just feeling alone, We Share Our Workspace has
                been created for you.
            </p>
            <p class="text">
                Discover hundreds of profiles of people who want to turn work into a sociable experience, just
                like you.
            </p>
            <a href="{{ route('filament.pages.dashboard') }}" class="btn btn-orange">Find a home office near me</a>
        </div>
    </div>

    <h2 class="h2-title is-light">
        Our Insights & Guidelines
    </h2>

    <div class="columns is-marginless">
        <div class="column is-paddingless">
            <p class="text">
                Explore our blogs, follow our tips and improve your wellbeing.
            </p>
        </div>
        <div class="column is-paddingless has-text-right">
            <a href="{{ route('blog') }}?type=all" class="link-arrow">
                Read all our blogs
            </a>
        </div>
    </div>

    <div class="columns insights-guidelines">
        <div class="column is-4">
            <a href="{{ route('blog_show', $lastestBlogs[0]->slug ) }}">
                <img class="visual" src="{{ Storage::url($lastestBlogs[0]->image)}}" alt="{{ $lastestBlogs[0]->title }}" />
                <p class="tag-item">
                    @foreach ($lastestBlogs[0]->tags as $tag)
                        {{ $tag }}
                        @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </p>
                <p class="item-title">
                    {{ $lastestBlogs[0]->title }}
                </p>
                <p class="text">
                    {{ $lastestBlogs[0]->resume }}
                </p>
            </a>
        </div>
        <div class="column is-4">
            <a href="{{ route('blog_show', $lastestBlogs[1]->slug ) }}">
                <img class="visual" src="{{ Storage::url($lastestBlogs[1]->image)}}" alt="{{ $lastestBlogs[1]->title }}" />
                <p class="tag-item">
                    @foreach ($lastestBlogs[1]->tags as $tag)
                        {{ $tag }}
                        @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </p>
                <p class="item-title">
                    {{ $lastestBlogs[1]->title }}
                </p>
                <p class="text">
                    {{ $lastestBlogs[1]->resume }}
                </p>
            </a>
        </div>
        <div class="column is-4">
            <a href="{{ route('blog_show', $lastestBlogs[2]->slug ) }}">
                <img class="visual" src="{{ Storage::url($lastestBlogs[2]->image)}}" alt="{{ $lastestBlogs[2]->title }}" />
                <p class="tag-item">
                    @foreach ($lastestBlogs[2]->tags as $tag)
                        {{ $tag }}
                        @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </p>
                <p class="item-title">
                    {{ $lastestBlogs[2]->title }}
                </p>
                <p class="text">
                    {{ $lastestBlogs[2]->resume }}
                </p>
            </a>
        </div>
    </div>
@stop
