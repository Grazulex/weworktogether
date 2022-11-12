@extends('layouts.page')

@section('content')
        <div class="page-container">

            <div class="columns is-vcentered">

                <div class="column is-12 is-12-desktop">

                    <h1 class="h2-title">Privacy Policy of We Share Our Workspace</h1>

                    <p class="text-intro">
                    We Share Our Workspace operates the https://www.weshareourworkspace.com/ website, which provides the SERVICE.This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the We Share Our Workspace website. If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy. Our Privacy Policy was created with the help of the  Privacy Policy Template Generator . The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at https://www.weshareourworkspace.com/, unless otherwise defined in this Privacy Policy.
                    </p>

                </div>

            </div>

        </div>

        <div class="page-container">

            <div class="content">
                
                <h2 class="h3-title">Information Collection and Use</h2>
                <p class="text-intro">
                For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.
                </p>
                <h2 class="h3-title">Log Data</h2>
                <p class="text-intro">
                We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer’s Internet Protocol (“IP”) address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.
                </p>
                <h2 class="h3-title">Cookies</h2>
                <p class="text-intro">
                Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer’s hard drive. Our website uses these “cookies” to collection information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.
                </p>
                <h2 class="h3-title">Service Providers</h2>
                <p class="text-intro">
                We may employ third-party companies and individuals due to the following reasons:
                </p>
                <ul class="list">
                    <li>To facilitate our Service;</li>
                    <li>To provide the Service on our behalf;</li>
                    <li>To perform Service-related services; or</li>
                    <li>To assist us in analyzing how our Service is used.</li>
                </ul>
                <p class="text-intro">
                We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.
                </p>
                <h2 class="h3-title">Security</h2>
                <p class="text-intro">
                We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.
                </p>
                <h2 class="h3-title">Links to Other Sites</h2>
                <p class="text-intro">
                Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.
                </p>
                <h2 class="h3-title">Children’s Privacy</h2>
                <p class="text-intro">
                These Services do not address anyone under the age of 13. We do not knowingly collect personally identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.
                </p>
                <h2 class="h3-title">Changes to This Privacy Policy</h2>
                <p class="text-intro">
                We may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.
                </p>
                <h2 class="h3-title">Contact Us</h2>
                <p class="text-intro">
                If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.
                </p>
                <p class="text-intro">
                By visiting this page on our website: https://www.weshareourworkspace.com/contact
                </p>
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
