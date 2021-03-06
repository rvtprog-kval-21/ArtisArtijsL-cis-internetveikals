@extends('layouts.app')

@section('content')

    <div class="main2">

        <div class="container">
            <!----------------------- Logo ---------------------->
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="{{ asset('/storage/pic/reisa.logo.png') }}" width="125px" alt="websites logo"></a>
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
            <div class="row">
            <div class="col-2">
            <div class="contact-form">
                <h1>Register</h1>
                <p>Already registered? Press here to <a href="/login">Login in</a></p>

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="txtb">
                    <label for="nickname">Nickname: </label>
                    <input type="text" name="nickname" required placeholder="Enter Your Nickname" id="nickname" class="form-control">
                </div>

                <div class="txtb">
                    <label for="password">Password </label>
                    <input type="password" name="password" id="password" required placeholder="Enter Your Password" class="form-control">
                </div>

                <div class="txtb">
                    <label for="phone">Phone number: </label>
                    <input type="number" name="phone" id="phone" required placeholder="Enter Your Phone" class="form-control">
                </div>

                <div class="txtb">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required placeholder="Enter Your Email" class="form-control">
                </div>

                <div class="txtb">
                    <label for="address">Address: </label>
                    <input type="text" name="address" id="address" required placeholder="Enter Your Address" class="form-control">
                </div>

                <div class="txtb">
                    <label for="address">Name: </label>
                    <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="form-control">
                </div>

                <button type="submit" class="btn">Register</button>
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
