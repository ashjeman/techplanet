@extends('layouts.base')
@section('content')
	<!-- new collection section start -->
<div class="collection_text">Item Details</div>

<div class="about_main layout_padding">
    <div class="collection_section">
    <div class="container">
        <h1 class="item_name"><strong>{{$item['item_brand']}} {{$item['item_model']}} </strong></h1>
        <p class="spec_details">{{$item['item_desc']}}</p>
            <div class="details">
                <div class="image_div">
                    <img src="images/GPU/asus_tuf_3080.png" alt="">
                </div>
                <div class="product_spec">
                    <h1 class="pricetag"><strong>RM {{$item['item_price']}}</strong></h1>
                    <div class="new_text"> <strong>Product Specifications</strong> </div>
                    <div class="spec_details">
                        Brand: {{$item['item_brand']}}<br>
                        Chipset: {{$item['item_chipset']}}<br>
                        Warranty Period: {{$item['item_warranty']}} months<br>
                        Available unit: {{$item['item_available_unit']}}<br>
                        Store: <br>
                        Rating: 5.0: {{$item['item_rating']}}<br>

                        <button class="buy_bt btn_margin">Buy Now</button>
                        <button class="more_bt">Add to Cart</button>

                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection
