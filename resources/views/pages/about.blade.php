@extends('layouts.page')

@section('content')
        <div class="page-container">

            <div class="columns is-vcentered">

                <div class="column is-12 is-5-desktop">

                    <h1 class="h2-title">About We Share Our Workspace</h1>

                    <p class="text-intro">
                        We re here to help you finding people to work with.<br />
                        Stop isolating yourself and start sharing a home office
                        with others.
                    </p>

                </div>

                <div class="column is-12 is-7-desktop">
                        
                    <img class="about-visual-intro" src="images/about-visual-1.png" alt="" />

                </div>

            </div>

        </div>

        <div class="how-it-started has-text-centered">

            <div class="page-container">
                
                <h2 class="h2-title">How it all started</h2>

                <p class="text text-started">
                    After the pandemic started, most of us experienced working remotely. If it was a pleasant journey for some, it deprived others from the sociable aspect of their day-to-day life at work. That s why we decided to create We Share Our Workspace: to help you enjoy working from home without isolating yourself.
                </p>

                <img class="about-visual-started" src="images/about-visual-2.png" alt="" />

            </div>

        </div>

        <div class="page-container">

            <div class="faq">
                
                <h2 class="h2-title" id="faq">Frequently Asked Questions</h2>

                <div class="faq-list">
                    
                    <div class="faq-item">
                        
                        <div class="faq-header">
                            <img src="images/icon-plus.svg" class="icon-arrow icon-plus" alt="" />
                            <img src="images/icon-less.png" class="icon-arrow icon-less" alt="" />
                            <p>What is the price?</p>
                        </div>

                        <div class="faq-content">
                            <p>Our service is 100% free if you want to share one home office. If you have multiple spaces you want to share,
                            <a href="#">contact us</a> and we'll give you a quote.</p>
                        </div>

                    </div>

                    <div class="faq-item">
                        
                        <div class="faq-header">
                            <img src="images/icon-plus.svg" class="icon-arrow icon-plus" alt="" />
                            <img src="images/icon-less.png" class="icon-arrow icon-less" alt="" />
                            <p>How does it work?</p>
                        </div>

                        <div class="faq-content">
                            <p>After you created an account, you can either create an ad about the space you want to share or search for a place by filling the dedicated form. Our matching system will then suggest spaces and profiles that meet your requirements.</p>
                        </div>

                    </div>

                    <div class="faq-item">
                        
                        <div class="faq-header">
                            <img src="images/icon-plus.svg" class="icon-arrow icon-plus" alt="" />
                            <img src="images/icon-less.png" class="icon-arrow icon-less" alt="" />
                            <p>Can I share more than one office??</p>
                        </div>

                        <div class="faq-content">
                            <p>Our platform allows you to share one office only for free. If you want to share more than one space, contact us and we’ll give you a quote.</p>
                        </div>

                    </div>

                </div>

            </div>

            <h3 class="h3-title">
                Your question is not listed?
            </h3>

            <p class="question">
                Tell us about it by using our and we <a href="{{ route('contact') }}">contact form</a> and we'll do our best to help you as quickly as possible!
            </p>

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
            <a href="blog.html" class="link-arrow">
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

        </div>

@stop
