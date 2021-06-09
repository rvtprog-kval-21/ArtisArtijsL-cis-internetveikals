@extends('layouts.app')

@section('content')
    <div class="container">
        <!----------------------- Logo ---------------------->
        <div class="navbar">
            <div class="logo">
                <a href="index.blade.php"><img src="{{ asset('/storage/pic/reisa.logo.png') }}" width="125px" alt="websites logo"></a>
            </div>
        <!--------------------------------------------------->

        <!-- -----------------------Menu -------------------->
            <nav>
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li><a href="/products">Products</a> </li>
                    <li><a href="/about">About</a> </li>
                    <li><a href="/email">Contact</a> </li>
                    <li><a href="/account">Account</a> </li>

                </ul>
            </nav>
            <img src="{{ asset('/storage/pic/cart.png') }}" width="30px" height="30px" alt="cart logo">
        </div>
        <!---------------------------------------------------->

    </div>



    <!------- featured products -------->
    <div class="small-conteiner">

        <div class="row row-2">
            <h2>All Products</h2>
            <label>
                <select>
                    <option>Sort by...</option>
                    <option>Price</option>
                    <option>Popularity</option>
                    <option>Avg. Reviews</option>
                    <option>Title</option>
                </select>
            </label>
        </div>

        <div class="row">
            <div class="col-4">
                <a href=""><img src="{{ asset('/storage/pic/burberry/n1.jpg') }}" alt="burberry trench coat"></a>
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
                <a href=""><img src="{{ asset('/storage/pic/prada/prada1.jpg') }}"  width="500" height="315" alt="prada handbag"></a>                <h4>Prada hand bag</h4>
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
                <p>$700.00</p>
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
                <p>$600.00</p>
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
                <p>$990.00</p>
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
                <p>$350.00</p>
            </div>
        </div>


    </div>

<!-- --------- Footer ------------- -->

<div class="footer">
    <div class="conteiner">
        <div class="row">
            <div class="footer-col-1">
                <h3>Quality assured</h3>
                <p>with 98% customer satisfaction gurantee</p>
                <div class="app-logo">
                    <img src="{{ asset('/storage/pic/certified_PNG33.png') }}" alt="certified approval logo">
                </div>
            </div>
            <div class="footer-col-2">
                <!-- img -->
                <p>Logo teksts, pec tam, lai aizvietotu ar istu tekstu,
                    pec laika protams, bet augstas kvalitates</p>
            </div>
            <div class="footer-col-3">
                <h3>Refrence Material</h3>
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
