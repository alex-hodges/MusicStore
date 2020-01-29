<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Related Products</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                
                <div class="product_grid">
                    @foreach($mightAlsoLike as $product)
                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="{{asset ('images/product_1.jpg')}}" alt=""></div>
                        <div class="product_extra product_new"><a href="/shop">New</a></div>
                        <div class="product_content">
                        <div class="product_title"><a href="/product/{{$product->slug}}">{{$product->name}}</a></div>
                        <div class="product_price">{{$product->PresentPrice()}}</div>
                        </div>
                    </div>
                    @endforeach           

                </div>
            </div>
        </div>
    </div>
</div>