@extends('layouts.base')
@section('content')



<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>Category</strong></h1>
        <p class="consectetur_text">Discover your favourite top-of-the-line product in our category from various tech stores.</p>
    </div>
</div>
<div class="layout_padding gallery_section">
    <div class="container">
        <div class="row">
        @foreach ($categories as $test)
        <div class="col-sm-4">
            <div class="best_shoes">
                <p class="best_text" a class="nav" href={{ $test->cat_link }}>{{ $test->cat_name }}</p>
                <div class="shoes_icon"><img src={{ $test->cat_img }}></div>
                <div class="star_text">
                    <div class="left_part">
                        <ul>
                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                            <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                    </div>
                   <button class="buy_bt" style="float:right;" onclick="window.location='{{ url("/laptops") }}'" href={{ $test->cat_link }}>Buy Now</button>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection

