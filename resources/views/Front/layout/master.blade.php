<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>common Website Template</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Conveyance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('/') }}viewend/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}viewend/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('/') }}viewend/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
   <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <section class="main-content" id="home">
        <!-- /header -->
        <header>
            <div class="container-fluid px-lg-5 px-3">
                <!-- nav -->
                <nav class="py-2 d-lg-flex">
                    <div id="logo">
                        <h1><a class="navbar-brand logo" href="index.html">
                                 Conveyance
                            </a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu ml-auto">
                        @foreach($menus as $menu)
                        <li><a href="index.html">{{$menu->menu_name}}</a></li>
                        @endforeach
                    </ul>

                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

    </section>

    <!--mian-content -->

    @yield('body-content')

    <!--// mian-content -->


	<!-- newsletter -->
    <section class="newslett py-5">
        <div class="container">
            <div class="header py-lg-5 py-3">
                <h3 class="tittle text-center mb-lg-3 mb-3"> Subscribe Now</h3>
            </div>
            <div class="contact-form mx-auto text-left pb-3">
                <form id="contactform" method="post" action="#">
                    <div class="row">
                        <div class="col-lg-4 con-gd-w3layouts">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd-w3layouts">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd-w3layouts">
                            <div class="form-group">
                                <label>Subscribe *</label>
                                <button type="submit" class="btn btn-default">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //newsletter -->
  
    
    <!-- footer -->
    <footer class="footer-content py-sm-5 py-4">
        <div class="container py-xl-5 py-lg-3">
            <div class="contact_grid_left">
                <ul class="list-unstyled row loaction-content">
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Address</h6>
                                <p>The company name
                                    <br>New York City. </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Email</h6>
                                <a href="mailto:info@example.com">mail@example.com</a>
                                <br>
                                <a href="mailto:info@example.com">mail2@example.com</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Phone Number</h6>
                                <p>+ 1234567890</p>
                                <p>+ 0987654321</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!-- social icons footer -->
            <div class="w3ls-footer text-center mt-4">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
							<span class="fa fa-facebook-f"></span>
						</a>
                    </li>
                    <li class="mx-1">
                        <a href="#">
							<span class="fa fa-twitter"></span>
						</a>
                    </li>
                    <li>
                        <a href="#">
							<span class="fa fa-dribbble"></span>
						</a>
                    </li>
                    <li class="ml-1">
                        <a href="#">
							<span class="fa fa-vk"></span>
						</a>
                    </li>
                </ul>
            </div>
            <!-- copyright -->
            <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2020 Conveyance. All Rights Reserved | Design by
                <a href="#"> Common Website </a>
            </p>
            <div class="top_move text-center">
                <a href="#home" class="move-top"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
            </div>
            <!-- //copyright -->
        </div>
    </footer>
    <!-- footer -->
</body>

</html>
