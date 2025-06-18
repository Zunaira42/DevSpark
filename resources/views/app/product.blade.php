<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z.M Aura</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">Z.M Aura</h1>
            </a>
            <div id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                {{-- <i class="mobile-nav-toggle d-xal-none bi bi-list"></i> --}}
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/main-bg.jpg" alt="" data-aos="fade-in">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <h2>Z.M Aura</h2>
                <p>Shop Top Picks In:&nbsp;&nbsp;<span class="typed"
                        data-typed-items="Lipsticks, Eyeliners, Foundations, Makeup Brushes, Highlighters, Blushes, Setting Sprays, Primers, Palettes, Concealers"></span>
                </p>
            </div>
        </section><!-- /Hero Section -->

    </main>

    <!-- Product Section -->
    <div id="product" class="product">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center mb-2">
                <h2>Deals on Products</h2>
                <p class="section-subtitle">Discover our premium cosmetics collection</p>
            </div>

            <!-- Swiper Container -->
            <!-- Swiper Container -->
            <div class="container-fluid">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    20% OFF
                                </div>
                                <img src="{{ asset('assets/img/lipstick.jpg') }}" class="product-img ">
                                <h5 class="product-title">Matte Lipstick</h5>
                                <p class="product-description"> This long-lasting lipstick glides on smoothly,
                                    delivering rich pigmentation and a lightweight feel</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count  ">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 2,000
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        2,500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 2nd --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    10% OFF
                                </div>
                                <img src="{{ asset('assets/img/eyeshadow.jpg') }}" class="product-img ">
                                <h5 class="product-title">Eyeshadow pallets</h5>
                                <p class="product-description">Perfect for day-to-night looks, its smooth, blendable
                                    formula ensures effortless application</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count">(130)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 1500
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        2,500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 3rd --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    30% OFF
                                </div>
                                <img src="{{ asset('assets/img/Contour.jpg') }}" class="product-img ">
                                <h5 class="product-title">Contour pallets</h5>
                                <p class="product-description">Featuring blendable powders in contour, bronzer, and
                                    highlight shades, it's perfect for creating natural or dramatic dimension."</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count">(107)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 800
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        1200</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    10% OFF
                                </div>
                                <img src="{{ asset('assets/img/brushes.jpg') }}" class="product-img ">
                                <h5 class="product-title">Makeup Brushes</h5>
                                <p class="product-description">Elevate your makeup with this essential brush set.These
                                    brushes deliver flawless application for foundation, eyeshadow, contouring, and
                                    more.</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count text-muted">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 2,000
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        2,500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    20% OFF
                                </div>
                                <img src="{{ asset('assets/img/jwelery.jpg') }}" class="product-img ">
                                <h5 class="product-title">Rings</h5>
                                <p class="product-description"> Perfect for everyday wear or special occasions, each
                                    piece adds a touch of timeless beauty to your look.</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count text-muted">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 200
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 6 --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    20% OFF
                                </div>
                                <img src="{{ asset('assets/img/lipbalm.webp') }}" class="product-img ">
                                <h5 class="product-title">LipBalm</h5>
                                <p class="product-description">Keep your lips soft, smooth, and hydrated with our
                                    nourishing lip balm.
                                </p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★</span>
                                    <span class="rating-count text-muted">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 300
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 7 --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    20% OFF
                                </div>
                                <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="product-img ">
                                <h5 class="product-title">Choose Makeup Product</h5>
                                <p class="product-description">Discover that you want for a flawless look with
                                    our makeup collectionm with pigmented eyeshadows and
                                    lipsticks.</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count text-muted">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 2,000
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        2,500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="swiper-slide">
                            <div class="boxes border rounded p-3 shadow-sm text-center">
                                <div class="sale-badge bg-danger text-white px-2 py-1 rounded position-absolute"
                                    style="top:10px; left:10px;">
                                    50% OFF
                                </div>
                                <img src="{{ asset('assets/img/ear.jpg') }}" class="product-img ">
                                <h5 class="product-title">Ear-Studs</h5>
                                <p class="product-description">Simple yet stylish, these ear studs add a subtle sparkle
                                    to any outfit. Crafted with quality materials, they're perfect for everyday wear or
                                    special occasions.</p>
                                <div class="product-rating mb-2">
                                    <span class="stars text-warning">★★★★★</span>
                                    <span class="rating-count text-muted">(127)</span>
                                </div>
                                <div class="product-price mb-2">
                                    PKR 2,000
                                    <span class="original-price text-muted text-decoration-line-through">PKR
                                        2,500</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn btn-primary me-2">Add to Cart</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <!-- Content Section -->
            <section class="middle">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="choose-wrap divider-one img p-5 d-flex align-items-end"
                                style="background-image: url(assets/img/mens.jpg); width:107%; height:115%">
                                 <div class="text text-center text-white px-2">
                                    <span class="subheading">Men's Shoes</span>
                                    <h2>Men's Collection</h2>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                    <p><a href="https://themewagon.github.io/minishop/#"
                                            class="btn btn-black px-3 py-2">Shop now</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                                <div class="col-md-12">
                                    <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
                                        style="background-image: url(assets/img/women.jpg); width:100%; height:100%">
                                        <div class="col-md-7 d-flex align-items-center">
                                            <div class="text text-white px-5">
                                                <span class="subheading">Women's Shoes</span>
                                                <h2>Women's Collection</h2>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the
                                                    Semantics, a large language ocean.</p>
                                                <p><a href="https://themewagon.github.io/minishop/#"
                                                        class="btn btn-black px-3 py-2">Shop now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div
                                                class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center"style=" width:106%; height: 125%">
                                                <div class="text text-center px-5">
                                                    <span class="subheading">Summer Sale</span>
                                                    <h2>Extra 50% Off</h2>
                                                    <p>Separated they live in Bookmarksgrove right at the coast of the
                                                        Semantics, a large language ocean.</p>
                                                    <p><a href="https://themewagon.github.io/minishop/#"
                                                            class="btn btn-black px-3 py-2">Shop now</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center"style="height: 125%";
                                                style="background-image: url(assets/img/shoes.jpg);">
                                                <div class="text text-center text-white px-5">
                                                    <span class="subheading">Shoes</span>
                                                    <h2>Best Sellers</h2>
                                                    <p>Separated they live in Bookmarksgrove right at the coast of the
                                                        Semantics, a large language ocean.</p>
                                                    <p><a href="https://themewagon.github.io/minishop/#"
                                                            class="btn btn-black px-3 py-2">Shop now</a></p>
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

            {{-- content --}}

            <!-- Additional Product Section -->
            <div class="category">
                <div class="container">
                    <div class="row mb-4">
                        @foreach ($products as $product)
                            <div class="col-md-4">
                                <div class="boxes">
                                    <img src="{{ asset('images/' . $product->image) }}" class="image">
                                    <h3 class="text text-center">{{ $product->name }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{--  --}}
            <footer id="footer" class="footer dark-background">
                <div class="container">
                    <h3 class="sitename">Z.M Aura</h3>
                    <p>Discover premium cosmetics that enhance your natural beauty with professional quality and
                        trusted
                        performance.</p>
                    <div class="social-links d-flex justify-content-center">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-skype"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                    <div class="container">
                        <div class="copyright">
                            <span>Copyright</span> <strong class="px-1 sitename">Z.M Aura</strong> <span>All
                                Rights
                                Reserved</span>
                        </div>
                        <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-short"></i>
            </a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/typed.js/typed.umd.js"></script>
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

            <!-- Swiper JS CDN (backup) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>

            <!-- Main JS File -->
            <script src="assets/js/main.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    new Swiper(".mySwiper", {
                        loop: true,
                        initialSlide: 0,
                        spaceBetween: 15,
                        slidesPerView: 3,
                        watchSlidesProgress: true,
                        observeParents: true,
                        observer: true,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        autoplay: {
                            delay: 2000,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            992: {
                                slidesPerView: 3
                            },
                            768: {
                                slidesPerView: 2
                            },
                            576: {
                                slidesPerView: 1
                            }
                        }
                    });

                });
            </script>

</body>

</html>







{{-- 2nd --}}
 <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/app-2.jpg" title="App 2"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/app-3.jpg" title="App 3"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
