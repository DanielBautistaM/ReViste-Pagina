@extends('user_template.layouts.template')
@section('main-content')
    
    <!-- fashion section start -->
    <h2 class="py-5">Pagina Principal</h2>
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Hombre & Mujer Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/tshirt-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/dress-shirt-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Bufanda de Mujer</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/women-clothes-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Hombre & Mujer Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/tshirt-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/dress-shirt-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Bufanda de Mujer</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img
                                                src="{{ asset('home/images/women-clothes-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Hombre & Mujer Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/tshirt-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Camisa de Hombre</h4>
                                        <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="{{ asset('home/images/dress-shirt-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Bufanda de Mujer</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img
                                                src="{{ asset('home/images/women-clothes-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- fashion section end -->
    <!-- electronic section start -->
    <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Electronica</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Portatil</h4>
                                        <p class="price_text">Mejor Precio <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Telefono</h4>
                                        <p class="price_text">Precio Inicial <span style="color: #262626;">$ 100</span>
                                        </p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">BComprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computadores</h4>
                                        <p class="price_text">Mejor Precio <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img
                                                src="{{ asset('home/images/computer-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Electronica</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Portatiles</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Telefonos</h4>
                                        <p class="price_text">Mejor precio <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computadoras</h4>
                                        <p class="price_text">Precio Inicial <span style="color: #262626;">$ 100</span>
                                        </p>
                                        <div class="electronic_img"><img
                                                src="{{ asset('home/images/computer-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Electronica</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Portatiles</h4>
                                        <p class="price_text">Mejor Precio <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/laptop-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Telefonos</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="{{ asset('home/images/mobile-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computadoras</h4>
                                        <p class="price_text">Precio Inicial <span style="color: #262626;">$ 100</span>
                                        </p>
                                        <div class="electronic_img"><img
                                                src="{{ asset('home/images/computer-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- electronic section end -->
    <!-- jewellery  section start -->
    <div class="jewellery_section">
        <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Accesorios De Joyeria</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Aros Indios</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Collares</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Brazalete</h4>
                                        <p class="price_text">Mejor Precio <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Accesorios De Joyeria</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Aros Indios</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Collares</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Brazalete</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Accesorios De Joyeria</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Aros Indios</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/jhumka-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Collares</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/neklesh-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Brazalete</h4>
                                        <p class="price_text">Precio Inical <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('home/images/kangan-img.png') }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Comprar Ahora</a></div>
                                            <div class="seemore_bt"><a href="#">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- jewellery  section end -->
@endsection