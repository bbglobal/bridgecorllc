@extends('layout.main')

@push('title')
    <title>Best IT Staffing Agencies | Staff Augmentation Services | Bridgecor LLC</title>
@endpush
@push('canonical')
    <link rel="canonical" href="https://bridgecorllc.com/government">
@endpush
@push('style')
    <link rel='stylesheet' id='elementor-post5300-css' href='/wp-content/uploads/elementor/css/post5300.css?ver=1710761128'
        type='text/css' media='all'>

    <style>
        .carousel-body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            height: 90vh;
        }

        .oakslider {
            position: relative;
            width: 100%;
            height: 100%;
            background: #22273C;
            color: #fff;
            overflow: hidden;
        }

        .oakslider__ui {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            height: 100%;
            display: flex;
            justify-content: space-between;
        }

        .oakslider__controls {
            display: flex;
            position: absolute;
            top: 12rem;
            right: 40rem;
        }

        .oakslider__arrow {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: 1px solid #fff;
            opacity: 0.5;
            background: #fff;
            margin-left: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            cursor: pointer;
        }

        .oakslider__nav {
            position: absolute;
            top: 3rem;
            left: 22rem;
        }

        .oakslider__navpoint {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-weight: 900;
        }

        .oakslider__navpoint:first-of-type .oakslider__timer {
            width: 95px;
        }

        .oakslider__navpoint:first-of-type .oakslider__label {
            opacity: 1;
        }

        .oakslider__label {
            opacity: 0;
            font-weight: 400;
        }

        .oakslider__timer {
            position: relative;
            width: 55px;
            height: 1px;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 5px;
            overflow: hidden;
        }

        .timer__progress {
            position: absolute;
            top: 0;
            left: 0;
            background: #fff;
            height: 1px;
            width: 100%;
            transform: translateX(-100%);
        }

        .oakslider__slide {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .slide--active {
            display: block;
        }

        .slide__image {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slide__image img {
            position: absolute;
            object-fit: cover;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5;
        }

        .slide__container {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide__content {
            padding-top: 100px;
            max-width: 1200px;
            width: 100%;
            font-family: sans-serif;
        }

        .slide__title {
            font-size: clamp(2rem, -0.8rem + 6.4vw, 4rem);
            max-width: 650px;
            line-height: 1.2;
            font-weight: 600;
        }

        .slide__link {
            margin-top: 25px;
        }

        .uk-section-primary {
            margin-top: 0px !important;
        }
    </style>
@endpush

@section('main-section')
    <section class="carousel-body">
        <div class="oakslider">
            <div class="oakslider__ui">
                <div class="oakslider__nav">
                    <div class="oakslider__navpoint">01
                        <div class="oakslider__timer">
                            <div class="timer__progress"></div>
                        </div>
                        <span class="oakslider__label">Bridgecor LLC</span>
                    </div>
                    <div class="oakslider__navpoint">02 <div class="oakslider__timer">
                            <div class="timer__progress"></div>
                        </div>
                        <span class="oakslider__label">Bridgecor LLC</span>
                    </div>
                    <div class="oakslider__navpoint">03 <div class="oakslider__timer">
                            <div class="timer__progress"></div>
                        </div>
                        <span class="oakslider__label">Bridgecor LLC</span>
                    </div>
                    <div class="oakslider__navpoint">04 <div class="oakslider__timer">
                            <div class="timer__progress"></div>
                        </div>
                        <span class="oakslider__label">Bridgecor LLC</span>
                    </div>
                    <div class="oakslider__navpoint">05 <div class="oakslider__timer">
                            <div class="timer__progress"></div>
                        </div>
                        <span class="oakslider__label">Bridgecor LLC</span>
                    </div>
                </div>
                <div class="oakslider__controls">
                    <div class="oakslider__arrow oakslider__arrow--left oakslider__prev">
                        <</div>
                            <div class="oakslider__arrow oakslider__arrow--right oakslider__next">></div>
                    </div>
                </div>

                <div class="oakslider__slider">
                    <div class="oakslider__slide slide--active" data-slide="1">
                        <div class="slide__image"><img
                                src="../wp-content/uploads/2024/03/pexels-joseph-redfield-10755266-720p_13.jpeg"
                                alt=""></div>
                        <div class="slide__container">
                            <div class="slide__content">
                                <div class="slide__title">Fearlessly Tackling Complex <span class="text--highlight">
                                        Cybersecurity Hurdles
                                    </span>
                                </div>
                                <!-- <div class="slide__link">Learn more about their approach</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="oakslider__slide" data-slide="2">
                        <div class="slide__image"><img src="../wp-content/uploads/2024/03/man-near-window-08-1-scaled.jpg"
                                alt=""></div>
                        <div class="slide__container">
                            <div class="slide__content">
                                <div class="slide__title">Precision Recruitment:<span class="text--highlight">Tailored
                                        Talent Solutions with Expertise and
                                        Efficiency.
                                        lazy dog</span></div>
                                <!-- <div class="slide__link">Learn more about their approach</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="oakslider__slide" data-slide="3">
                        <div class="slide__image"><img src="../wp-content/uploads/2024/03/man-near-window-09-1-scaled.jpg"
                                alt="">
                        </div>
                        <div class="slide__container">
                            <div class="slide__content">
                                <div class="slide__title">Bridging Talent, Breaking Barriers:<span
                                        class="text--highlight">Paving the Way for Diversity, Equality, and Success in the
                                        Workplace.</span></div>
                                <!-- <div class="slide__link">Learn more about their approach</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="oakslider__slide" data-slide="4">
                        <div class="slide__image"><img src="../wp-content/uploads/2024/03/image-43.webp" alt="">
                        </div>
                        <div class="slide__container">
                            <div class="slide__content">
                                <div class="slide__title">Precision Recruitment: <span class="text--highlight">Tailored
                                        Talent Solutions with Expertise and
                                        Efficiency.</span></div>
                                <!-- <div class="slide__link">Learn more about their approach</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="oakslider__slide" data-slide="5">
                        <div class="slide__image"><img src="../wp-content/uploads/2024/03/man-near-window-06-1-scaled.jpg"
                                alt="">
                        </div>
                        <div class="slide__container">
                            <div class="slide__content">
                                <div class="slide__title">Bridging Inclusion, Honoring Veterans: <span
                                        class="text--highlight">Unleashing IT Excellence Together </span></div>
                                <!-- <div class="slide__link">Learn more about their approach</div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="diversity"
        class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f7502d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        style="left: 0">
        <div class="elementor-container elementor-column-gap-no">
            <h2>Bridging Excellence for Public Service</h2>

            <p>At Bridgecor, we take immense pride in our affiliation with both local and federal governments, a
                testament to our unwavering dedication to excellence in staffing solutions. Our unique approach
                extends beyond traditional recruitment, especially when it comes to government placements, where
                precision, expertise, and a commitment to diversity matter most.
            </p>
        </div>
    </section>

    <section id="culture"
        class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f7502d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-no">
            <h2>Local and Fedral Patnership</h2>

            <p>Our government affiliation endorsement speaks volumes about our dedication to serving both local
                and
                federal entities. Whether you're a municipal office looking for U.S. local talent or a federal
                agency seeking top-tier candidate, we bring a unique approach that ensures the right fit for
                your
                specific requirements.</p>
        </div>
    </section>

    <section id="premier"
        class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f7502d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-no">
            <h2>Unique Approach for Veteran Applicants:</h2>

            <p>At Bridgecor, we understand the importance of a unique approach, especially when it comes to
                veteran
                applicants. Veterans bring a distinct set of skills, leadership qualities, and camaraderie to
                the
                workplace. Our specialized approach ensures that we connect you with top-tier veteran candidate
                who
                not only meet but exceed your expectations.</p>
        </div>
    </section>

    <section id="talent"
        class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f7502d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-no er" style="flex-direction: column;">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <ul>
                    <h2>NAICSCODES:</h2>

                    <li>561311- Employment Placement Agencies</li>
                    <li>541490 - Other Specialized Design Services</li>
                    <li>611430 - Professional and Management Development Training</li>
                    <li>561410 - Document Preparation Services</li>
                    <li>561410- Human Resources Consulting Services</li>
                    <li>561312- Executive Search Services</li>
                    <li>541214- Payroll Services</li>
                    <li>541611- Administrative Management and General Management Consulting Services</li>
                    <li>561110- Office Administrative Services</li>
                </ul>
                <ul>
                    <li>561320 - Temporary Help Services</li>
                    <li>561990 - All Other Support Services</li>
                    <li>927110- Space Research and Technology</li>
                    <li>541330 - Engineering Services</li>
                    <li>541690- Other Scientific and Technical Consulting Services</li>
                    <li>541990- All Other Professional, Scientific, and Technical Services</li>
                    <li>541512 - Computer Systems Design Services</li>
                </ul>
            </div>

            <h2 style="margin: 10px auto;">Embark On Your Talent Journey Today​</h2>
            <p>Whether you're seeking exceptional professionals for your team or exploring rewarding career
                opportunities, the Bridgecor team is poised to guide you toward success.</p>

            <figure style="margin: 20px auto; text-align: center;">
                <img src="../wp-content/uploads/2024/03/cve_completed_s-removebg-preview.png" alt="image"
                    width="40%">
            </figure>

            <div style="text-align: center;">
                <a href="../wp-content/uploads/2024/02/BRIDGECOR-CAPABILITY-STATEMENT-1.pdf" class="elementor-button"
                    target="_blank">CAPABILITY STATEMENT</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        /* www.oakdigital.dk */

        var oakSlider = {

            /*------------------------------------------------
            # Slider Settings
            ------------------------------------------------*/
            settings: {
                currentSlide: 1,
                totalSlides: 0,
                animating: false,
                autoPlay: true,
                autoPlaySpeed: 8,
                transitionSpeed: 2.75,
                autoPlayInterval: false,
                ease: 'expo',
                timeline: gsap.timeline({}),
                imageScale: '',
                controls: {
                    next: document.querySelector('.oakslider__next'),
                    prev: document.querySelector('.oakslider__prev'),
                    nav: document.querySelectorAll('.oakslider__navpoint'),
                }
            },

            /*------------------------------------------------
            # Initiate Slider
            ------------------------------------------------*/
            init: function() {
                this.settings.totalSlides = document.querySelectorAll('.oakslider__slide').length;
                this.settings.controls.prev.addEventListener('click', () => {
                    this.stopAutoPlay();
                    this.changeSlide('prev');
                });
                this.settings.controls.next.addEventListener('click', () => {
                    this.stopAutoPlay();
                    this.changeSlide('next');
                });
                this.settings.controls.nav.forEach((el, key) => {
                    el.addEventListener('click', () => {
                        this.stopAutoPlay();
                        this.jumpToSlide(key + 1);
                    });
                });

                this.settings.imageScale = gsap.to('.slide--active .slide__image img', 15, {
                    scale: 1.1,
                    ease: "sine.inOut",
                    yoyo: true,
                    yoyoEase: true,
                    repeat: -1
                });

                if (this.settings.autoPlay) {
                    this.autoPlay();
                }
            },

            /*------------------------------------------------
            # Change Slide
            ------------------------------------------------*/
            changeSlide: function(dir) {
                console.log(this.settings.animating);
                if (this.settings.animating) return;
                let animateFrom = this.settings.currentSlide;
                if (dir === 'next') {
                    if (this.settings.currentSlide >= this.settings.totalSlides) {
                        this.settings.currentSlide = 1;
                    } else {
                        this.settings.currentSlide++;
                    }
                } else {
                    if (this.settings.currentSlide <= 1) {
                        this.settings.currentSlide = this.settings.totalSlides;
                    } else {
                        this.settings.currentSlide--;
                    }
                }
                this.slideAnimation(animateFrom, this.settings.currentSlide, dir);
            },

            /*------------------------------------------------
            # Slide Navigation
            ------------------------------------------------*/
            jumpToSlide: function(slide) {
                if (this.settings.animating || slide === this.settings.currentSlide) return;
                let animateFrom = this.settings.currentSlide;
                this.settings.currentSlide = slide;
                if (slide > animateFrom) {
                    dir = 'next';
                } else {
                    dir = 'prev';
                }

                this.slideAnimation(animateFrom, this.settings.currentSlide, dir);
            },

            /*------------------------------------------------
            # Autoplaying
            ------------------------------------------------*/
            autoPlay: function() {
                this.settings.autoPlay = true;

                let el = this.settings.controls.nav[this.settings.currentSlide - 1].children[0].children[0];
                this.settings.timeline.fromTo(el, this.settings.autoPlaySpeed - this.settings.transitionSpeed, {
                    x: '-100%'
                }, {
                    x: 0,
                    ease: 'none',
                    delay: 0.5,
                    onComplete: () => {
                        this.changeSlide('next');
                    }
                });
            },

            stopAutoPlay: function() {
                if (this.settings.autoPlay) {
                    this.settings.timeline.progress(100);
                }
                this.settings.autoPlay = false;
            },

            /*------------------------------------------------
            # Update Nav
            ------------------------------------------------*/
            updateNav: function(from, to) {
                gsap.to(this.settings.controls.nav[from - 1].children[0], this.settings.transitionSpeed, {
                    width: 55,
                    ease: this.settings.ease + '.inOut',
                });
                gsap.to(this.settings.controls.nav[from - 1].children[1], this.settings.transitionSpeed, {
                    opacity: 0,
                    ease: this.settings.ease + '.inOut',
                });
                gsap.to(this.settings.controls.nav[to - 1].children[0], this.settings.transitionSpeed, {
                    width: 95,
                    ease: this.settings.ease + '.inOut',
                });
                gsap.to(this.settings.controls.nav[to - 1].children[1], this.settings.transitionSpeed, {
                    opacity: 1,
                    ease: this.settings.ease + '.inOut',
                });
                gsap.to(this.settings.controls.nav[from - 1].children[0].children[0], this.settings
                    .transitionSpeed, {
                        x: '100%',
                        ease: this.settings.ease + '.inOut'
                    });
            },

            /*------------------------------------------------
            # Slide Animation
            ------------------------------------------------*/
            slideAnimation: function(from, to, dir) {
                this.settings.animating = true;

                console.log(this.settings.animating);

                this.updateNav(from, to);

                from = '.oakslider__slide[data-slide="' + from + '"]';
                to = '.oakslider__slide[data-slide="' + to + '"]';

                this.settings.timeline.clear();
                this.settings.timeline.play(0);

                this.settings.timeline.set(to, {
                        display: 'block',
                    })
                    .to(from + ' .slide__content *', (this.settings.transitionSpeed / 100) * 40, {
                        y: -20,
                        opacity: 0,
                        ease: this.settings.ease + '.in',
                        stagger: 0.1,
                    }, 'slideAnimation')
                    .fromTo(to + ' .slide__content *', (this.settings.transitionSpeed / 100) * 40, {
                        y: 20,
                        opacity: 0,
                    }, {
                        y: 0,
                        opacity: 1,
                        ease: 'Power3.out',
                        stagger: 0.1,
                    }, '>0.5')
                    .fromTo(from + ' .slide__image', this.settings.transitionSpeed, {
                        display: 'block',
                        x: '0%',
                    }, {
                        x: dir === 'next' ? '-100%' : '100%',
                        ease: this.settings.ease + '.inOut',
                    }, 'slideAnimation')
                    .fromTo(from + ' .slide__image img', this.settings.transitionSpeed, {
                        transformOrigin: 'center',
                        x: '0%',
                    }, {
                        x: dir === 'next' ? '50%' : '-50%',
                        ease: this.settings.ease + '.inOut',
                    }, 'slideAnimation')
                    .fromTo(to + ' .slide__image img', this.settings.transitionSpeed, {
                        transformOrigin: 'center',
                        x: dir === 'next' ? '-50%' : '50%',
                    }, {
                        x: '0%',
                        ease: this.settings.ease + '.inOut',
                    }, 'slideAnimation')
                    .fromTo(to + ' .slide__image', this.settings.transitionSpeed, {
                        display: 'block',
                        transformOrigin: 'right center',
                        x: dir === 'next' ? '100%' : '-100%',
                    }, {
                        x: '0%',
                        ease: this.settings.ease + '.inOut',
                        onComplete: () => {
                            this.settings.animating = false;
                            gsap.set(from, {
                                display: 'none'
                            });
                            this.settings.imageScale.kill();
                            gsap.set(from + ' .slide__image', {
                                scale: 1
                            });
                            this.settings.imageScale = gsap.to(to + ' .slide__image img', 15, {
                                scale: 1.1,
                                ease: "sine.inOut",
                                yoyo: true,
                                yoyoEase: true,
                                repeat: -1
                            });
                        }
                    }, 'slideAnimation');

                if (this.settings.autoPlay) {
                    let el = this.settings.controls.nav[this.settings.currentSlide - 1].children[0].children[0];
                    this.settings.timeline.fromTo(el, this.settings.autoPlaySpeed - this.settings.transitionSpeed, {
                        x: '-100%'
                    }, {
                        x: 0,
                        ease: 'none',
                        onComplete: () => {
                            this.changeSlide('next');
                        }
                    }, '>');
                }



            },

        };


        oakSlider.init();
    </script>
@endsection
