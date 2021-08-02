@php
$toristbooks = App\Models\ToristBook::where('status', 1)->get();
@endphp

<div class="overview-box">
    <div class="row h-100 justify-content-center align-items-center">
        @foreach($toristbooks as $toristbook)
        <div class="col-lg-6 col-md-6 overview-img">
            <img src="{{Storage::disk('local')->url('toristbook/'.$toristbook->image)}}" alt="image">
        </div>

        <div class="col-lg-6 col-md-6 overview-content">
            <div class="icon">
                <i class="icofont-book-alt"></i>
            </div>
            <h3>{{$toristbook->title }}</h3>
            <p>{!! htmlspecialchars_decode($toristbook->subtitle) !!}!</p>       
            <p>{!! htmlspecialchars_decode($toristbook->body) !!}</p>
            <a href="tourist-book.html" class="btn btn-primary">ادامه مطلب</a>
        </div>
        @endforeach
    </div>
</div>