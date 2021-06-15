@extends('layouts.app')

@section('content')

    <div class="main2">

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
                        <li><a href="/accout">Account</a> </li>

                    </ul>
                </nav>
                <img src="{{ asset('/storage/pic/cart.png') }}" width="30px" height="30px" alt="cart logo">
            </div>
            <!---------------------------------------------------->
            <div class="row">
                <div class="col-2">
                    <div class="contact-form">
                        <h1>Log in</h1>
                        <p>Don't have account yet? Press here to <a href="/account">register</a></p>



                        <form action="" method="POST">
                            @csrf
                            <div class="txtb">
                                <label for="nickname">Nickname: </label>
                                <input type="text" name="nickname" required placeholder="Enter Your Nickname" id="nickname" class="form-control">
                            </div>

                            <div class="txtb">
                                <label for="password">Password </label>
                                <input type="password" name="password" id="password" required placeholder="Enter Your Password" class="form-control">
                            </div>

                            <button type="submit" class="btn">Log in</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

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
