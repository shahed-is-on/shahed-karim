@extends('layouts.frontend')

@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}" />
@endsection


@section('content')
    <main>

        <!-- blog area start -->
        <div class="blog-details__area blog-details__customize pt-200">
            <div class="container">
                <div class="row">
                    <div class="blog-list__title-box">
                        <div class="blog-list__text-sm">
                            <span class="category">Blog</span><i class="fa-regular fa-angle-right"></i><span>Complete Guide to
                                User Flow in UX Design</span>
                        </div>
                        <h4 class="blog-list__title tp-char-animation">Complete Guide to <br> User Flow in UX Design</h4>
                    </div>
                    <div class="blog-details__meta mb-70">
                        <span><img src="assets/img/users/blog-list-avata-1.png" alt=""><i>Polina Viola</i></span>
                        <span>Apr 21, 2020</span>
                        <span>2 Comments</span>
                    </div>
                </div>
            </div>
            <div class="blog-details__big-thumb text-center cursor-style">
                <img data-speed="0.7" src="assets/img/blog/blog-details-big-img-2.jpg" alt="">
            </div>
        </div>
        <!-- blog area end -->

        <!-- postbox area start -->
        <section class="postbox-details__area pt-90 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div
                            class="postbox-details__wrapper  tp-blog-sidebar-sticky-area tp-blog-social-sticky-area p-relative">
                            <div class="postbox-details__top-social tp-blog-social-sticky d-none d-xxl-inline-flex">
                                <a href="#">
                                    <span>
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.7 0H5.6C4.67174 0 3.7815 0.368749 3.12513 1.02513C2.46875 1.6815 2.1 2.57174 2.1 3.5V5.6H0V8.4H2.1V14H4.9V8.4H7L7.7 5.6H4.9V3.5C4.9 3.31435 4.97375 3.1363 5.10503 3.00503C5.2363 2.87375 5.41435 2.8 5.6 2.8H7.7V0Z"
                                                fill="currentcolor" fill-opacity="0.7" />
                                        </svg>
                                    </span>
                                </a>
                                <a href="#">
                                    <span>
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 0.00594201C12.4341 0.405088 11.8076 0.71037 11.1445 0.910033C10.7887 0.500835 10.3157 0.210805 9.78961 0.0791711C9.26353 -0.0524632 8.7097 -0.0193515 8.20305 0.174028C7.69639 0.367408 7.26135 0.711725 6.95676 1.16041C6.65217 1.6091 6.49273 2.1405 6.5 2.68276V3.27367C5.46156 3.3006 4.43257 3.07029 3.50469 2.60325C2.5768 2.13622 1.77882 1.44695 1.18182 0.596851C1.18182 0.596851 -1.18182 5.91503 4.13636 8.27867C2.9194 9.10474 1.46968 9.51895 0 9.46049C5.31818 12.415 11.8182 9.46049 11.8182 2.66503C11.8176 2.50044 11.8018 2.33625 11.7709 2.17458C12.374 1.57982 12.7996 0.828909 13 0.00594201Z"
                                                fill="currentcolor" fill-opacity="0.7" />
                                        </svg>
                                    </span>
                                </a>
                                <a href="#">
                                    <span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.93792 3.78955C8.94295 3.78955 9.90682 4.1888 10.6175 4.89946C11.3282 5.61013 11.7274 6.574 11.7274 7.57903V12.0001H9.20108V7.57903C9.20108 7.24402 9.068 6.92273 8.83111 6.68584C8.59422 6.44896 8.27293 6.31587 7.93792 6.31587C7.60291 6.31587 7.28162 6.44896 7.04473 6.68584C6.80784 6.92273 6.67476 7.24402 6.67476 7.57903V12.0001H4.14844V7.57903C4.14844 6.574 4.54769 5.61013 5.25835 4.89946C5.96902 4.1888 6.93289 3.78955 7.93792 3.78955Z"
                                                fill="currentcolor" fill-opacity="0.7" />
                                            <path d="M2.52632 4.4209H0V11.9999H2.52632V4.4209Z" fill="currentcolor"
                                                fill-opacity="0.7" />
                                            <path
                                                d="M1.26316 2.52632C1.96079 2.52632 2.52632 1.96079 2.52632 1.26316C2.52632 0.565536 1.96079 0 1.26316 0C0.565536 0 0 0.565536 0 1.26316C0 1.96079 0.565536 2.52632 1.26316 2.52632Z"
                                                fill="currentcolor" fill-opacity="0.7" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="postbox-details__text">
                                <p class="tp-dropcap pb-10">Q Proin faucibus nec mauris a sodales, sed elementum mi
                                    tincidunt. Sed eget viverra
                                    egestas nisi in consequat. As technology continues to advance at a rapid pace, the
                                    way we work and interact with our devices is also changing. One area that has seen
                                    significant growth in recent years is the intersection of user experience (UX) and user
                                    interface (UI) design, artificial intelligence (AI), and the modern work station.
                                </p>
                                <p class="pb-20">In this blog post, we will explore how these three elements are coming
                                    together to revolutionize the workplace.Nulla aliquam rerum nesciunt velit iusto.
                                    Deserunt fugiat tempora sed voluptatibus neque suscipit minima qui. Beatae ipsa autem
                                    adipisci. Iusto numquam maxime vitae natus molestiae.</p>
                            </div>
                            <h4 class="postbox-details__title pb-15">What's up with UX and UI?</h4>
                            <div class="postbox-details__text pb-40">
                                <p>UX/UI design refers to the process of designing products, such as software, that are easy
                                    to use and intuitive for the user. This includes everything from the layout of buttons
                                    and menus to the overall aesthetic of the product. In the workplace, good UX/UI design
                                    can make a huge difference in terms of productivity and user satisfaction.</p>
                            </div>
                            <div class="postbox-details__thumb pb-55">
                                <img src="assets/img/blog/blog-details-2.jpg" alt="">
                            </div>
                            <div class="postbox-details__text pb-20">
                                <p>AI, on the other hand, is the simulation of human intelligence in machines. It has the
                                    potential to automate many tasks and make them more efficient. In the workplace, AI can
                                    be used to assist with tasks such as scheduling, data analysis, and customer service.
                                </p>
                            </div>
                            <div class="postbox-details__qoute p-relative">
                                <blockquote>
                                    <div class="postbox-details__qoute-icon">
                                        <span>
                                            <svg width="44" height="38" viewBox="0 0 44 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.5306 0C8.40816 2.95378 0 12.9328 0 25.9454C0 34.2479 3.67347 38 9.06122 38C14.2041 38 17.7959 34.4874 17.7959 29.458C17.7959 24.2689 14.1224 20.6765 8.89796 20.6765C6.36735 20.6765 4.32653 21.5546 2.69388 22.9118C3.26531 13.4916 9.79592 5.02941 19.102 1.83613L18.5306 0ZM43.3469 0C33.3061 2.95378 24.8163 12.9328 24.8163 25.9454C24.8163 34.2479 28.5714 38 33.9592 38C39.102 38 42.6939 34.4874 42.6939 29.458C42.6939 24.2689 39.0204 20.6765 33.7959 20.6765C31.2653 20.6765 29.1429 21.5546 27.5918 22.9118C28.1633 13.4916 34.6939 5.02941 44 1.83613L43.3469 0Z"
                                                    fill="white" fill-opacity="0.1" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="postbox-details__qoute-text">
                                        <p>For example, a work station with a good UX/UI design and
                                            AI-powered software can make it easier for employees to
                                            access important information.
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="postbox-details__text pt-20 pb-20">
                                <p>Additionally, AI-powered customer service can make it easier for employees to help
                                    customers and resolve issues. In conclusion, the intersection of UX/UI design, AI, and
                                    the modern work station is revolutionizing the way we work. By making the workplace more
                                    efficient, productive, and user-friendly, these three elements are helping to improve
                                    the overall work experience for employees and customers alike."</p>
                            </div>
                            <div class="tagcloud pb-35">
                                <a href="#">symphony</a>
                                <a href="#">nokia</a>
                                <a href="#">tech</a>
                                <a href="#">Samsung</a>
                                <a href="#">Alcatel</a>
                            </div>
                            <div class="postbox-details__author-info-box mb-95 p-relative">
                                <div class="postbox-details__author-wrap d-flex align-items-center">
                                    <div class="postbox-details__author-avata">
                                        <img src="assets/img/users/user24.jpg" alt="">
                                    </div>
                                    <div class="postbox-details__author-content">
                                        <h4>Alison Baker</h4>
                                        <p>Digital content wrangler I UX enthusiast I Recovering educator I <br>
                                            Shameless nerd & GIF connoisseur I Hockey fan.</p>
                                    </div>
                                </div>
                                <div class="postbox-details__author-social-wrap">
                                    <div class="postbox-details__author-social-link">
                                        <a href="#">
                                            <span>
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.7 0H5.6C4.67174 0 3.7815 0.368749 3.12513 1.02513C2.46875 1.6815 2.1 2.57174 2.1 3.5V5.6H0V8.4H2.1V14H4.9V8.4H7L7.7 5.6H4.9V3.5C4.9 3.31435 4.97375 3.1363 5.10503 3.00503C5.2363 2.87375 5.41435 2.8 5.6 2.8H7.7V0Z"
                                                        fill="currentcolor" fill-opacity="0.7" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#">
                                            <span>
                                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13 0.00594201C12.4341 0.405088 11.8076 0.71037 11.1445 0.910033C10.7887 0.500835 10.3157 0.210805 9.78961 0.0791711C9.26353 -0.0524632 8.7097 -0.0193515 8.20305 0.174028C7.69639 0.367408 7.26135 0.711725 6.95676 1.16041C6.65217 1.6091 6.49273 2.1405 6.5 2.68276V3.27367C5.46156 3.3006 4.43257 3.07029 3.50469 2.60325C2.5768 2.13622 1.77882 1.44695 1.18182 0.596851C1.18182 0.596851 -1.18182 5.91503 4.13636 8.27867C2.9194 9.10474 1.46968 9.51895 0 9.46049C5.31818 12.415 11.8182 9.46049 11.8182 2.66503C11.8176 2.50044 11.8018 2.33625 11.7709 2.17458C12.374 1.57982 12.7996 0.828909 13 0.00594201Z"
                                                        fill="currentcolor" fill-opacity="0.7" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.93792 3.78955C8.94295 3.78955 9.90682 4.1888 10.6175 4.89946C11.3282 5.61013 11.7274 6.574 11.7274 7.57903V12.0001H9.20108V7.57903C9.20108 7.24402 9.068 6.92273 8.83111 6.68584C8.59422 6.44896 8.27293 6.31587 7.93792 6.31587C7.60291 6.31587 7.28162 6.44896 7.04473 6.68584C6.80784 6.92273 6.67476 7.24402 6.67476 7.57903V12.0001H4.14844V7.57903C4.14844 6.574 4.54769 5.61013 5.25835 4.89946C5.96902 4.1888 6.93289 3.78955 7.93792 3.78955Z"
                                                        fill="currentcolor" fill-opacity="0.7" />
                                                    <path d="M2.52632 4.4209H0V11.9999H2.52632V4.4209Z" fill="currentcolor"
                                                        fill-opacity="0.7" />
                                                    <path
                                                        d="M1.26316 2.52632C1.96079 2.52632 2.52632 1.96079 2.52632 1.26316C2.52632 0.565536 1.96079 0 1.26316 0C0.565536 0 0 0.565536 0 1.26316C0 1.96079 0.565536 2.52632 1.26316 2.52632Z"
                                                        fill="currentcolor" fill-opacity="0.7" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="postbox__comment mb-95">
                                <h3 class="postbox__comment-title">3 Comments</h3>
                                <ul>
                                    <li>
                                        <div class="postbox__comment-box d-flex">
                                            <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/users/avata-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name">
                                                    <h5>Justin Case</h5>
                                                    <span class="post-meta"> April 8, 2024 at 7:38 am</span>
                                                </div>
                                                <p>Patient Comments are a collection of comments submitted by viewers in
                                                    <br> response to a question posed by a MedicineNet doctor.</p>
                                                <div class="postbox__comment-reply">
                                                    <a href="#">
                                                        <svg width="12" height="10" viewBox="0 0 14 10"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 1L1 5L5 9" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children">
                                        <div class="postbox__comment-box  d-flex">
                                            <div class="postbox__comment-info">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/users/user24.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name">
                                                    <h5>Farhan Firoz</h5>
                                                    <span class="post-meta"> July 14, 2022 at 9:58 am</span>
                                                </div>
                                                <p>Include anecdotal examples of your experience, or things you took notice
                                                    of that you feel others would find useful.</p>
                                                <div class="postbox__comment-reply">
                                                    <a href="#">
                                                        <svg width="12" height="10" viewBox="0 0 14 10"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 1L1 5L5 9" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="postbox__comment-box d-flex">
                                            <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/users/avata-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name">
                                                    <h5>Justin Case</h5>
                                                    <span class="post-meta"> May 12, 2024 at 4:38 pm</span>
                                                </div>
                                                <p>Patient Comments are a collection of comments submitted by viewers in
                                                    <br> response to a question posed by a MedicineNet doctor.</p>
                                                <div class="postbox__comment-reply">
                                                    <a href="#">
                                                        <svg width="12" height="10" viewBox="0 0 14 10"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 1L1 5L5 9" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="postbox__comment-form">
                                <h3 class="postbox__comment-form-title">Leave a Reply</h3>
                                <form action="#" class="box">
                                    <div class="row gx-20">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="postbox__comment-input mb-35">
                                                <input type="text" class="inputText" required>
                                                <span class="floating-label">Your Name</span>
                                                <span class="floating-label">Your Name</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="postbox__comment-input mb-35">
                                                <input type="text" class="inputText" required>
                                                <span class="floating-label">Your Email</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-input mb-20">
                                                <textarea class="textareaText" required></textarea>
                                                <span class="floating-label-2">Your Comment</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-agree">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I agree that my submitted data is being collected and stored.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-btn">
                                                <button type="submit" class="tp-btn-white-lg">
                                                    <span>
                                                        <i>Post comment</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar__wrapper tp-blog-sidebar-sticky pb-120">
                            <div class="sidebar__widget mb-60">
                                <div class="sidebar__widget-content">
                                    <h3 class="sidebar__widget-title">Search Here</h3>
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <div class="sidebar__search-input-2">
                                                <input type="text" placeholder="Search...">
                                                <button type="submit">
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.6 16.2C12.7974 16.2 16.2 12.7974 16.2 8.6C16.2 4.40264 12.7974 1 8.6 1C4.40264 1 1 4.40264 1 8.6C1 12.7974 4.40264 16.2 8.6 16.2Z"
                                                            stroke="currentcolor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.9984 17L15.3984 15.4" stroke="currentcolor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-60">
                                <h3 class="sidebar__widget-title">Category</h3>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li><a href="blog.html">Design<span>[7]</span></a></li>
                                        <li><a href="blog.html">Experience<span>[4]</span></a></li>
                                        <li><a href="blog.html">Uncategorized<span>[0]</span></a></li>
                                        <li><a href="blog.html">Digital<span>[3]</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-60">
                                <h3 class="sidebar__widget-title">Recent Post</h3>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post rc__post">
                                        <div class="rc__post mb-30 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.html"><img src="assets/img/blog/sidebar-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.html">Lazarev. got 3 CSS Design Awards</a>
                                                </h3>
                                                <div class="rc__meta d-flex align-items-center">
                                                    <span>DESIGN</span>
                                                    <span class="text-2"><i>.</i>Nov 14, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post mb-30 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.html"><img src="assets/img/blog/sidebar-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.html">Is Graphic Design a Talent or Skill?</a>
                                                </h3>
                                                <div class="rc__meta d-flex align-items-center">
                                                    <span>DESIGN</span>
                                                    <span class="text-2"><i>.</i>Nov 14, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-60">
                                <h3 class="sidebar__widget-title">Tags</h3>
                                <div class="sidebar__widget-content">
                                    <div class="tagcloud">
                                        <a href="#">symphony</a>
                                        <a href="#">nokia</a>
                                        <a href="#">tech</a>
                                        <a href="#">Samsung</a>
                                        <a href="#">Alcatel</a>
                                        <a href="#">mous</a>
                                        <a href="#">landing</a>
                                        <a href="#">Oppos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="postbox-details___related-post">
                                <h4 class="postbox-details___related-title">Related Aricles</h4>
                                <div class="postbox-details___related-post-box">
                                    <div class="postbox-details___related-content-wrap mb-30">
                                        <div class="row align-items-center">
                                            <div class="col-xl-7 col-lg-6">
                                                <h4 class="postbox-details___related-title-sm"><a
                                                        href="blog-details-2.html">16 witty tips to get six-figure clients
                                                        on Dribbble</a></h4>
                                            </div>
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="postbox-details___related-meta">
                                                    <div class="blog-list__meta-box text-start text-lg-end">
                                                        <span class="category">Branding</span>
                                                        <span>October 3, 2024</span>
                                                        <span>7 min read</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="postbox-details___related-thumb mb-80">
                                                <img data-speed="1.1" src="assets/img/blog/related-post.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="porfolio-details__navigation-wrap">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                        <div
                                                            class="porfolio-details__navigation-content text-center text-md-start">
                                                            <a href="#"><i
                                                                    class="fa-regular fa-arrow-left"></i><span>Preview</span></a>
                                                            <h4>UX in Ecommerce</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                        <div class="porfolio-details__navigation-bar text-center">
                                                            <a href="#">
                                                                <span>
                                                                    <svg width="22" height="22"
                                                                        viewBox="0 0 22 22" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.5"
                                                                            d="M1 5.21053C1 3.22567 1 2.23323 1.61662 1.61662C2.23323 1 3.22567 1 5.21053 1C7.19539 1 8.18782 1 8.80444 1.61662C9.42105 2.23323 9.42105 3.22567 9.42105 5.21053C9.42105 7.19539 9.42105 8.18782 8.80444 8.80444C8.18782 9.42105 7.19539 9.42105 5.21053 9.42105C3.22567 9.42105 2.23323 9.42105 1.61662 8.80444C1 8.18782 1 7.19539 1 5.21053Z"
                                                                            stroke="white" stroke-width="1.5" />
                                                                        <path opacity="0.5"
                                                                            d="M12.5781 16.7896C12.5781 14.8048 12.5781 13.8123 13.1947 13.1957C13.8114 12.5791 14.8038 12.5791 16.7887 12.5791C18.7735 12.5791 19.7659 12.5791 20.3826 13.1957C20.9992 13.8123 20.9992 14.8048 20.9992 16.7896C20.9992 18.7745 20.9992 19.7669 20.3826 20.3835C19.7659 21.0002 18.7735 21.0002 16.7887 21.0002C14.8038 21.0002 13.8114 21.0002 13.1947 20.3835C12.5781 19.7669 12.5781 18.7745 12.5781 16.7896Z"
                                                                            stroke="white" stroke-width="1.5" />
                                                                        <path
                                                                            d="M1 16.7896C1 14.8048 1 13.8123 1.61662 13.1957C2.23323 12.5791 3.22567 12.5791 5.21053 12.5791C7.19539 12.5791 8.18782 12.5791 8.80444 13.1957C9.42105 13.8123 9.42105 14.8048 9.42105 16.7896C9.42105 18.7745 9.42105 19.7669 8.80444 20.3835C8.18782 21.0002 7.19539 21.0002 5.21053 21.0002C3.22567 21.0002 2.23323 21.0002 1.61662 20.3835C1 19.7669 1 18.7745 1 16.7896Z"
                                                                            stroke="white" stroke-width="1.5" />
                                                                        <path
                                                                            d="M12.5781 5.21053C12.5781 3.22567 12.5781 2.23323 13.1947 1.61662C13.8114 1 14.8038 1 16.7887 1C18.7735 1 19.7659 1 20.3826 1.61662C20.9992 2.23323 20.9992 3.22567 20.9992 5.21053C20.9992 7.19539 20.9992 8.18782 20.3826 8.80444C19.7659 9.42105 18.7735 9.42105 16.7887 9.42105C14.8038 9.42105 13.8114 9.42105 13.1947 8.80444C12.5781 8.18782 12.5781 7.19539 12.5781 5.21053Z"
                                                                            stroke="white" stroke-width="1.5" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                        <div
                                                            class="porfolio-details__navigation-content next text-center text-md-end">
                                                            <a href="#"><span>Next</span><i
                                                                    class="fa-regular fa-arrow-right"></i></a>
                                                            <h4>Tiktok Ads</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->


    </main>
@endsection
