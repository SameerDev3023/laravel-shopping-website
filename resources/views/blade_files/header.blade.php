<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{URL::asset('css/header.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="sfh-navbar-container">
            <div class="sfh-navbar-wrapper">
                        <div class="navbar-toggle-wrapper">
                            <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="link-wrapper text-center" id="navbarCollapse">
                            <ul class="text-center">
                                <li><a>Become supplier</a></li>
                                <li><a>Contact us</a></li>
                                <li><a>Help &amp; support</a></li>
                            </ul>
                            <div class="sfh-close-btn-wrapper" id="sfh-navbar-close"> 
                                <i class="fa fa-close"></i>
                            </div>  
                        </div>
                        <div class="sfh-brand-wrapper text-center">
                            <h3><a id="sfh-brand-name">Star Fashion Hub</a></h3>
                        </div>
                        <form>
                            <div class="search-bar">
                                <input type="search" placeholder="Search Products" id="sfh-search-bar" />
                            </div>
                        </form>
                        <div class="sfh-icon-wrapper text-center">
                            <div class="sfh-like-product">
                                <i class="fa fa-heart-o" style="font-size:20px;margin-top:12px;margin-left:20px"></i>
                            </div>
                            <div class="sfh-cart-bag">
                                <i class="fa fa-shopping-bag" style="font-size:20px;margin-top:12px;margin-left:20px"></i>
                            </div>
                            <div class="sfh-user">
                                <i class="fa fa-user" style="font-size:20px;margin-top:12px;margin-left:20px"></i>
                            </div>
                        </div>
                </div> 
        </div>
  </div>
                <div id="sfh-nav-hanger-wrap">
                    <div id="sfh-nav-hanger" ></div>
                    <div id="sfh-nav-hanger3" ></div>
                    <div id="sfh-nav-hanger2" style="float:right"></div>
                    <div id="sfh-nav-hanger4" style="float:right"></div>
                </div>
        
            <div class="container">
                <div class="sfh-Main-navbar text-center">    
                    <div class="link-wrapper text-center" id="navbarCollapseChild">
                        <ul class="text-center">
                            <li><a>Men</a></li>
                            <li><a>Women</a></li>
                            <li><a>Kids</a></li>
                            <li><a>Beauty</a></li>
                            <li><a>Gifts Items</a></li>
                            <li><a>Accessories</a></li>
                        </ul>
                    </div>
                 </div>
            </div>
 

    <script src="{{URL::asset('js/navbar.js')}}"></script>
</body>
</html>
