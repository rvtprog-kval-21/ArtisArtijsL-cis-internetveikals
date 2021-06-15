@extends('layouts.app')

@section('content')

    <div class="container">
        <!----------------------- Logo ---------------------->
        <div class="navbar">
            <div class="logo">
                <a href="/"><img src="{{ asset('/storage/pic/reisa.logo.png') }}" width="125px"></a>
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
            <img src="{{ asset('/storage/pic/cart.png') }}" width="30px" height="30px">
        </div>
    </div>

    <!-- products screen -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-12">
                <div class="small-img-row">
                    @foreach($product->images as $image)
                        <div class="small-img-col">
                            <img src="{{ asset('/storage/products/'.$image->image) }}"  width="600" class="small-img">
                        </div>
                    @endforeach()
                </div>


            </div>
            <div class="col-10">
                <p><a href="index.blade.php">Home</a> /<a href="products.blade.php"> Products</a></p>
                <h1>{{ $product->name }}</h1>
                <p>${{ $product->price }}</p>

                <select>
                    <option>Select size</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                </select>
                <input type="number" value="1">


                <button class="btn" onclick="text();" > Buy </button>

                @if(Session::get('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}

                <br>
                <b id="t" > </b>
                <br>
                &nbsp;
                &nbsp;
                &nbsp;
                <h3><i class="fa fa-minus"></i> About the product</h3>
                <div class="product-text">
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
            </div>

        </div>
    </div>



    <!-- main title -->

    <div class="small-conteiner">
        <div class="row row-2">
            <h2>Other Products</h2>
            <p><a href="products.blade.php">View more</a></p>
        </div>
    </div>


    <!------- ? -------->
{{--        piedavatie produkti--}}
    <div class="small-conteiner">

        <div class="row">
            <div class="col-4">
                <a href="/products/2"><img src="{{ asset('/storage/pic/fendi/1.jpg') }}"></a>
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
                <a href="/products/3"><img src="{{ asset('/storage/pic/prada/prada1.jpg') }}"  width="500" height="315"></a>
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
                <a href="/products/7"><img src="{{ asset('/storage/pic/dress/1.jpg') }}"></a>
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
                <a href="/products/8"><img src="{{ asset('/storage/pic/burberry/bra1.jpg') }}"  ></a>
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
{{-- fottera dala--}}
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
