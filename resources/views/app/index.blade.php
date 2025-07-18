@extends('app.layouts.app')
@section('content')

    <body class="index-page">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/cart-img.jpg') }}"
                style="position: absolute; top: 10; left: 30; width: 100%; height: 100%; object-fit: cover; object-position: left;"
                alt="Hero Image">
            {{-- <img src="assets/img/sale.jpg" alt="" data-aos="fade-in"> --}}
            <div class="container d-flex flex-column align-items-start">
                <h2 data-aos="fade-up" data-aos-delay="100"><i>Find What You Love</i></h2>
                <p data-aos="fade-up" data-aos-delay="200">Welcome to <strong> DevSpark </strong> – your digital
                    shopping hub.<br>
                    Discover the latest products at unbeatable prices.<br>
                    Fast delivery, secure checkout, and top service.<br>
                    We bring value and innovation to your screen.<br>
                    Shop smart. Shop easy. Only at DevSpark.</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('products') }}" class="btn btn-product">View Products</a>
                </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Everything You Need, All in One Store</h3>
                        <img src="assets/img/product.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p class="text">Explore a wide range of quality products at unbeatable prices. From electronics
                            and fashion
                            to home essentials — we've got you covered.</p>
                        <p class="text">Enjoy a smooth shopping experience with fast delivery, secure checkout, and 24/7
                            customer
                            support. Whether you're browsing or buying, our store is designed for your convenience.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                We believe online shopping should be simple, secure, and satisfying — every time.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Fast, reliable delivery across all
                                        regions.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Secure payments and easy checkout
                                        process.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Quality products at competitive
                                        prices, backed by customer satisfaction.</span></li>
                            </ul>
                            <p class="text">
                                Whether you're looking for the latest tech, trendy fashion, or home essentials — we’ve
                                got everything you need in one place.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/product-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Products</p>
                            </div>
                        </div>
                    </div>

                    <!-- End Stats Item --><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Orders</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        {{-- <section id="portfolio" class="portfolio section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Porducts</h2>
                    <p>CHECK OUR Porducts</p>
                </div><!-- End Section Title -->

                <div id="view-product" class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-clothing">Clothing</li>
                            <li data-filter=".filter-tech">Accessories</li>
                            <li data-filter=".filter-home">Home</li>
                            <li data-filter=".filter-beauty">Beauty</li>
                            <li data-filter=".filter-sports">Sports</li>
                            <li data-filter=".filter-electronics">Electronics</li>
                            <li data-filter=".filter-books">Books</li>
                            <li data-filter=".filter-toys">Toys</li>
                        </ul>
                        <div class="added-to-cart-message" id="cartMessage">
                            ✅ Product added to cart! <br>
                            <button class="btn-cart" onclick="window.location.href='/cart'">Go to Cart</button>
                        </div>
                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($products as $product)
                                @php
                                    $filterClass = $product->category
                                        ? 'filter-' . strtolower($product->category->slug)
                                        : '';
                                @endphp
                                <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $filterClass }}">
                                    <div class="card h-100">
                                        <div class="portfolio-content">
                                            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid w-100"
                                                style="height: 300px; object-fit: cover;" alt="{{ $product->price }}">
                                            <div class="portfolio-info">
                                                <h4>price={{ $product->price }}</h4>
                                                <p>{{ $product->description }}</p>
                                                <a href="{{ asset('images/' . $product->image) }}"
                                                    title="<strong>{{ $product->name }} - ${{ $product->price }}</strong> <br>  {{ $product->description }}"
                                                    data-gallery="portfolio-gallery" class="glightbox preview-link">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Card Body: just wrapping name + buttons -->
                                        <div class="card-body">
                                            <h5 class="text-center mb-3">{{ $product->name }}</h5>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('checkout') }}" class="btn btn-success w-50 me-2">
                                                    Buy-now
                                                </a>
                                                <form action="{{ route('cart.add', $product->id) }}" method="POST"
                                                    class="add-to-cart-form w-50 m-0">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning w-100">
                                                        Add to Cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div> <!-- End card -->
                                </div>
                            @endforeach
                        </div>
                    </div><!-- End Portfolio Container -->
                </div>
            </section> --}}


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

                    <a href="{{ route('products') }}" class="btn btn-product">
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
        </script>
    @endsection
