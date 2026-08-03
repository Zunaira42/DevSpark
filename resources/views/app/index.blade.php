@extends('app.layouts.app')
@section('content')


<body class="index-page">
    <section id="hero" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Discover And Find <br> Of Your Own Fashion</h1>
                    <p>
                        Welcome to <strong>DevSpark</strong> – your digital shopping hub.<br>
                        Discover the latest products at unbeatable prices.<br>
                        Fast delivery, secure checkout, and top service.<br>
                        We bring value and innovation to your screen.<br>
                        Shop smart. Shop easy. Only at DevSpark.
                    </p>

                    <a href="{{ route('products') }}" class="btn btn-get-started mt-3">
                        View Products
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/girl-bg.png') }}" class="hero-img" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <section id="best-seller" class="best-seller py-5">
        <div class="container">
            <div class="row">
                <div class="container section-title text-center">
                    <h2>Best Sellings</h2>
                    <p>Choose Your Products</p>
                </div>

                <div class="col-12">
                    <div class="swiper bestSellerSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img.png') }}" alt="Best selling product">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img2.png') }}" alt="Best selling product">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img3.png') }}" alt="Best selling product">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img.png') }}" alt="Best selling product">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img2.png') }}" alt="Best selling product">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider-box-product">
                                    <img src="{{ asset('assets/img/slider-img3.png') }}" alt="Best selling product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section id="products-cards" class="products-cards section">

        <div class="container section-title">
            <h2>Products</h2>
            <p>Choose Your Products</p>
        </div>

        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column h-100 gap-3">
                        <div class="products-card flex-fill" style="height: 50%;">
                            <div class="products-image h-100">
                                <img src="assets/img/shoes.jpg" class="img-fluid w-100 h-100 object-fit-cover">
                                <img src="assets/img/ear-rings.jpg" class="hover-img w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="products-card flex-fill" style="height: 50%;">
                            <div class="products-image h-100">
                                <img src="assets/img/necklace.jpg" class="img-fluid w-100 h-100 object-fit-cover">
                                <img src="assets/img/make.jpg" class="hover-img w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="products-card h-100">
                        <div class="products-image h-100">
                            <img src="assets/img/studs.jpg" alt="Gold Stud Earrings"
                                class="img-fluid w-100 h-100 object-fit-cover">
                            <img src="assets/img/lipstick.jpg" class="hover-img w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column h-100 gap-3">
                        <div class="products-card flex-fill" style="height: 50%;">
                            <div class="products-image h-100">
                                <img src="assets/img/hat.jpg" alt="Hat 2"
                                    class="img-fluid w-100 h-100 object-fit-cover">
                                <img src="assets/img/watch.jpg" alt="Hat 2"
                                    class="hover-img w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="products-card flex-fill" style="height: 50%;">
                            <div class="products-image h-100">
                                <img src="assets/img/bag.jpg" alt="Bag 2"
                                    class="img-fluid w-100 h-100 object-fit-cover">
                                <img src="assets/img/home.jpg" alt="Bag 2"
                                    class="hover-img w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="text-center mt-5">

                <a href="{{ route('products') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-collection me-2"></i>ALL Products
                </a>
            </div>
        </div>
    </section>
    <section id="services" class="services-2 section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>What You Get with Our Store</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-briefcase icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Fast & Reliable
                                    Delivery</a></h4>
                            <p class="description">Get your orders delivered quickly and safely with our trusted
                                courier partners.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Secure Payments</a></h4>
                            <p class="description">We offer multiple secure payment options to make your shopping
                                worry-free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Easy Returns &
                                    Refunds</a>
                            </h4>
                            <p class="description">Not satisfied? Enjoy a hassle-free return and refund policy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-binoculars icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">24/7 Customer Support</a>
                            </h4>
                            <p class="description">Our support team is always here to help you before and after
                                your purchase.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">High-Quality Products</a>
                            </h4>
                            <p class="description">We source only the best to ensure customer satisfaction and
                                product excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Exclusive Deals &
                                    Discounts</a></h4>
                            <p class="description">Enjoy regular offers, seasonal sales, and exclusive member
                                discounts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials section dark-background">
        <img src="assets/img/feedback.jpg" class="testimonials-bg" alt="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 300,
                        "autoplay": {
                            "delay": 2000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Ava Mitchell</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star"></i><i
                                    class="bi bi-star"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Excellent service and top-notch quality. Highly recommended!</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>This product exceeded my expectations. The quality and attention to detail were
                                    amazing.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Liam Rodriguez</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fast delivery and amazing support. Will definitely order again!</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Emily Turner</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Very satisfied with the service. The team is responsive and professional.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Daniel Brooks</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i>

                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>The experience was smooth and seamless from start to finish.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Information For Contact ,Also Put Your Feedback</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6 ">
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Random 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+92 738792973</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="500">
                        <div class="row gy-4 h-100">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="3" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    {{-- <div id="message">Added to Cart!</div> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const token = form.querySelector('input[name="_token"]').value;

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': token,
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            const cartMsg = document.getElementById('cartMessage');
                            cartMsg.style.display = 'block';

                            // Optional: update text if returned dynamically
                            // cartMsg.querySelector('span').innerText = data.message;

                            setTimeout(() => {
                                cartMsg.style.display = 'none';
                            }, 3000);
                        })
                        .catch(error => {
                            console.error(error);
                            alert('Something went wrong.');
                        });
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var iso = new Isotope('.isotope-container', {
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });

            document.querySelectorAll('.portfolio-filters li').forEach(function(filterBtn) {
                filterBtn.addEventListener('click', function() {
                    document.querySelector('.portfolio-filters .filter-active')?.classList.remove(
                        'filter-active');
                    this.classList.add('filter-active');

                    var filterValue = this.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                });
            });
        });

        new Swiper(".bestSellerSwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            speed: 800,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            }
        });
    </script>
    @endsection