@extends('front.master')

@section('title')
    Details Product
@endsection

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Singlepage</li>
            </ol>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="agileinfo_single">

                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="{{ asset($product->product_image) }}" alt=" " class="img-responsive">
                </div>
                <div class="col-md-8 agileinfo_single_right">
                    <h2>{{ $product->product_name }}</h2>
                    <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                    </div>
                    <div class="w3agile_description">
                        <h4>Description :</h4>
                        <p>{{ $product->short_description }}</p>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            <h4 class="m-sing">TK {{ $product->product_price }}</h4>
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">

                            <form action="{{ route('add-to-cart') }}" method="post">
                                {{ csrf_field() }}
                                <fieldset>
                                    <input type="number" name="qty" value="1" min="1"/>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="agileinfo_single">
<p>{!! $product->long_description !!} </p>



            </div>
        </div>
    </div>
    <!-- new -->
    <div class="newproducts-w3agile">
        <div class="container">
            <h3>New offers</h3>
            <div class="agile_top_brands_grids">
                <div class="col-md-3 top_brand_left-1">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="images/offer.png" alt=" " class="img-responsive">
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="products.html"><img title=" " alt=" " src="images/14.png"></a>
                                            <p>Fried-gram</p>
                                            <div class="stars">
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                            </div>
                                            <h4>$35.99 <span>$55.00</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                    <input type="hidden" name="amount" value="35.99">
                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


@endsection