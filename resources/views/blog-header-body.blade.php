

    <!-- blog page start  -->
    <section id="blog-list-section" class="blog-list-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-list"><h2 class="mb-4">
                        <i class="fas fa-bullhorn text-danger me-2"></i>Announcement
                        </h2><hr>
                        <div class="blog-item mb-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="/img/vendors/blog/admission/admission.jpg" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <h3><a href="{{ url('/admission-blog') }}">Admissions Fair June - 2025</a></h3>
                                    <p>BGMIT not only provides training but also develops students in such a way that they can overcome their inertia and quickly emerge in the real world. If they are interested, even relatively less <a href="{{ url('/admission-blog') }}">Read More..</a></p>
                                    <div class="d-flex border-top mt-4">
                                        <small class="flex-fill text-center border-end py-2">By <a href="index.html">BGMIT</a></small>
                                        <small class="flex-fill text-center border-end py-2">May 25<sup>th</sup>, 2025</small>
                                        <small class="flex-fill text-center py-2"><a href="blog.html">Institution News</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="mb-4">Latest Blogs</h2>
                        <div class="blog-item mb-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="/img/vendors/blog/graphic-design.jpeg" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <h3><a href="{{ url('/graphic-design-blog') }}">Basic Graphic Design</a></h3>
                                    <p>Why not start your career in Freelancing? Graphic design is a course which will help you to earn money by freelancing and BGM IT is here to help you find your earning source in the marketplace.</p>
                                    <a href="{{ url('/graphic-design-blog') }}" class="btn btn-color">Read More</a>
                                    <div class="d-flex border-top mt-4">
                                        <small class="flex-fill text-center border-end py-2">By <a href="{{ url('/') }}">BGMIT</a></small>
                                        <small class="flex-fill text-center border-end py-2">May 16<sup>th</sup>, 2025</small>
                                        <small class="flex-fill text-center py-2"><a href="blog.html">Institution News</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item mb-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="/img/vendors/blog/web-development.jpeg" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <h3><a href="{{ url('/web-development-blog') }}">Web Development</a></h3>
                                    <p>"It must be said that Web Development stands out as one of the most essential courses in today’s digital age. Whether you're a logo designer, content creator, software developer, graphic designer...</p>
                                    <a href="{{ url('/web-development-blog') }}" class="btn btn-color">Read More</a>
                                    <div class="d-flex border-top mt-4">
                                        <small class="flex-fill text-center border-end py-2">By <a href="{{ url('/') }}">BGMIT</a></small>
                                        <small class="flex-fill text-center border-end py-2">May 10<sup>th</sup>, 2025</small>
                                        <small class="flex-fill text-center py-2"><a href="blog.html">Institution News</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item mb-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="/img/vendors/blog/digital/digital-1.jpg" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <h3><a href="{{ url('/digital-marketing-blog') }}">Digital Marketing</a></h3>
                                    <p>Welcome to the Exciting Realm of Digital Marketing - Where Visibility and Strategy Come Together. <a href="{{ url('/digital-marketing-blog') }}">Read More...</a></p>
                                    
                                    <div class="d-flex border-top mt-4">
                                        <small class="flex-fill text-center border-end py-2">By <a href="index.html">BGMIT</a></small>
                                        <small class="flex-fill text-center border-end py-2">May 12<sup>th</sup>, 2025</small>
                                        <small class="flex-fill text-center py-2"><a href="blog.html">Institution News</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-center d-flex">
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="mb-4">Search</h3>
                        <form action="#" method="GET" class="mb-4">
                            <input type="text" class="form-control" placeholder="Search for blogs..." name="search">
                            <button type="submit" class="btn btn-color mt-2">Search</button>
                        </form>       
                    </div>
                    <div class="sidebar">
                        <h3 class="mb-4">Categories</h3>
                        <ul class="list-group mb-4">
                            <li class="list-group-item"><a href="#">Graphic Design</a></li>
                            <li class="list-group-item"><a href="#">Digital Marketing</a></li>
                            <li class="list-group-item"><a href="#">Web Development</a></li>
                            <li class="list-group-item"><a href="#">Software Development</a></li>
                            <li class="list-group-item"><a href="#">SEO</a></li>
                            <li class="list-group-item"><a href="#">Social Media Marketing</a></li>
                        </ul>       
                    </div>
                </div>
            </div>
</section>
    <!-- blog page end -->












@include('layouts.footer')


