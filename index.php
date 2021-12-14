<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Omnifood is an AI-powered food subscription that will make you eat healthy again, 365 days per year. It's tailored to your personal tastes and nutritional needs." />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    <script defer src="js/script.js"></script>

    <title>YukBisnis! &mdash; Tempatnya ide bisnis!</title>
</head>

<body>
    <header class="header">
        <a href="#">
            <img class="logo" alt="YukBisnis logo" src="img/YukBisnis!.png" />
        </a>

        <nav class="main-nav">
            <ul class="main-nav-list">
                <li><a class="main-nav-link" href="#how">How it works</a></li>
                <li><a class="main-nav-link" href="#ideas">Ideas</a></li>
                <li>
                    <a class="main-nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li><a class="main-nav-link nav-cta" href="login.php">Login</a></li>
            </ul>
        </nav>

        <button class="btn-mobile-nav">
            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
            <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
    </header>

    <main>
        <section class="section-hero">
            <div class="hero">
                <div class="hero-text-box">
                    <h1 class="heading-primary">
                        Receive feedback for your ideas, and find business partners here!
                    </h1>
                    <p class="hero-description">
                        YukBisnis! is a fresh platform where you can share and validate your business ideas, or simply help others by giving feedback! You can also vote your favourite ideas, so we all know that all ideas matters!
                    </p>
                    <a href="#cta" class="btn btn--full margin-right-sm">Join other entrepreneurs</a>

                    <a href="#how" class="btn btn--outline">Learn more &darr;</a>
                    <div class="delivered-meals">
                        <div class="delivered-imgs">
                            <img src="img/customers/customer-1.jpg" alt="Customer photo" />
                            <img src="img/customers/customer-2.jpg" alt="Customer photo" />
                            <img src="img/customers/customer-3.jpg" alt="Customer photo" />
                            <img src="img/customers/customer-4.jpg" alt="Customer photo" />
                            <img src="img/customers/customer-5.jpg" alt="Customer photo" />
                            <img src="img/customers/customer-6.jpg" alt="Customer photo" />
                        </div>
                        <p class="delivered-text">
                            <span>500+</span> people have joined!
                        </p>
                    </div>
                </div>
                <div class="hero-img-box">
                    <picture>
                        <source srcset="img/hero.webp" type="image/webp" />
                        <source srcset="img/hero-min.png" type="image/png" />

                        <img src="img/hero-min.png" class="hero-img" alt="Woman enjoying food, meals in storage container, and food bowls on a table" />
                    </picture>
                </div>
            </div>
        </section>

        <section class="section-featured">
            <div class="container">
                <h2 class="heading-featured-in">As featured in</h2>
                <div class="logos">
                    <img src="img/logos/techcrunch.png" alt="Techcrunch logo" />
                    <img src="img/logos/business-insider.png" alt="Business Insider logo" />
                    <img src="img/logos/the-new-york-times.png" alt="The New York Times logo" />
                    <img src="img/logos/forbes.png" alt="Forbes logo" />
                    <img src="img/logos/usa-today.png" alt="USA Today logo" />
                </div>
            </div>
        </section>

        <section class="section-how" id="how">
            <div class="container">
                <span class="subheading">How it works</span>
                <h2 class="heading-secondary">
                    Your daily dose of business ideas in 3 steps
                </h2>
            </div>

            <div class="container grid grid--2-cols grid--center-v">
                <!-- STEP 01 -->
                <div class="step-text-box">
                    <p class="step-number">01</p>
                    <h3 class="heading-tertiary">
                        Share your thought about your business ideas
                    </h3>
                    <p class="step-description">
                        Never again wasting time, thinking about your business ideas alone. Everyone here to help you!
                    </p>
                </div>

                <div class="step-img-box">
                    <img src="img/01.png" class="step-img" alt="iPhone app
            preferences selection screen" />
                </div>

                <!-- STEP 02 -->
                <div class="step-img-box">
                    <img src="img/02.png" class="step-img" alt="iPhone app
            meal approving plan screen" />
                </div>
                <div class="step-text-box">
                    <p class="step-number">02</p>
                    <h3 class="heading-tertiary">Receive feedbacks</h3>
                    <p class="step-description">
                        Like what is said, everyone here to help you, giving the feedback you need to grow your business!
                    </p>
                </div>

                <!-- STEP 03 -->
                <div class="step-text-box">
                    <p class="step-number">03</p>
                    <h3 class="heading-tertiary">Find your business partners!</h3>
                    <p class="step-description">
                        Is feedback enough? No! You may find your business partners here!</p>
                </div>
                <div class="step-img-box">
                    <img src="img/03.png" class="step-img" alt="iPhone app
            delivery screen" />
                </div>
            </div>
        </section>

        <section class="section-ideas" id="ideas">
            <div class="container center-text">
                <span class="subheading">Highligh</span>
                <h2 class="heading-secondary">
                    Favourite Ideas This Month
                </h2>
            </div>

            <div class="container grid grid--3-cols margin-bottom-md">
                <div class="ideas">
                    <img src="img/meals/meal-1.jpg" class="ideas-img" alt="Japanese Gyozas" />
                    <div class="ideas-content">
                        <div class="idea-tags">
                            <span class="tag tag--vegetarian">Makanan</span>
                        </div>
                        <p class="ideas-title">Japanese Gyozas</p>
                        <ul class="ideas-attributes">
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="person-outline"></ion-icon>
                                <span>Amal Yulianto</span>
                            </li>
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="star-outline"></ion-icon>
                                <span><strong>4.9</strong> rating (537)</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ideas">
                    <img src="img/meals/meal-1.jpg" class="ideas-img" alt="Japanese Gyozas" />
                    <div class="ideas-content">
                        <div class="idea-tags">
                            <span class="tag tag--vegetarian">Makanan</span>
                        </div>
                        <p class="ideas-title">Japanese Gyozas</p>
                        <ul class="ideas-attributes">
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="person-outline"></ion-icon>
                                <span>Amal Yulianto</span>
                            </li>
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="star-outline"></ion-icon>
                                <span><strong>4.9</strong> rating (537)</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ideas">
                    <img src="img/meals/meal-1.jpg" class="ideas-img" alt="Japanese Gyozas" />
                    <div class="ideas-content">
                        <div class="idea-tags">
                            <span class="tag tag--vegetarian">Makanan</span>
                        </div>
                        <p class="ideas-title">Japanese Gyozas</p>
                        <ul class="ideas-attributes">
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="person-outline"></ion-icon>
                                <span>Amal Yulianto</span>
                            </li>
                            <li class="ideas-attribute">
                                <ion-icon class="ideas-icon" name="star-outline"></ion-icon>
                                <span><strong>4.9</strong> rating (537)</span>
                            </li>
                        </ul>
                    </div>
                </div>




            </div>

            <div class="container all-ideas">
                <a href="#" class="link">See all ideas &rarr;</a>
            </div>
        </section>

        <section class="section-testimonials" id="testimonials">
            <div class="testimonials-container">
                <span class="subheading">Testimonials</span>
                <h2 class="heading-secondary">Join the other happy entrepreneurs!</h2>

                <div class="testimonials">
                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of customer Dave Bryson" src="img/customers/dave.jpg" />
                        <blockquote class="testimonial-text">
                            Berkat web ini, saya sudah mendapatkan ide apa yang akan saya jalankan. Web ini sangat berguna sebab kita bisa melihat berbagai macam ide bisnis yang tidak terpikirkan sebelumnya
                        </blockquote>
                        <p class="testimonial-name">&mdash; Dave Bryson</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of customer Ben Hadley" src="img/customers/ben.jpg" />
                        <blockquote class="testimonial-text">
                            Berkat web ini, saya sudah mendapatkan ide apa yang akan saya jalankan. Web ini sangat berguna sebab kita bisa melihat berbagai macam ide bisnis yang tidak terpikirkan sebelumnya
                        </blockquote>
                        <p class="testimonial-name">&mdash; Ben Hadley</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of customer Steve Miller" src="img/customers/steve.jpg" />
                        <blockquote class="testimonial-text">
                            Berkat web ini, saya sudah mendapatkan ide apa yang akan saya jalankan. Web ini sangat berguna sebab kita bisa melihat berbagai macam ide bisnis yang tidak terpikirkan sebelumnya
                            <p class="testimonial-name">&mdash; Steve Miller</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of customer Hannah Smith" src="img/customers/hannah.jpg" />
                        <blockquote class="testimonial-text">
                            Berkat web ini, saya sudah mendapatkan ide apa yang akan saya jalankan. Web ini sangat berguna sebab kita bisa melihat berbagai macam ide bisnis yang tidak terpikirkan sebelumnya
                        </blockquote>
                        <p class="testimonial-name">&mdash; Hannah Smith</p>
                    </figure>
                </div>
            </div>

            <div class="gallery">
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-1.jpg" alt="Photo of beautifully
            arranged food" />
                    <!-- <figcaption>Caption</figcaption> -->
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-2.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-3.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-4.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-5.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-6.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-7.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-8.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-9.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-10.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-11.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/gallery-12.jpg" alt="Photo of beautifully
            arranged food" />
                </figure>
            </div>
        </section>


        <div class="container grid">
            <aside class="plan-details">

            </aside>
        </div>

        <!-- <div class="container grid grid--4-cols">
            <div class="feature">
                <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                <p class="feature-title">Never cook again!</p>
                <p class="feature-text">
                    Our subscriptions cover 365 days per year, even including major holidays.
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
                <p class="feature-title">Local and organic</p>
                <p class="feature-text">
                    Our cooks only use local, fresh, and organic products to prepare your meals.
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
                <p class="feature-title">No waste</p>
                <p class="feature-text">
                    All our partners only use reusable containers to package all your meals.
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="pause-outline"></ion-icon>
                <p class="feature-title">Pause anytime</p>
                <p class="feature-text">
                    Going on vacation? Just pause your subscription, and we refund unused days.
                </p>
            </div>
        </div>
        </section> -->

        <!-- <section class="section-cta" id="cta">
            <div class="container">
                <div class="cta">
                    <div class="cta-text-box">
                        <h2 class="heading-secondary">Get your first meal for free!</h2>
                        <p class="cta-text">
                            Healthy, tasty and hassle-free meals are waiting for you. Start eating well today. You can cancel or pause anytime. And the first meal is on us!
                        </p>

                        <form class="cta-form" name="sign-up" netlify>
                            <div>
                                <label for="full-name">Full Name</label>
                                <input id="full-name" type="text" placeholder="John Smith" name="full-name" required />
                            </div>

                            <div>
                                <label for="email">Email address</label>
                                <input id="email" type="email" placeholder="me@example.com" name="email" required />
                            </div>

                            <div>
                                <label for="select-where">Where did you hear from us?</label>
                                <select id="select-where" name="select-where" required>
                    <option value="">Please choose one option:</option>
                    <option value="friends">Friends and family</option>
                    <option value="youtube">YouTube video</option>
                    <option value="podcast">Podcast</option>
                    <option value="ad">Facebook ad</option>
                    <option value="others">Others</option>
                  </select>
                            </div>

                            <button class="btn btn--form">Sign up now</button>

                             <input type="checkbox" />
                <input type="number" /> -->
        <!-- </form>
                    </div>
                    <div class="cta-img-box" role="img" aria-label="Woman enjoying food"></div>
                </div>
            </div>
        </section> -->
    </main>

    <footer class="footer">
        <div class="container grid grid--footer">
            <div class="logo-col">
                <a href="#" class="footer-logo">
                    <img class="logo" alt="YukBisnis logo" src="img/YukBisnis!.png" />
                </a>

                <ul class="social-links">
                    <li>
                        <a class="footer-link" href="#">
                            <ion-icon class="social-icon" name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="footer-link" href="#">
                            <ion-icon class="social-icon" name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="footer-link" href="#">
                            <ion-icon class="social-icon" name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                </ul>

                <p class="copyright">
                    Copyright &copy; <span class="year">2021</span> by YukBisnis, Inc. All rights reserved.
                </p>
            </div>

            <div class="address-col">
                <p class="footer-heading">Contact us</p>
                <address class="contacts">
                    <p class="address">
                        Kontrakan Aslab, 12 Sunan Muria St., Sleman, Yogyakarta
                    </p>
                    <p>
                        <a class="footer-link" href="tel:088880008880">088 880 008 880</a><br />
                        <a class="footer-link" href="mailto:hello@yukbisnis.com">hello@yukbisnis.com</a>
                    </p>
                </address>
            </div>

            <nav class="nav-col">
                <p class="footer-heading">Account</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="#">Create account</a></li>
                    <li><a class="footer-link" href="#">Sign in</a></li>
                </ul>
            </nav>

            <nav class="nav-col">
                <p class="footer-heading">Company</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="#">About YukBisnis!</a></li>
                    <li><a class="footer-link" href="#">For Business</a></li>
                    <li><a class="footer-link" href="#">Careers</a></li>
                </ul>
            </nav>

            <nav class="nav-col">
                <p class="footer-heading">Resources</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="#">Recipe directory </a></li>
                    <li><a class="footer-link" href="#">Help center</a></li>
                    <li><a class="footer-link" href="#">Privacy & terms</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>