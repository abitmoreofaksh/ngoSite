<?php include "includes/header.php"; ?>
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .imc {
        height: 95px;
        width: 180px;
        object-fit: cover;
    }

    .marquee {
        --duration: 60s;
        --space: 2rem;
        --gap: var(--space);

        display: flex;
        overflow: hidden;
        user-select: none;
        gap: var(--gap);
    }

    .marquee__group {
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: var(--gap);
        min-width: 100%;
        animation: scroll var(--duration) linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .marquee__group {
            animation-play-state: paused;
        }
    }

    .marquee__group img {
        max-width: clamp(10rem, 1rem + 28vmin, 20rem);
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 1rem;
    }

    .marquee__group p {
        background-image: linear-gradient(75deg,
                hsl(240deg 70% 49%) 0%,
                hsl(253deg 70% 49%) 11%,
                hsl(267deg 70% 49%) 22%,
                hsl(280deg 71% 48%) 33%,
                hsl(293deg 71% 48%) 44%,
                hsl(307deg 71% 48%) 56%,
                hsl(320deg 71% 48%) 67%,
                hsl(333deg 72% 48%) 78%,
                hsl(347deg 72% 48%) 89%,
                hsl(0deg 73% 47%) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .marquee--borders {
        border-block: 3px solid dodgerblue;
        padding-block: 0.75rem;
    }

    .marquee--reverse .marquee__group {
        animation-direction: reverse;
        animation-delay: calc(var(--duration) / -2);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-100% - var(--gap)));
        }
    }
</style>




<!-- ******************** Slider Starts Here ******************* -->
<div class="slider">
    <!-- Set up your HTML -->
    <!-- <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Most Stylish Free Travel Website</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Most Attractive Travel Template</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    <video autoplay muted loop class="bg-video w-100">
        <source src="videos/hello.mp4" type="video/mp4">
    </video>

</div>

<!--  ************************* About Us Starts Here ************************** -->

<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our NGO</h2>
                <p>Hamari Pahchan is a Delhi based NGO that aids the marginalized in our society.
                    We provide various opportunities to underprivileged people so they can create their own Pahchan
                    (identity).</p>
                <p> Our focus spans over multiple areas like education, menstrual health awareness,
                    unemployment, and hunger. Since its inception in 2015, we have helped educate 11250+
                    children, helped 2000+ women with employment opportunities, distributed 10,000+ menstrual
                    hygiene kits,
                    and 1500+ corona kits.</p>

                <p>Our relentless efforts have helped us in becoming one of the best NGOs in Delhi.
                    Our projects like the <strong>Drishti
                        Project</strong> (Educating Children), <strong>Sukhad Project</strong>
                    (Awareness
                    regarding menstrual hygiene for women, distribution of health kit), <strong>Skill Development
                    </strong>(Providing
                    employment opportunities to the underprivileged), and initiatives like COVID-19 aid, have proved
                    immensely beneficial to a lot of people. Our team works with a will to elevate people’s lives,
                    fulfill
                    their dreams and make them self-reliant which will further accelerate national growth and push
                    the Atma
                    Nirbharta initiative to new heights.</p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                            <i class="fas fa-user"></i>
                            <p>Become a Volunteer</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-search-dollar red"></i>
                            <p>Invest In Hope</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-donate yell"></i>
                            <p>Give Donation</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>Our Achievemtns in Numbers</h2>
                <p>We can talk for a long time about advantages of our Dental clinic before other medical
                    treatment
                    facilities.
                    But you can read the following facts in order to make sure of all pluses of our clinic:</p>
            </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>12+</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>1812+</h3>
                    <span>HAPPY CHILDRENS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>52+</h3>
                    <span>EVENTS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>48+</h3>
                    <span>FUNT RAISED</span>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- ################# Mission Vision Start Here #######################--->

<section class="container mission-vision">
    <!-- <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et
                        elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio
                        scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius
                        eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse
                        hendrerit ultrices mauris.</p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="assets/images/misin.jpg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img src="assets/images/vision.jpg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Our Vision</h1>
                    <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl
                        ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper,
                        scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique
                        dui.</p>
                </div>
            </div>
        </div> -->
    <div class="session-title row">
        <h2>Our Work</h2>
        <p>Spreading Smiles with the little ones</p>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/images/slider/slider-1.jpg" /></div>
            <div class="swiper-slide"><img src="assets/images/slider/slider-4.jpg" /></div>
            <div class="swiper-slide"><img src="assets/images/slider/slider-5.jpg" /></div>
            <div class="swiper-slide"><img src="assets/images/slider/slider-6.jpg" /></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
        <div class="session-title row">
            <h2>Our Projects</h2>
            <p>We are a non-profital & Charity raising money for child education</p>
        </div>
        <div class="event-ro row">
            <div class="col-md-6 col-sm-6">
                <div class="event-box">
                    <img src="assets/images/events/image_08.jpg" alt="">
                    <h4>Drishti</h4>

                    <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                    <p class="desic">It primarily aims to deliver Drishti Classes with the aid of the internet and
                        gadgets in order to improve a child’s learning experience. </p>
                    <button class="btn btn-success btn-sm">Learn More</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="event-box">
                    <img src="assets/images/events/image_06.jpg" alt="">
                    <h4>Sukhad</h4>
                    <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                    <p class="desic">As of now, we have been able to conduct 500+ sanitary pad distribution drives
                        along with severalsurveys and informative workshops where we educate menstruators about safe
                        periods.</p>
                    <button class="btn btn-success btn-sm">Learn More</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="event-box">
                    <img src="assets/images/events/image_04.jpg" alt="">
                    <h4>Social Entrepreneurship</h4>
                    <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                    <p class="desic">We at Hamari Pahchan have opened our doors to all the young minds who would
                        like to explore the social welfare arena. </p>
                    <button class="btn btn-success btn-sm">Learn More</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="event-box">
                    <img src="assets/images/events/image_04.jpg" alt="">
                    <h4>MALNUTRITION</h4>
                    <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                    <p class="desic">Poverty and hunger are some of the deep rooted issues that our society has been
                        dealing with for quite some time now. </p>
                    <button class="btn btn-success btn-sm">Learn More</button>
                </div>
            </div>
            <!-- <div class="col-md-6 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Skill Development</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Our project that empowers the underprivileged earn a livelihood. </p>
                        <button class="btn btn-success btn-sm">Learn More</button>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<section class="container mission-vision">
    <div class="session-title row">
        <h2>What Are People Saying About Us</h2>
        <p>We are happy if you are satisfied with our
            service and welfare of the society, let's read pure
            reviews from our supporters who brings smile on
            many faces.</p>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote class=" ">

                            <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean
                                sit amet felis dolor, in sagittis nisi.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>

                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote class=" ">

                            <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean
                                sit amet felis dolor, in sagittis nisi.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>

                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote class=" ">

                            <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean
                                sit amet felis dolor, in sagittis nisi.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>

                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote class=" ">

                            <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean
                                sit amet felis dolor, in sagittis nisi.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>

                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote class=" ">

                            <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean
                                sit amet felis dolor, in sagittis nisi.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>



</section>
<!-- ################# Charity Number Starts Here#######################--->
<!-- <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievemtns in Numbers</h2>
                    <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment
                        facilities.
                        But you can read the following facts in order to make sure of all pluses of our clinic:</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!--################### Our Team Starts Here #######################--->
<!-- <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut
                    est arcu. Donec hendrerit velit</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>CEO </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>CFO</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Team Leader</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Project Manager</i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> -->
<!-- ################# Our Blog Starts Here#######################--->
<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2> Our Blog </h2>
            <p>Know more about us</p>
        </div>
        <div class="blog-row row">
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="assets/images/events/image_01.jpg" alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By Admin | August 10 2018</small>
                        <h4>Methods of Recuirtments</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit
                            amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at,
                            sagittis quis neque. Praesent.</p>
                        <div class="link">
                            <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="assets/images/events/image_02.jpg" alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By Admin | August 10 2018</small>
                        <h4>Methods of Recuirtments</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit
                            amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at,
                            sagittis quis neque. Praesent.</p>
                        <div class="link">
                            <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="assets/images/events/image_03.jpg" alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By Admin | August 10 2018</small>
                        <h4>Methods of Recuirtments</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit
                            amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at,
                            sagittis quis neque. Praesent.</p>
                        <div class="link">
                            <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<div class="marquee">
    <div class="marquee__group">
        <img src='assets/images/slider/35.png' alt=''>
        <img src='assets/images/slider/36.png' alt=''>
        <img src='assets/images/slider/37.png' alt=''>
        <img src='assets/images/slider/38.png' alt=''>

    </div>

    <div aria-hidden="true" class="marquee__group">
        <img src='assets/images/slider/35.png' alt=''>
        <img src='assets/images/slider/36.png' alt=''>
        <img src='assets/images/slider/37.png' alt=''>
        <img src='assets/images/slider/38.png' alt=''>

    </div>
</div>
<?php include "includes/footer.php"; ?>