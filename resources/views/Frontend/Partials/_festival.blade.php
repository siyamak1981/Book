@php
$festivals = App\Models\Festival::where('status', 1)->get();
@endphp
<div class="overview-box">
                <div class="row h-100 justify-content-center align-items-center">
                @foreach($festivals as $festival)
                    <div class="col-lg-6 col-md-6 overview-content">
                        <div class="icon">
                            <i class="icofont-anchor"></i>
                        </div>
                        <h3>{{$festival->title }}</h3>
            <p>{!! htmlspecialchars_decode($festival->subtitle) !!}!</p>       
            <p>{!! htmlspecialchars_decode($festival->body) !!}</p>
                        <a href="#" class="btn btn-primary">ادامه مطلب</a>
                    </div>

                    <div class="col-lg-6 col-md-6 overview-img">
                        <img src="{{Storage::disk('local')->url('festival/'.$festival->image)}}" alt="image">
                    </div>
                    @endforeach
                </div>
            </div>