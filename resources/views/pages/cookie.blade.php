@extends('layouts.page')

@section('content')
        <div class="page-container">

            <div class="columns is-vcentered">

                <div class="column is-12 is-12-desktop">

                    <h1 class="h2-title">Cookies Policy</h1>

                    <p class="text-intro">
                    Last updated: November 10, 2022<br>
                    This Cookies Policy explains what Cookies are and how We use them. You should read this policy so
                    You can understand what type of cookies We use, or the information We collect using Cookies and how
                    that information is used.<br>
                    Cookies do not typically contain any information that personally identifies a user, but personal information
                    that we store about You may be linked to the information stored in and obtained from Cookies. For
                    further information on how We use, store and keep your personal data secure, see our Privacy Policy.
                    We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in
                    the Cookies We use..
                    </p>

                </div>

            </div>

        </div>

        <div class="page-container">

            <div class="content">
                
                <h2 class="h2-title">Interpretation and Definitions</h2>
                <h3 class="h3-title">Interpretation</h3>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p> 
                <h3 class="h3-title">Definitions</h3>
                <p>For the purposes of this Cookies Policy:</p>
                <ul>
                    <li>
                        <p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to We Share Our Workspace.</p>
                    </li>
                    <li>
                        <p><strong>Cookies</strong> means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</p>
                    </li>
                    <li>
                        <p><strong>Website</strong> refers to We Share Our Workspace, accessible from https://weshareourworkspace.com</p>
                    </li>
                    <li>
                        <p><strong>You</strong> means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</p>
                    </li>
                </ul>
                <h2 class="h2-title">Use of Cookies</h2>
                <h3 class="h3-title">Types of Cookies</h3>
                <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>
                <p>We use both session and persistent Cookies for the purposes set out below:</p>
                <ul>
                    <li>
                        <p>
                            <strong>Necessary / Essential Cookies</strong>
                            <br>Type: Session Cookies
                            <br>Administered by: Us
                            <br>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Cookies Policy / Notice Acceptance Cookies</strong>
                            <br>Type: Persistent Cookies
                            <br>Administered by: Us
                            <br>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Functionality Cookies</strong>
                            <br>Type: Persistent Cookies
                            <br>Administered by: Us
                            <br>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.
                        </p>
                    </li>
                </ul>
                <h3 class="h3-title">Your Choices Regarding Cookies</h3>
                <p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>
                <p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>
                <p>If You'd like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>
                <ul>
                    <li>
                        <p>For the Chrome web browser, please visit this page from Google: <a href="https://support.google.com/accounts/answer/32050" rel="external nofollow noopener" target="_blank">https://support.google.com/accounts/answer/32050</a></p>
                    </li> 
                    <li>
                        <p>For the Internet Explorer web browser, please visit this page from Microsoft: <a href="http://support.microsoft.com/kb/278835" rel="external nofollow noopener" target="_blank">http://support.microsoft.com/kb/278835</a></p>
                    </li>
                    <li>
                        <p>For the Firefox web browser, please visit this page from Mozilla: <a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" rel="external nofollow noopener" target="_blank">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>
                    </li>
                    <li>
                        <p>For the Safari web browser, please visit this page from Apple: <a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" rel="external nofollow noopener" target="_blank">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>
                    </li>
                </ul>
                <p>For any other web browser, please visit your web browser's official web pages.</p>
                <h3 class="h3-title">More Information about Cookies</h3>
                <p>You can learn more about cookies: <a href="https://www.termsfeed.com/blog/cookies/" rel="external nofollow noopener" target="_blank">What Are Cookies?</a>.</p>
                <h2 class="h2-title">Contact Us</h2>
                <p>If you have any questions about this Cookies Policy, You can contact us:</p>
                <p>By visiting this page on our website: https://www.weshareourworkspace.com/contact</p>
            </div>
                
               



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

        </div>

@stop
