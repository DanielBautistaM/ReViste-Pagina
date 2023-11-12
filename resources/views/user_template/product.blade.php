@extends('user_template.layouts.template')
@section('main-content')
<div class="container">

<div class="row">
            <div class="col-lg-4">
             <div class="box_main">

             <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
             </div>
            </div>
            <div class="col-lg-8">
              <div class="box_main">  <div class="product-info">
                <h4 class="shirt_text text-left">{{$product->product_name}}</h4>
                <p class="price_text text-left"> precio <span style="color: #262626;"> {{$product->price}}</span></p>
                </div> 
             <div class="my-3 product-details">
                <p class="lead">{{$product->product_long_des}}</p>
           <ul class="p-2 bg-light my-2 ">
            <li>Categoria - {{$product->product_category_name}}</li>
            <li>Sub Categoria - {{$product->product_subcategory_name}}</li>
            <li>Cantidad DIsponible - {{$product->quantity}}</li>
           </ul>

            </div>

            <div class="btn_main">

          <div class="btn btn-warning"><a href="#">Añadir al carrito</a></div>
           
            </div>
            </div>
        
            </div>                   
        </div>  

        <div class="fashion_section">
        <div id="main_slider" >
          
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Productos Relacionados</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                               
                            @foreach ($related_products as $product)

                              
<div class="col-lg-4 col-sm-4">
    <div class="box_main">
        <h4 class="shirt_text">{{$product->product_name}}</h4>
        <p class="price_text">Precio <span style="color: #262626;">${{$product->price}} </span></p>
        <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
        <div class="btn_main">
            <div class="buy_bt"><a href="#">Compra Ahora</a></div>
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
    </div>
@endsection()


