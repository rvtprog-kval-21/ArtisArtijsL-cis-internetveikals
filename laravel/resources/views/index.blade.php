@extends('layouts.app')

@section('content')
<div class="header">

    <div class="container">
        <!----------------------- Logo ---------------------->
        <div class="navbar">
            <div class="logo">
                <a href="index.blade.php"><img src="{{ asset('/storage/pic/reisa.logo.png') }}" width="125px" alt="logomodel"></a>
            </div>
        <!--------------------------------------------------->

        <!-- -----------------------Menu -------------------->
            <nav>
                <ul>
                    <li><a href="index.blade.php">Home</a> </li>
                        <li><a href="/products">Products</a> </li>
                        <li><a href="/about">About Us</a> </li>
                        <li><a href="/email">Contact Us</a> </li>
                        <li><a href="/account">Account</a> </li>

                </ul>
            </nav>
            <img src="{{ asset('/storage/pic/cart.png') }}" width="30px" height="30px" alt="cart icon">
        </div>
        <!---------------------------------------------------->
        <div class="row">
            <div class="col-2">
                <h1>Fashion store <br> For you!</h1>
                <p>Style is something each of us already has, all we need to do is find it.<br> Fashions fade, style is eternal.</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="{{ asset('/storage/pic/model1.png') }}" alt="front model">

            </div>
        </div>
    </div>
</div>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

    <!------- featured products -------->
    <div class="small-conteiner">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/burberry/n1.jpg') }}"   alt="burrbery trench coat"></a>
                <h4>Burberry trench coat</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$750.00</p>
            </div>

            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/prada/prada1.jpg') }}"  width="500" height="315" alt="prada handbag"></a>
                <h4>Prada hand bag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>$2.550.00</p>
            </div>

            <div class="col-4">
                <a href="product.blade.php"><img src="{{ asset('/storage/pic/gucci/1.jpg') }}" alt="gucci cowboy boots"></a>
                <h4>Gucci cowboys boots</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$980.00</p>
            </div>

            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/versace/1.jpg') }}"  alt="versace flared trousers"></a>
                <h4>Versace flared trousers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>

                </div>
                <p>$750.00</p>
            </div>
        </div>
<!-----------------Products on Saaaaaaaaaalllleeeeee ------------------>
        <h2 class="title-2">Products on Sale</h2>
        <div class="row">
            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/fendi/1.jpg') }}" alt="fendi silk dress"></a>
                <h4>Fendi silk Shirtdress</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p class="sale">$700.00</p>
            </div>

            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/ysl/1.jpg') }}" alt="ysl pants" ></a>
                <h4>YSL pants</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p class="sale">$600.00</p>
            </div>

            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/dress/1.jpg') }}" alt="ganni dress"></a>
                <h4>Ganni Black and red dress</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p class="sale">$990.00</p>
            </div>

            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/burberry/bra1.jpg') }}"  alt="burberry sports bra"></a>
                <h4>Burberry sports bra</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>
                <p class="sale">$350.00</p>
            </div>
        </div>
    </div>


<!---------- offer ------------------------------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2" style="float: left; width: 40%; text-align: right;">
                <img src="{{ asset('/storage/pic/proactiv1.png') }}" class="offer-img"  width="70%" alt="asap rocky's personal style">
            </div>
            <div class="col-2" style="float: left; width: 60%; ">

                <p>Limited time Offer</p>
                <h1>Follow celebrity styles</h1>
                <div style="width: 50%;">We offer limited time opportunity to follow celebrity styles, and buy the same clothing
                your favorite idol wears. We are collaborating with many brands to make this project happen. This month in Our spotlight we have ASAP Rocky with hes
                Personal style and also chance for you to inspire from him.</div>
                <p></p>
                <a href="/products" class="btn">Read more &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!------------ testimonial --------------------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Clothes for every stile easy to find my way around, also the simplicity in style is great. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="{{ asset('/storage/pic/review1.jpeg') }}" alt="picture of person that wrote the review">
                    <h3>Sanna Park</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Magnificent, i can allways find what i like and what i would love to wear.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <img src="{{ asset('/storage/pic/review2.jpeg') }}" alt="picture of person who wrote the review">
                    <h3>Jack Bishop</h3>
                </div>
             <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Pefect design on the website, simple but yet so stylish, realy loving the webiste</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="{{ asset('/storage/pic/review3.jpeg') }}" alt="picture of person who wrote the review">
                <h3>Steven Irvin</h3>
                </div>
            </div>
        </div>
    </div>


<!-- --------- Footer ------------- -->

<div class="footer">
    <div class="conteiner">
        <div class="row">
            <div class="footer-col-1">
                <h3>Quality assured</h3>
                <p>with 98% customer satisfaction guarantee</p>
                <div class="app-logo">
                    <img src="{{ asset('/storage/pic/certified_PNG33.png') }}" alt="certified approval logo">
                </div>
            </div>
            <div class="footer-col-2">
                <!-- img -->
                <p>Reisa foundations, style and fashion for everyone</p>
            </div>
            <div class="footer-col-3">
                <h3>Reference Material</h3>
                <ul>
                    <li>Contact us</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Register</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Discord</li>
                    <li>Facebook</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Artis Artijs Lacis</p>
    </div>
</div>
@stop
