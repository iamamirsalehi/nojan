<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nojan Namdar</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="/landing/n2.css">
    <link rel="stylesheet" href="/landing/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <body class="w3-black" id="body">

        <!-- Icon Bar (Sidebar - hidden on small screens) -->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="background-color:black;">
            <!-- Avatar image in top left corner -->
            <img src="/landing/images/logo.png" style="width:100%">
            <a href="#" class="black w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-home w3-xxlarge fa-left"></i>
                <p class="fa-left">HOME</p>
            </a>
            <a href="#about" class="black w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-user w3-xxlarge fa-left"></i>
                <p class="fa-left">ABOUT</p>
            </a>
            <a href="#photos" class="black w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-eye w3-xxlarge fa-left"></i>
                <p class="fa-left">PHOTOS</p>
            </a>
            <a href="#contact" class="black w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-envelope w3-xxlarge fa-left"></i>
                <p class="fa-left">CONTACT</p>
            </a>
        </nav>

        <!-- Navbar on small screens (Hidden on medium and large screens) -->
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
            <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
                <a href="#" class=" black w3-button" style="width:25% !important">HOME</a>
                <a href="#about" class=" black w3-button" style="width:25% !important">ABOUT</a>
                <a href="#photos" class=" black w3-button" style="width:25% !important">PHOTOS</a>
                <a href="#contact" class=" black w3-button" style="width:25% !important">CONTACT</a>
            </div>
        </div>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <header class="w3-container w3-padding-32 w3-center w3-black" id="home">


                <div class="none">
                    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Nojan Namdar.</h1>
                    <p>Photographer.</p>
                    <img src="/landing/images/n2 bg.png" alt="boy" class="w3-image" width="992" height="1108">
                </div>



                <div class="box">
                    <ul>
                        <li>
                            <a href="">Welcome to </a>
                        </li>
                        <li>
                            <a href=""> My</a>
                        </li>
                        <li>
                            <a href=""> Website</a>
                        </li>
                    </ul>
                </div>







            </header>

            <!-- About Section -->
            <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
                <h2 class="w3-text-light-grey">Belltza Studio</h2>
                <hr style="width:200px" class="w3-opacity">
                <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
                <p class="w3-wide">Photography</p>
                <div class="w3-white">
                    <div class="w3-dark-grey" style="height:28px;width:95%"></div>
                </div>

                <p class="w3-wide">Photoshop</p>
                <div class="w3-white">
                    <div class="w3-dark-grey" style="height:28px;width:90%"></div>
                </div><br>

                <!-- <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">11+</span><br> Partners
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">55+</span><br> Projects Done
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">89+</span><br> Happy Clients
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">150+</span><br> Meetings
                    </div>
                </div> -->

                <button class="w3-button w3-light-grey w3-padding-large w3-section">
              <i class="fa fa-download"></i> Download Resume
            </button>

                <!-- Grid for pricing tables -->
                <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half w3-margin-bottom">
                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="bg-pack w3-xlarge w3-padding-32"></li>
                            <li class="w3-padding-16">Photography</li>

                            <li class="w3-padding-16">
                                <h2>$ 10</h2>
                                <span class="w3-opacity">per month</span>
                            </li>
                            <!-- <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
                            </li> -->
                        </ul>
                    </div>

                    <div class="w3-half">
                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="bg-pack2 w3-xlarge w3-padding-32"></li>
                            <li class="w3-padding-16">Photography</li>

                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per month</span>
                            </li>
                            <!-- <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
                            </li> -->
                        </ul>
                    </div>
                    <!-- End Grid/Pricing tables -->
                </div>





                <!-- Testimonials -->
                <!-- <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>
                <img src="/w3images/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
                <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
                <p>John Doe saved us from a web disaster.</p><br>

                <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
                <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
                <p>No one is better than John Doe.</p> -->
                <!-- End About Section -->
            </div>

            <!-- Portfolio Section -->
            <div class="w3-padding-64 w3-content" id="photos">
                <h2 class="w3-text-light-grey title-section">New</h2>
                <!-- <hr style="width:200px" class="w3-opacity"> -->

                <!-- Grid for photos -->
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="/landing/images/img1.png" class="image">
                        <img src="/landing/images/img2.png" class="image">
                        <img src="/landing/images/img33.png" class="image">
                        <img src="/landing/images/img6.png" class="image">
                    </div>

                    <div class="w3-half">
                        <img src="/landing/images/img5.png" class="image">
                        <img src="/landing/images/img6.png" class="image">
                        <img src="/landing/images/img7.png" class="image">
                        <img src="/landing/images/img8.png" class="image">
                    </div>
                    <!-- End photo grid -->
                </div>
                <!-- End Portfolio Section -->
            </div>


            <section id="attachment-one">
                <div class="overlay-one">
                    <div class="textin-one">

                        <h2>Welcome to my Website</h2>


                    </div>
                </div>
            </section>


            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="row center">
                    <h2 class="w3-text-light-grey title-section">My Photos</h2>
                    <button class="seemore">See More</button>

                    <div class="carosans one">
                        <ul>

                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img2.png" alt="image" / id="img2">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img2)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img6.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img5.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>


                        </ul>


                    </div>
                    <h2 class="w3-text-light-grey title-section">My Photos</h2>
                    <button class="seemore">See More</button>

                    <div class="carosans two">


                        <ul>


                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img2.png" alt="image" / id="img2">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img2)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img6.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img5.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                            <li><img src="/landing/images/img1.png" alt="image" / id="img1">
                                <div class="wraper">
                                    <h2>Model Name</h2><button class="seephotoButton" onclick="onClick(img1)">SeePhoto</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>





                <section id="attachment">
                    <div class="overlay">
                        <div class="textin">

                            <h2>Follow Me On Instagram</h2>
                            <p>NojanNamdar</p>

                        </div>
                    </div>
                </section>









                <!-- Contact Section -->
                <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
                    <h2 class="w3-text-light-grey">Contact Me</h2>
                    <hr style="width:200px" class="w3-opacity">

                    <div class="w3-section">
                        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Tehran IR</p>
                        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +98 09355710109</p>
                        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Instagram : NojanNamdar</p>
                    </div><br>
                    <p>Let's get in touch. Send me a message:</p>
                    <!--
                    <form action="/action_page.php" target="_blank">
                        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
                        <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
                        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
                        <p> -->

                    <a href="https://www.instagram.com/nojannamdar/" target="_blank">
                        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                            <i class="fa fa-paper-plane"></i> SEND MESSAGE
                          </button>
                        </p>
                        <!-- </form> -->
                        <!-- End Contact Section -->
                </div>
                </a>






                <!-- Footer -->
                <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
                    <!-- <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i> -->
                    <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green">Taha__Namdar</a></p>
                    <!-- End footer -->
                </footer>

                <!-- END PAGE CONTENT -->
            </div>





            <!-- show full size image modal -->



            <div id="modal01" class="w3-modal bg-blur" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img id="img01" style="width:100%">
                </div>


    </body>
    <script src="/landing/js/jquery-3.5.1.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="/landing/js/bootstrap.js"></script>
    <script src="/landing/n2.js"></script>

</html>
