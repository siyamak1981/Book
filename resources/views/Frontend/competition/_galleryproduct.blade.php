<div class="partner-area app-partner">
    <div class="container">
        <div class="row">
            <div class="partner-slides">
                @foreach($products as $product)  
                <div class="col-lg-12">
                    <div class="item">
                        <a href="#">
                        <img src="{{URL::to($product->image_one)}}" />
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>