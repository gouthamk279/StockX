<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>StockX Shoes</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav id="nav">
        <!-- Logo, Search bar -->
        <div class="navTop">
            <div class="navItem">
                <h1>StockX Shoes</h1>
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" class="searchInput" placeholder="I am looking for a..." autoComplete='none' readonly onfocus="this.removeAttribute('readonly');"/>
                    <img src="./img/search.png" width="20px" height="20px" alt="magnifying glass" class="searchIcon">
                </div>
            </div>
            <div class="navItem">
                <span class="login" onclick=window.location="./login.php">Login</span>   
                       /
                <span class="login" onclick=window.location="./signup.php">Sign Up</span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">OFF WHITE</h3>
            <h3 class="menuItem">JORDAN 4</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">UPTEMPO</h3>
            <h3 class="menuItem">2K ZOOM</h3>
        </div>
    </nav>

    <!-- Slider -->
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/air.png" alt="JORDAN OFFWHITE" class="sliderImage">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">JORDAN OFFWHITE <br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>

            </div>
            <div class="sliderItem">
                <img src="./img/jordan.png" alt="RETRO 4" class="sliderImage">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">RETRO 4<br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>

            </div>
            <div class="sliderItem">
                <img src="./img/blazer.png" alt="BLAZER MID 77" class="sliderImage">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">BLAZER MID 77<br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>

            </div>
            <div class="sliderItem">
                <img src="./img/crater.png" alt="Nike Crater" class="sliderImage">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">CRATER LAKE<br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>

            </div>
            <div class="sliderItem">
                <img src="./img/hippie.png" alt="Nike Uptempo" class="sliderImage">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">NIKE UPTEMPO<br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>

            </div>
            <div class="sliderItem">
                <img src="./img/zoom.png" alt="Nike 2K Zoom" class="sliderImage" height="80%">
                <div class="sliderBgCircle"></div>
                <h1 class="sliderTitle">NIKE 2K ZOOM<br> NEW <br> SEASON</h1>
                <a href="#product"><button class="buyButton">BUY NOW</button></a>
            </div>
        </div>
    </div>

    <!--  Features -->
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDescription">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">RETURN AVAILABLE</span>
            <span class="featureDescription">Only after checking the returned product.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDescription">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US</span>
            <span class="featureDescription">Keep in touch via email and support system.</span>
        </div>
    </div>

    <!-- Products -->
    <div class="product" id="product">
        <img src="./img/air.png" alt="" class="productImage">
        <div class="productDetails">
            <h1 class="productTitle">OFF WHITE </h1>
            <h2 class="productPrice">₹2999</h2>
            <p class="productDescription">We shoes and comfort for your feet comes free! It is the Footwear to last you a lifetime.
                Grab best Shoes, For the Best Style.
            </p>

            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">BUY NOW</button>
        </div>
        <!-- Payment -->
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name & Surname</label>
            <input type="text" class="payInput" placeholder="Janette Bennett">
            <label>Phone</label>
            <input type="text" class="payInput" placeholder="+1 123 4567">
            <label>Address</label>
            <input type="text" class="payInput" placeholder="Delta St. 23 42-167">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="35px" alt="visa" class="cardIcon">
                <img src="./img/master.png" width="35px" alt="mastercard" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" class="payInput small" placeholder="mm">
                <input type="text" class="payInput small" placeholder="yyyy">
                <input type="text" class="payInput small" placeholder="cvv">
            </div>
            <button class="payButton">Checkout</button>
            <span class="close">X</span>
        </div>
    </div>

    <!-- Gallery -->

    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleyTitle">Be Yourself</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
        </div>
    </div>

    <!-- New Season -->

    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImage">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSmall">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImage">
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="footerMenuTitle">About Us</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Company</li>
                    <li class="footerListItem">Contact</li>
                    <li class="footerListItem">Careers</li>
                    <li class="footerListItem">Affiliates</li>
                    <li class="footerListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="footerMenuTitle">Useful Links</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Support</li>
                    <li class="footerListItem">FAQ</li>
                    <li class="footerListItem">Feedback</li>
                    <li class="footerListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="footerMenuTitle">Products</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Off White</li>
                    <li class="footerListItem">Jordan 4</li>
                    <li class="footerListItem">Blazer</li>
                    <li class="footerListItem">Crater</li>
                    <li class="footerListItem">Uptempo</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="footerMenuTitle">Subscribe to our newsletter</h1>
                <div class="footerMail">
                    <input type="email" placeholder="your@email.com" class="footerInput">
                    <button class="footerButton">Join</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="footerMenuTitle">Follow Us</h1>
                <div class="footerIcons">
                    <img src="./img/facebook.png" alt="" class="footerIcon">
                    <img src="./img/twitter.png" alt="" class="footerIcon">
                    <img src="./img/instagram.png" alt="" class="footerIcon">
                    <img src="./img/whatsapp.png" alt="" class="footerIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright"> All rights reserved to StockX Inc | 2023</span>
            </div>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</html>
<?php include'logincheck.php';