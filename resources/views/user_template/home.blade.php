@extends('user_template.layouts.template')
@section('main-content')

<!-- fashion section start -->
    <div class="fashion_section">
        <div id="main_slider" >

                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Todos los productos</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach ($allproducts as $product)


                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{$product->product_name}}</h4>
                                        <p class="price_text">Precio <span style="color: #262626;">${{$product->price}} </span></p>
                                        <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
                                        <div class="btn_main">
                                        <div class="buy_bt">
                                                <form action="{{route('addproducttocart')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                                    <input type="hidden" value="{{$product->price}}" name="price">
                                                    <input type="hidden" value="1" name="quantity">


                                                    <br>
                                                    <input class="btn btn-warning" type="submit" value="Comprar Ahora">
                                                </form>
                                            </div>

                                            <div class="seemore_bt"><a href="{{route('singleproduct',[$product->id,$product->slug])}}">Ver Mas</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                </div>

    <!-- fashion section end -->
    <!-- electronic section start -->
    
    <!-- electronic section end -->
<!-- jewellery  section start -->
<div class="jewellery_section">
    <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="fashion_section_2">
                        
                    </div>
                </div>
            </div>
            
        
        </div>
        
     

    </div>
</div>
<!-- jewellery  section end -->
@endsection
