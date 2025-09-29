            {{-- <h2 class="sec-title text-uppercase">Tips for Hair</h2> --}}

            {{-- <section class="vs-blog-wrapper space-top">
                <div class="container">
                    <div class="title-area text-center">
                        <div class="sec-icon"><img src="assets/img/icon/sec-icon.png" alt="Section Title"></div><span
                            class="sub-title">Articles & News</span>
                    </div>

                    <div class="row gx-lg-0 align-items-start">
                        <div class="col-md-6 blog-steped">
                            <div class="vs-blog">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog-img-2-1.jpg" alt="Blog Image"
                                            class="w-100"></a><a href="blog.html" class="blog-date">22
                                        Dec, 2022</a></div>
                                <div class="blog-content">
                                    <div class="post-author">Posted By <a href="team-details.html">John smith</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html">Salon offering hair services
                                            ranging
                                            from haircuts</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 blog-steped">
                            <div class="vs-blog">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog-img-2-2.jpg" alt="Blog Image"
                                            class="w-100"></a><a href="blog.html" class="blog-date">13
                                        Jan, 2022</a></div>
                                <div class="blog-content">
                                    <div class="post-author">Posted By <a href="team-details.html">John smith</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html">From its medieval origins to the
                                            digital era learn</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 blog-steped">
                            <div class="vs-blog">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog-img-2-3.jpg" alt="Blog Image"
                                            class="w-100"></a><a href="blog.html" class="blog-date">31
                                        Feb, 2022</a></div>
                                <div class="blog-content">
                                    <div class="post-author">Posted By <a href="team-details.html">John smith</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html">The purpose lorem ipsum is to
                                            create a
                                            natural block</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 blog-steped">
                            <div class="vs-blog">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog-img-2-4.jpg" alt="Blog Image"
                                            class="w-100"></a><a href="blog.html" class="blog-date">09
                                        Mar, 2022</a></div>
                                <div class="blog-content">
                                    <div class="post-author">Posted By <a href="team-details.html">John smith</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html">Until recently, the prevail view
                                            assumed lorem ipsum</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center z-index-common"><a href="blog.html" class="vs-btn">view all posts</a></div>
                </div>
            </section> --}}



<section class="vs-blog-wrapper space-top">
    <div class="container">
        <div class="title-area text-center">
            <div class="sec-icon"><img src="assets/img/icon/sec-icon.png" alt="Section Title"></div>
            <span class="sub-title">Articles & News</span>
        </div>

        <div class="row gx-lg-0 align-items-start">
            @foreach ($blogs as $blog)
                <div class="col-md-6 blog-steped">
                    <div class="vs-blog">
                        <div class="blog-img">
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="w-100">
                            </a>
                            <a href="{{ route('blog.index') }}" class="blog-date">
                                {{ $blog->created_at->format('d M, Y') }}
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-author">
                                Posted By 
                                <a href="#">{{ $blog->category?->name ?? 'Uncategorized' }}</a>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center z-index-common">
            <a href="{{ route('blog.index') }}" class="vs-btn">View All Posts</a>
        </div>
    </div>
</section>
