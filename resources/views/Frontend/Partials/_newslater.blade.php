@include('includes.messages')
<section class="subscribe-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>با جامعه ما ارتباط برقرار کنید</h2>
                <div class="bar"></div>
                <p>لطفا ایمیل خود را وارد نمایید تا از تازه ترین اخبار و مسابقات ما با خبر شوید.</p>
            </div>

            <form action="{{ route('store.newslater') }}" method="post" data-toggle="validator">
							@csrf
                <input type="email" class="form-control" placeholder="آدرس ایمیل شما" name="email" required autocomplete="off">
                <button class="btn btn-primary" type="submit">مشترک شدن</button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </section>