<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Iconscout Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

</head>

<body>
    <?php
    if (!empty($message)) {
        echo "<p>" . $message . "</p>";
    }
    ?>

    <header class="header">
        <a href="#" class="logo"><i class="fas fa-hiking"></i> travel.com</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="#home">home</a>
            <a href="#category">Adventures</a>
            <a href="#packages">packages</a>
            <a href="#contact">contact</a>
            <a href="inquiries.php">View Inquiries</a>
        </nav>       
    </header>

    <!-- <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div> -->

    <section class="home" id="home">

        <div class="wrapper">

            <div class="box" style="background: url(images/home1.jpg) no-repeat;">
                <div class="content">
                    <span>never stop</span>
                    <h3>exploring</h3>
                    <p>Travel.com offers best deals on India tour packages.</p>
                    <a href="#category" class="btn">get started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="category" id="category">

        <h1 class="heading">Adventure Idea!</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/category-1.jpg" alt="">
                <h3>bungee jump</h3>
                <p>Bungee jumping is an activity that involves a person jumping from a great height while connected to a
                    large elastic cord.</p>
                <a href="https://en.wikipedia.org/wiki/Bungee_jumping" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/category-2.jpg" alt="">
                <h3>zip lines</h3>
                <p>A zip-line, zip line, zip-wire, or flying fox is a pulley suspended on a cable, usually made of
                    stainless steel, mounted on a slope.</p>
                <a href="https://en.wikipedia.org/wiki/Zip_line" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/category-3.jpg" alt="">
                <h3>Canoeing</h3>
                <p>Canoeing is an activity which involves paddling a canoe with a single-bladed paddle.</p>
                <a href="https://en.wikipedia.org/wiki/Canoeing" class="btn">read more</a>
            </div>

        </div>

    </section>
    <section class="packages" id="packages">

        <h1 class="heading">popular packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Manali Package</h3>
                    <p>Kullu Manali Shimla has always been a very popular destination for the old, young travelers as
                        well as newly married couples who look for cheapest Manali tour packages & Manali Honeymoon
                        Packages to experience the perfect solitude and calmness at its best.</p>
                    <div class="price">Rs 5,999 - Rs 8,999</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Goa Package</h3>
                    <p>The most popular beach of Goa, Baga is located close to Calangute beach, around 30 Km North of
                        Panaji. Baga is popular for its nightlife with some very famous clubs such as Brittos, Titos and
                        Mambos.There is also a range of water sports that you can try your hands at.</p>
                    <div class="price">Rs 7,999 - Rs 12,999</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Delhi Package</h3>
                    <p>Boasting cultural diversity and rich heritage, Delhi is home to several temples, tombs, gardens,
                        forts, museums, markets and more. We take you to some of the best spots in the city. Pick the
                        best packages from here and enjoy the tour of Delhi with guide.</p>
                    <div class="price">Rs 2,999 - Rs 8,999</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jaipur Package</h3>
                    <p>We organise Jaipur & Rajasthan tours that offer incredible attractions like Forts and Palaces,
                        Deserts, Traditional Villages, colorful cattle fairs, sacred places, camel safaris, beautiful
                        lakes, hill stations and the people. </p>
                    <div class="price">Rs 11,999 - Rs15,999</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kerala Package</h3>
                    <p>A trip to Kerala is always an experience through greenery to the hills and its climate. Browse
                        through our hand-picked Kerala tour packages prepared for you. Our experts are also available to
                        prepare customised tourism packages</p>
                    <div class="price">Rs 4,999 - Rs 9,999</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Darjeeling</h3>
                    <p>A trip to Darjeeling will include a ride on the famous Himalayan Railway, a visit to Tiger Hill,
                        or a tour of the stunning landscaped gardens here. Activities like hiking and boating. Do not
                        miss out on a trip to Darjeeling Is famous Mall Road</p>
                    <div class="price">Rs 20,000 - Rs 25,000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">
        <div class="wrapper1">
            <div class="title1">
                <h1>Contact us</h1>
            </div>
            <div class="contact-form">
            <form method="post" action="contact_us.php" id="contact-form">
                    <div class="input-fields">
                        <input type="text" class="input" placeholder="Name" name="name" required>
                        <input type="email" class="input" placeholder="Email Address" name="email"
                            pattern=".+@gmail\.com" required>
                        <input type="tel" class="input" placeholder="Phone" name="phone" required>
                        <input type="text" class="input" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="msg">
                        <textarea placeholder="Message" name="message" required></textarea>
                        <br>
                        <div class="btn1">
                            <button type="submit"><i class="uil uil-message"></i> Send</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="#home">home</a>
                <a href="#packages">packages</a>
                <a href="#query">query</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#contact">ask questions</a>
                <a href="#">terms of use</a>
                <a href="#">privacy policy</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+9181155*****"> <i class="fas fa-phone"></i> +91 81155***** </a>
                <a href="mailto: Shivani@gmail.com"> <i class="fas fa-envelope"></i> Shivani@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Navi-Mumbai, india - 410206 </a>
            </div>
        </div>
        <div class="credit">created by <span>Shivani Chaudhary</span> | all rights reserved!</div>
    </section>
    <!-- footer section ends -->
    <script src="js/script.js"></script>
</body>

</html>