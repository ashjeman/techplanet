@extends('layouts.base')
@section('content')
	<!-- new collection section start -->
<div class="collection_text">Item Details</div>

<div class="about_main layout_padding">
    <div class="collection_section">
    <div class="container">
        <h1 class="item_name"><strong>{{$item['item_name']}} </strong></h1>
        <p class="spec_details">{{$item['item_desc']}}</p>
            <div class="details">
                <div class="image_div">
                    <img src="{{$item['item_img']}}" alt="">
                </div>
                <div class="product_spec">
                    <h1 class="pricetag"><strong>RM {{$item['item_price']}}</strong></h1>
                    <div class="new_text"> <strong>Product Specifications</strong> </div>
                    <div class="spec_details">
                        Brand: {{$item['item_brand']}}<br>
                        Chipset: {{$item['item_chipset']}}<br>
                        Warranty Period: {{$item['item_warranty']}} months<br>
                        Available unit: {{$item['item_available_unit']}}<br>
                        Store: {{$item['storeID']}}<br>
                        Rating: {{$item['item_rating']}}<br> <br> <br>

                        <button class="buy_bt" onclick="window.location='{{ url("/payment") }}'">Buy Now</button>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection
