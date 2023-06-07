@extends('nav')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Visitor Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap");

                /* Base */
                :root {
                    --clr-primary: #fe5722;
                    --clr-secondary: #272d36;
                }
                .btn {
                    padding: 14px 20px;
                    background: var(--clr-primary);
                    border-radius: 4px;
                    color: #fff;
                    text-decoration: none;
                    font-size: 22px;
                    display: inline-block;
                    margin: 20px 0;
                }
                *,
                *::after,
                *::before {
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0;
                    font-family: "Josefin Sans", sans-serif;
                }

                html {
                    scroll-behavior: smooth;
                }

                body {
                    background: #fff;
                    color: var(--clr-secondary);
                    overflow-x: hidden;
                }

                .section {
                    width: 100%;
                    padding: 40px 0;
                }

                .flex {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .container {
                    padding: 0 30px;
                }

                .primary {
                    font-size: 64px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }

                .secondary {
                    font-size: 44px;
                    font-weight: 700;
                    margin-bottom: 20px;
                }

                .tertiary {
                    font-size: 24px;
                    font-weight: 400;
                    margin-bottom: 20px;
                }



                /* End Base */

                /* Menu */
                nav {
                    height: 83px;
                    width: 100%;
                    position: fixed;
                    top: 0;
                    background: #fff5f2;
                    box-shadow: 0 1px 1px -1px rgba(0, 0, 0, 0.22);
                    z-index: 22;
                }

                label.logo {
                    font-size: 35px;
                    line-height: 80px;
                    padding: 0 30px;
                    font-weight: 700;
                }

                nav ul {
                    float: right;
                    margin-right: 20px;
                }

                nav ul li {
                    display: inline-block;
                    line-height: 80px;
                    margin: 0 5px;
                }

                nav ul li a {
                    font-size: 18px;
                    padding: 7px 13px;
                    text-decoration: none;
                    color: var(--clr-secondary);
                }

                .checkbtn {
                    font-size: 30px;
                    color: #fff;
                    float: right;
                    line-height: 80px;
                    margin-right: 40px;
                    cursor: pointer;
                    display: none;
                }

                #check {
                    display: none;
                }

                /* End Menu */

                /* Hero Section */
                #hero-section {
                    background: #fff5f2;
                    margin-top: 60px;
                }

                .text,
                .visual {
                    width: 50%;
                }

                .text {
                    margin: 0 20px;
                }

                .visual img {
                    width: 80%;
                    height: auto;
                    display: block;
                }

                #hero-section .text {
                    margin-left: 30px;
                }

                #hero-section .visual img {
                    margin-left: auto;
                }

                /* End Hero Section */

                /* How It Works */
                #how-it-works {
                    width: 80%;
                    margin: 0 auto;
                    text-align: center;
                }

                .box {
                    border: 1px solid #b2b2b2;
                    padding: 25px 5px;
                    margin: 0 10px;
                    border-radius: 8px;
                    font-size: 18px;
                    transition: 0.3s ease;
                    cursor: pointer;
                }

                .box ion-icon {
                    font-size: 35px;
                    color: var(--clr-primary);
                    margin: 15px 0;
                }

                .box.active,
                .box:hover {
                    color: #fff;
                    border-color: var(--clr-primary);
                    background: var(--clr-primary);
                }

                .box.active ion-icon,
                .box:hover ion-icon {
                    color: #fff;
                }

                /* End How It Works */

                /* About */
                #about .visual img,
                #app .visual img {
                    margin-right: auto;
                }

                /* End About */

                /* Restaurant Menu */
                .category {
                    list-style: none;
                    text-align: center;
                    margin: 20px 0 40px 0;
                }

                .category li {
                    display: inline-block;
                    margin: 0 15px;
                    font-size: 20px;
                    font-weight: 500;
                    cursor: pointer;
                }

                .category li.active {
                    color: var(--clr-primary);
                }

                .restaurant-menu {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                }

                .menu-item {
                    width: 260px;
                    margin: 0 auto;
                    border-radius: 6px;
                    overflow: hidden;
                }

                .menu-item img {
                    width: 100%;
                }

                .order {
                    justify-content: space-between;
                }

                .btn-menu {
                    padding: 6px 10px;
                    font-size: 16px;
                    text-align: center;
                    background: #fff;
                    border: 1px solid var(--clr-primary);
                    color: var(--clr-primary);
                }

                .title {
                    font-size: 18px;
                    font-weight: 300;
                    margin: 8px 0;
                }

                .location {
                    font-size: 18px;
                    font-weight: 500;
                }

                /* End Restaurant Menu */

                /* Testimonial */
                #testimonial .visual img {
                    margin-left: auto;
                }

                .user {
                    margin-top: 30px;
                    justify-content: start;
                }

                .user img {
                    width: 50px;
                    border-radius: 50%;
                    margin-right: 20px;
                }

                /* End Testimonial */

                /* FAQ */
                #faq .secondary {
                    text-align: center;
                }

                .faq {
                    width: 60%;
                    margin: 50px auto 20px auto;
                }

                summary {
                    padding: 1em;
                    border: 1px solid #b2b2b2;
                    margin-bottom: 1em;
                    cursor: pointer;
                    outline: none;
                    border-radius: 0.3em;
                    font-weight: 600;
                }

                details[open] summary~* {
                    animation: open 1s ease-in-out;
                }

                @keyframes open {
                    from {
                        opacity: 1;
                        margin-top: -10px;
                    }

                    top {
                        opacity: 1;
                        margin-top: 0;
                    }
                }

                /* End FAQ */

                /* App */
                #app {
                    text-align: center;
                }

                .app-store {
                    background: #000;
                    margin: 0 10px;
                    padding: 4px 16px;
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    font-size: 12px;
                    color: #fff;
                    cursor: pointer;
                }

                .app-store p {
                    margin-top: 8px;
                }

                .app-store span {
                    font-size: 16px;
                    line-height: 25px;
                }

                .app-store ion-icon {
                    font-size: 30px;
                    margin-right: 10px;
                }

                .download {
                    margin: 30px 0;
                }

                /* End App */

                /* Footer */
                .footer {
                    background: var(--clr-secondary);
                    color: #b2b2b2;

                }

                .footer .container {
                    justify-content: space-between;
                    align-items: flex-start;
                }

                .footer h2 {
                    font-size: 22px;
                    margin-bottom: 10px;
                    color: #fff;
                }

                .footer ul {
                    list-style: none;
                    line-height: 30px;
                    font-size: 16px;
                }

                .footer ul li {
                    cursor: pointer;
                }

                .footer-about {
                    width: 35%;
                }

                .copyright {
                    text-align: center;
                    padding: 20px 0;
                    margin-top: 30px;
                    border-top: 1px solid #b2b2b2;
                }

                /* End Footer */

                /* Responsive  */
                @media (max-width: 952px) {
                    label.logo {
                        font-size: 30px;
                        padding-left: 20px;
                    }

                    nav ul li a {
                        font-size: 16px;
                    }
                }

                @media (max-width: 858px) {
                    .checkbtn {
                        display: block;
                        color: var(--clr-primary);
                    }
                    ul {
                        position: fixed;
                        width: 100%;
                        height: 100vh;
                        top: 80px;
                        left: -100%;
                        top: 80px;
                        transition: all 0.5s;
                        text-align: center;
                        background: #fff5f2;
                    }

                    nav ul li {
                        display: block;
                        margin: 50px 0;
                        line-height: 30px;
                    }

                    nav ul li a {
                        font-size: 20px;
                    }

                    .menu a:hover,
                    .menu a.active {
                        background: none;
                        color: var(--clr-primary);
                    }

                    #check:checked~ul {
                        left: 0;
                    }

                    #hero-section {
                        margin-top: 80px;
                    }

                    #hero-section .text {
                        margin-left: auto;
                    }

                    .flex {
                        flex-direction: column;
                    }

                    .visual,
                    .text {
                        width: 70%;
                        margin: 15px auto;
                        text-align: center;
                    }

                    .download,
                    .user {
                        flex-direction: row;
                    }

                    .user {
                        justify-content: center;
                    }

                    .visual img {
                        margin: 0 auto;
                    }

                    .box {
                        margin: 15px 0;
                    }

                    .restaurant-menu {
                        grid-template-columns: repeat(2, 1fr);
                        grid-gap: 20px;
                    }

                    .faq,
                    .menu-item {
                        width: 80%;
                    }

                    .primary {
                        font-size: 56px;
                    }

                    .secondary {
                        font-size: 40px;
                    }

                    .tertiary {
                        font-size: 20px;
                    }

                    .footer-about {
                        width: 100%;
                        text-align: center;
                    }

                    .quick-links,
                    .get-in-touch,
                    .footer-category {
                        display: none;
                    }
                }

                @media (max-width: 680px) {
                    .container {
                        padding: 0 10px;
                    }

                    .text,
                    .visual {
                        width: 90%;
                    }

                    .restaurant-menu {
                        grid-template-columns: 1fr;
                    }

                    .faq {
                        width: 90%;
                    }

                    .app-store {
                        margin: 10px 0;
                    }

                    .download {
                        flex-direction: column;
                    }

                    .primary {
                        font-size: 48px;
                    }

                    .secondary {
                        font-size: 32px;
                    }

                    .tertiary {
                        font-size: 17px;
                    }
                }

                /* End Responsive  */





                .youtube {
                    position: fixed;
                    bottom: 40px;
                    right: 70px;
                    text-decoration: none;
                    padding: 8px 12px;
                    background: rgba(0, 0, 0, 0.6);
                    border-radius: 6px;
                    box-shadow: 0 2px 2px 3px rgba(0, 0, 0, 0.2);
                    color: #fff;
                }

                .youtube p {
                    font-size: 22px;
                }
            </style>
    </head>
    <body>


<!-- Hero Section -->
<div class="section flex" id="hero-section">
    <div class="text">
        <h1 class="primary">
            It's Not Just Food, <br />
            It's an <span>Experience</span>
        </h1>

        <p class="tertiary">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa,
            provident dolorum. Voluptatum ducimus minima quasi unde, voluptatibus
            soluta eligendi. Enim, architecto autem.
        </p>

        <a href="#menu" class="btn btn-success">Explore Menu</a>
    </div>
    <div class="visual">
        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/home-banner.png"
            alt="" />
    </div>
</div>
<!-- End Hero Section -->

<!-- How It Works -->
<div class="section" id="how-it-works">
    <h2 class="secondary">How It Works</h2>

    <div class="container flex">
        <div class="box">
            <h3>Easy Order</h3>
            <ion-icon name="timer-outline"></ion-icon>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                non?
            </p>
        </div>

        <div class="box active">
            <h3>Best Quality</h3>
            <ion-icon name="trophy-outline"></ion-icon>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                non?
            </p>
        </div>

        <div class="box">
            <h3>Fast Delivery</h3>
            <ion-icon name="checkmark-done-circle-outline"></ion-icon>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                non?
            </p>
        </div>
    </div>
</div>
<!-- End How It Works -->

<!-- About -->
<div class="section" id="about">
    <div class="container flex">
        <div class="visual">
            <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/about.png"
                alt="" />
        </div>
        <div class="text">
            <div class="secondary">About Our Restaurant</div>
            <h2 class="primary">150+</h2>

            <h3 class="tertiary">Our Delicious Food</h3>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia
                itaque saepe id hic rem doloribus quas esse voluptatibus eius sequi,
                possimus maxime dolores tempore facilis fugit porro mollitia, est
                consequuntur.
            </p>

            <a href="#menu" class="btn btn-success">Explore Menu</a>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Restaurant Menu -->
<div class="section" id="menu">
    <div class="container">
        <ul class="category">
            <li class="active">All</li>
            @foreach ($cats as $cat)
                <li>{{$cat->cat_name}}</li>
            @endforeach
        </ul>

        <div class="container">
            <div class="restaurant-menu">
                @foreach ($meals as $meal)
                <div class="menu-item">
                    <img src="{{$meal->image}}"
                        alt="" />

                    <div class="title">{{$meal->name}}</div>

                    <div class="location">{{$meal->description}}</div>

                    <div class="order flex">
                        <div class="price">{{$meal->price}}$</div>
                        <a href="#" class="btn btn-menu btn-success">Order Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Restaurant Menu -->

<!-- Testimonial -->
<div class="section" id="testimonial">
    <div class="container flex">
        <div class="text">
            <h2 class="secondary">What people say about FoodLover</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                eos voluptatem odio, molestias ullam error dolor rem laboriosam illo
                quae odit aliquam sint a amet, autem natus! Praesentium, ipsam
                mollitia?
            </p>

            <div class="user flex">
                <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/client.jpg"
                    alt="" />

                <div class="name">
                    <div class="title">John Smith</div>
                    <div class="location">Lahore, Pakistan</div>
                </div>
            </div>
        </div>
        <div class="visual">
            <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/testimonial.png"
                alt="" />
        </div>
    </div>
</div>
<!-- End Testimonial -->

<!-- FAQ -->
<div class="section" id="faq">
    <h2 class="secondary">Frequently Asked Questions</h2>

    <div class="faq">
        <details>
            <summary>I got wrong food what shoud I do?</summary>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores amet sunt at?
                </p>
            </div>
        </details>

        <details>
            <summary>I got wrong food what shoud I do?</summary>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores amet sunt at?
                </p>
            </div>
        </details>

        <details>
            <summary>I got wrong food what shoud I do?</summary>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores amet sunt at?
                </p>
            </div>
        </details>

        <details>
            <summary>I got wrong food what shoud I do?</summary>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores amet sunt at?
                </p>
            </div>
        </details>
    </div>
</div>
<!-- End FAQ -->

<!-- App -->
<div class="section" id="app">
    <div class="container flex">
        <div class="visual">
            <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/app.png"
                alt="" />
        </div>

        <div class="text">
            <h2 class="secondary">Download The FoodLover App</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
                laudantium velit iure illo facilis at delectus sint, doloribus
                magnam officiis rerum nobis, perspiciatis maxime repellat qui
                consequuntur? Aspernatur, architecto voluptatum!
            </p>

            <div class="download flex">
                <div class="app-store">
                    <ion-icon name="logo-google-playstore"></ion-icon>
                    <p>
                        GET IT ON <br />
                        <span>Google Play</span>
                    </p>
                </div>

                <div class="app-store">
                    <ion-icon name="logo-apple"></ion-icon>
                    <p>
                        Donload on the <br />
                        <span>App Store</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End App -->

<!-- Footer -->
<div class="footer" style="padding-top: 40px">
    <div class="container flex">
        <div class="footer-about">
            <h2>About</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                aspernatur sit deleniti enim voluptas voluptatum incidunt rerum,
                exercitationem voluptate nemo quo impedit ad perspiciatis tempore
                nulla dolore fugit, fuga eos.
            </p>
        </div>

        <div class="footer-category">
            <h2>Our Menu</h2>

            <ul>
                <li>Biryani</li>
                <li>Chicken</li>
                <li>Pizza</li>
                <li>Burger</li>
                <li>Pasta</li>
            </ul>
        </div>

        <div class="quick-links">
            <h2>Quick Links</h2>

            <ul>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Menu</li>
                <li>Order</li>
                <li>Services</li>
            </ul>
        </div>

        <div class="get-in-touch">
            <h2>Get in touch</h2>
            <ul>
                <li>Account</li>
                <li>Support Center</li>
                <li>Feedback</li>
                <li>Suggession</li>
            </ul>
        </div>
    </div>

    <div class="copyright">
        <p>Copyright &copy; 2022. All Rights Reserved.</p>
    </div>
</div>

<!-- End Footer -->

    </body>

    </html>
