@extends('layouts.website.layout-website')
@section('content')
<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home_container container grid">
            <div class="home_img">
                {{-- <img src="../../template/assets/img/home.png" alt=""> --}}
                <img src="{{ isset($about->banner_image) ? asset('storage/images/' . $about->banner_image) : asset('storage/images/no-image.png') }}"
                    alt="">
            </div>

            <div class="home_data">
                <h1 class="home_title">Hi, I'am {{ $about->name }}</h1>
                <h3 class="home_subtitle">{{ $about->tagline }}</h3>
                <p class="home_description">
                    {{ $about->summary }}
                </p>
                <a href="#contact" class="button button--flex">
                    Contact Me <i class="uil uil-message button__icon"></i>
                </a>
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button--flex"></a>
                    <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                    <span class="home_scroll-name">Scroll down</span>
                    <i class="uil uil-arrow-down home_scroll-arrow"></i>
                </div>
                <div class="home_social">
                    <span class="home_social-follow">Follow Me</span>
                    <div class="home_social-links">
                        <a href="https://www.linkedin.com/in/boris-aubin-simo-26b9a0369" target="_blank"
                            class="home_social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>
                        <a href="https://www.github.com/boris2442" target="_blank" class="home_social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>
                </div>

                <div class="home_scroll_social">
                    <div class="home_scroll1">
                        <a href="#about" class="home_scroll-button button--flex"></a>
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </div>
                    <div class="home_social1">
                        <div class="home_social-link">
                            <a href="https://www.linkedin.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="https://www.github.com/boris2442" target="_blank" class="home_social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My introduction</span>

        <div class="about_container container grid">
            {{-- <img src="../../template/assets/img/about-img.png" alt="" class="about_img"> --}}
            <img src="{{ isset($about->home_image) ? asset('storage/images/' . $about->home_image) : asset('storage/images/no-image.png') }}"
                alt="" class="about_img">

            <div class="about_data">
                <p class="about_description">
                    {{ $about->description }}
                </p>
                <div class="about_info">
                    <div>
                        <span class="about_info-title">08+</span>
                        <span class="about_info-name">Years <br>experience</span>
                    </div>
                    <div>
                        <span class="about_info-title">25+</span>
                        <span class="about_info-name">Completed <br>project</span>
                    </div>
                    <div>
                        <span class="about_info-title">04+</span>
                        <span class="about_info-name">Companies <br>worked</span>
                    </div>
                </div>
                <div class="about_buttons">
                    <a href="../../template/assets/pdf/johndoe-Cv.pdf" class="button button--flex">
                        Download CV <i class="uil uil-download-alt button_icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical lever</span>

        <div class="skills_container container grid">
            <div>
                <!--=========== SKILL 1 ============-->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-brackets-curly skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Frontend developer</h1>
                            <span class="skills_subtitle">More than 4 years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_html"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_css"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_javascript"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=========== SKILL 2 ============-->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-server-network skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Backend developer</h1>
                            <span class="skills_subtitle">More than 7 years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_php"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Node J6</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_nodejs"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_python"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Ruby</h3>
                                <span class="skills_number">55%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_ruby"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!--=========== SKILL 3 ============-->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-server-network skills_icon"></i>

                        <div>
                            <h1 class="skills_title">Designer</h1>
                            <span class="skills_subtitle">More than 5 years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Figma</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_figma"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Sketch</h3>
                                <span class="skills_number">85%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_sketch"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Adobe XD</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_adobexd"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Photoshop</h3>
                                <span class="skills_number">85%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_photoshop"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journel</span>

        <div class="qualification_container container">
            <div class="qualification_tabs">
                <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                    <i class="uil uil-graduation-cap qualification_icon"></i>
                    Education
                </div>
                <div class="qualificaction_button button--flex" data-target="#work">
                    <i class="uil uil-briefcase-alt qualification-icon"></i>
                    Work
                </div>
            </div>

            <div class="qualification_sections">
                <!--========== QUALIFICATION CONTENT 1 ==========-->
                <div class="qualification_content qualification_active" data-content id="education">
                    @foreach($educations as $education)
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">{{$education->departement}}</h3>
                            <span class="qualification_subtitle">{{$education->institution}}</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                {{$education->period}}
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    @endforeach
                  

                </div>
                <!--========== QUALIFICATION CONTENT 2 ==========-->
                <div class="qualification_content" data-content id="work">
                    <!--============= QUALIFICATION 1 ===========-->
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Software Enginner</h3>
                            <span class="qualification_subtitle">Apple Inc - Germany</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2016 - 2018
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>
                    <!--============= QUALIFICATION 2 ===========-->
                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>

                        <div>
                            <h3 class="qualification_title">Frontend Developer</h3>
                            <span class="qualification_subtitle">Apple Inc - Germany</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2018 - 2020
                            </div>
                        </div>

                    </div>
                    <!--============= QUALIFICATION 3 ===========-->
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Ui Designer</h3>
                            <span class="qualification_subtitle">Figma - Germany</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2017 - 2019
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder"></span>
                            <!--<span class="qualification_line"></span>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">What is offer</span>

        <div class="services_container container grid">
            <!--============== SERVICES 1 =============-->
            @foreach ($services as $service)
            <div class="services_content">
                <div>
                    <i class="uil uil-web-grid services_icon"></i>
                 
                    <h3 class="services_title">{{ $service->title }}</h3>
                </div>
                <span class="button button--flex button--small button--link services_button">
                    View More
                    <i class="uil uil-arrow-right button_icon"></i>
                </span>

                <div class="services_modal ">
                    <div class="services_modal-content">
                        {{-- <h4 class="services_modal-title">UI/UX <br> Designer</h4> --}}
                        <h4 class="services_modal-title">{{ $service->title }}</h4>
                        <i class="uil uil-times services_modal-close"></i>

                        <ul class="services_modal-services grid">
                            
                            <p>{{ $service->description }}</p>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach



            

            
        </div>
    </section>

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">Most recent work</span>

        <div class="portfolio_container container swiper-container">
            <div class="swiper-wrapper">
                <!--============ PORTFOLIO 1 ==============-->
                <div class="portfolio_content grid swiper-slide">
                    <img src="{{ asset('template/assets/img/portfolio1.jpeg') }}" alt="" class="portfolio_img">

                    <div class="portfolio_data">
                        <h3 class="portfolio_title">Modern Website</h3>
                        <p class="portfolio_description">
                            Website adaptable to all devices,with ui description
                            and animated interactions.
                        </p>
                        <a href="#" class="button button--flex button--small portfolio_button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                </div>
                <!--============ PORTFOLIO 2 ==============-->
                <div class="portfolio_content grid swiper-slide">
                    <img src="{{ asset('template/assets/img/portfolio2.jpeg') }}" alt="" class="portfolio_img">

                    <div class="portfolio_data">
                        <h3 class="portfolio_title">POS App</h3>
                        <p class="portfolio_description">
                            POS App description
                        </p>
                        <a href="#" class="button button--flex button--small portfolio_button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                </div>
                <!--============ PORTFOLIO 3 ==============-->
                <div class="portfolio_content grid swiper-slide">
                    <img src="{{ asset('template/assets/img/portfolio3.jpeg') }}" alt="" class="portfolio_img">

                    <div class="portfolio_data">
                        <h3 class="portfolio_title">Online Store</h3>
                        <p class="portfolio_description">
                            Website adaptable to all devices,with ui description
                            and animated interactions.
                        </p>
                        <a href="#" class="button button--flex button--small portfolio_button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!--Add Arrow-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>
            <!--Add Pagination-->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">
        <div class="project_bg">
            <div class="project_container container grid">
                <div class="project_data">
                    <h2 class="project_title">You have new project</h2>
                    <p class="project_description">Contact me now and get a 50% discounted</p>
                    <a href="#contact" class="button button--flex button--white">
                        Contact Me
                        <i class="uil uil-message project_icon button_icon"></i>
                    </a>
                </div>

                <img src="{{ asset('template/assets/img/home.png') }}" alt="" class="project_img">
            </div>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
        <h2 class="section__title">Testimonial</h2>
        <span class="section__subtitle">My client saying</span>

        <div class="testimonial_container container swiper-container">
            <div class="swiper-wrapper">
                <!--========= TESTIMONIAL 1 ==========-->
                @foreach($testimonials as $testimonial)
                <div class="testimonial_content swiper-slide">
                    <div class="testimonial_data">
                        <div class="testimonial_header">
                            <img src="{{ $testimonial->image ? asset($testimonial->image) : asset('template/assets/img/testimonial2.jpg') }}"
                                alt="image de {{ $testimonial->name }}" class="testimonial_img object-cover" />


                            <div>
                                <h3 class="testimonial_name">{{$testimonial->name}}</h3>
                                <span class="testimonial_client">{{$testimonial->function}}</span>
                            </div>
                        </div>

                        <div>
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <i class="uil uil-star testimonial_icon-star text-yellow-500"></i>
                                @endfor
                        </div>

                    </div>
                    <p class="testimonial_description">
                        {{$testimonial->testimony}}
                    </p>
                </div>
                @endforeach
               

            </div>
            <!--Add Pagination-->
            <div class="swiper-pagination swiper-pagination-testimonial"></div>
        </div>
    </section>

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact_container container grid">
            <div>
                <div class="contact_information">
                    <i class="uil uil-phone contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Call Me</h3>
                        <span class="contact_subtitle">{{ $about->phone }}</span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-envelope contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Email</h3>
                        <span class="contact_subtitle">{{ $about->email }}</span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-map-marker contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Location</h3>
                        <span class="contact_subtitle">{{ $about->adress }}</span>
                    </div>
                </div>
            </div>

            <form action="{{ route('home.store') }}" class="contact_form grid" method="post">
                @csrf
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="" class="contact_label">Name</label>
                        <input type="text" class="contact_input" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Email</label>
                        <input type="email" class="contact_input" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="contact_content">
                    <label for="" class="contact_label">Project</label>
                    <input type="tetx" class="contact_input" name="project" value="{{ old('project') }}"> 
                </div>
                <div class="contact_content">
                    <label for="description" class="contact_label">Project description</label>
                    <textarea name="description" id="description" cols="0" rows="7" class="contact_input">{{old('description')}}</textarea>
                </div>
                <div>
                    <button  type="submit" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button_icon"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection