

@php

$newPost = App\Models\post::where('status', 1)->orderBy('created_at', 'ASC')->paginate(5);

@endphp
<div class="col-lg-4 col-md-12">
    <div class="sidebar-area">
        <div class="widget widget-search">
            <form>
                <input type="text" class="form-control" placeholder="جستجو">
                <button type="submit"><i class="icofont-search-2"></i></button>
            </form>
        </div>

        <div class="widget widget_product_categories">
            <h3 class="widget-title">دسته بندی محصولات</h3>
            <div class="bar"></div>

            <ul>
                @foreach($post->categories as $category)
                <li>
                    <a href="{{route('post.category', $category->slug)}}">{{$category->name}}</a>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="widget widget_recent_products">
            <h3 class="widget-title"> جدیدترین کتابها </h3>
            <div class="bar"></div>

            <ul>
                @foreach($products as $product)
                <li>
                    <div class="recent-products-thumb">
                        <a href="#">
                            <img src="{{ URL::to($product->image_one) }}" alt="blog-image">
                        </a>
                    </div>

                    <div class="recent-products-content">
                        <h3><a href="#">{{$product->product_title}}</a></h3>
                        <ul>
                            <li><i class="icofont-star"></i></li>
                            <li><i class="icofont-star"></i></li>
                            <li><i class="icofont-star"></i></li>
                            <li><i class="icofont-star"></i></li>
                            <li><i class="icofont-star"></i></li>
                        </ul>
                        <span class="date">{{$product->selling_price}} تومان</span>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="widget widget_tag_cloud">
            <h3 class="widget-title">پست اخیر </h3>
            <div class="bar"></div>

            <div class="tagcloud">
                @foreach($newPost as $npost)
                <a href="#">{{$npost->title}}</a>
                @endforeach
            </div>
        </div>
        <div class="widget widget_tag_cloud">
            <h3 class="widget-title">ترین های کتاب</h3>
            <div class="bar"></div>

            <div class="tagcloud">
                <a href="#">بانوی من زهرا</a>
                <a href="#">کتاب غدیرخم</a>
                <a href="#">روزشمار فاطمیه</a>
                <a href="#">کوثر معجزه پیغمبر</a>
                <a href="#">کشتی پهلو گرفته</a>
                <a href="#">تا ابد اندوه</a>
                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
            </div>
        </div>
        <div class="widget widget_tag_cloud">
            <h3 class="widget-title">ترین های کاربران</h3>
            <div class="bar"></div>

            <div class="tagcloud">
                <a href="#">بانوی من زهرا</a>
                <a href="#">کتاب غدیرخم</a>
                <a href="#">روزشمار فاطمیه</a>
                <a href="#">کوثر معجزه پیغمبر</a>
                <a href="#">کشتی پهلو گرفته</a>
                <a href="#">تا ابد اندوه</a>
                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
            </div>
        </div>
        <div class="widget widget_tag_cloud">
            <h3 class="widget-title">جدیدترین اخبار</h3>
            <div class="bar"></div>

            <div class="tagcloud">
                <a href="#">بانوی من زهرا</a>
                <a href="#">کتاب غدیرخم</a>
                <a href="#">روزشمار فاطمیه</a>
                <a href="#">کوثر معجزه پیغمبر</a>
                <a href="#">کشتی پهلو گرفته</a>
                <a href="#">تا ابد اندوه</a>
                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
            </div>
        </div>

        <div class="widget widget_text">
            <h3 class="widget-title">تبلیغات</h3>
            <div class="bar"></div>

            <ul>
                <li>
                    <a href="#">
                        <img src="assets/img/work-img1.jpg" alt="image">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/work-img2.jpg" alt="image">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/work-img3.jpg" alt="image">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/work-img4.jpg" alt="image">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/work-img5.jpg" alt="image">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/work-img6.jpg" alt="image">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>