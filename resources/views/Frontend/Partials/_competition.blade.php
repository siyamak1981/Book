@php
$competitions = App\Models\Competition::where('status', 1)->get();
@endphp
<div class="overview-box">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-6 col-md-6 overview-img">
            @foreach($competitions as $competition)
            <img src="{{URL::to($competition->image) }}" alt="image">
        </div>

        <div class="col-lg-6 col-md-6 overview-content">
            <div class="icon">
                <i class="icofont-power"></i>
            </div>
            <h3>{{$competition->title}} </h3>
            <p>{!! htmlspecialchars_decode($competition->summary) !!}!</p>
            <p>{!! htmlspecialchars_decode($competition->body) !!}</p>

            <a href="Competitions.html" class="btn btn-primary">ادامه مطلب</a>
            @endforeach
        </div>
    </div>
</div>