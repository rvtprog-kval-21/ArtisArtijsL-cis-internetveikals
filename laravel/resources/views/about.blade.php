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
                    <li><a href="/about">About</a> </li>
                    <li><a href="/email">Contact</a> </li>
                    <li><a href="/account">Account</a> </li>

                </ul>
            </nav>
            <img src="{{ asset('/storage/pic/cart.png') }}" width="30px" height="30px" alt="cart icon">
        </div>
        <!---------------------------------------------------->
        <div class="row">
            <div class="col-2">
                <h1>About Us</h1>
                <p>Welcome to Reisa foundations, your number one source for all things related to fashion.
                    We're dedicated to providing you the very best of clothing, with an emphasis on fashion, style and comfort.
                    Founded in 2020 by Reisa herself, Reisa foundations has come a long way from its beginnings in Riga capital city of Latvia.
                    When Riesa first started out, her passion for fashion drove  to start her own business.</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="{{ asset('/storage/pic/model1.png') }}" alt="front model">

            </div>
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

                    <h1>Our lead web developer</h1>
                    <div style="width: 50%;">Our webiste was created by Atis Lacis. with his touch of style. we created this ecomerce website. Without him we wouldn't made it where
                    we are right now. With a lot of projects stil in future for our young web developer. We cant stress this enough how much we recommend  him to who ever is thinking of
                    recruiting him.</div>
                    <p></p>
                    <a href="" class="btn">Read more &#8594;</a>
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

