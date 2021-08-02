
@php

$supporters =App\Models\Supporter::where('status', 1)->get(); 
@endphp
<div class="partner-area app-partner">
        <div class="container">
            <div class="section-title">
                <h2>حمایت کنندگان ما</h2>
                <div class="bar"></div>
                
            </div>
            <div class="row">
                <div class="partner-slides">
                    <div class="col-lg-12">
                        @foreach($supporters as $supporter)
                        <div class="item">
                            <a href="{{$supporter->link}}">
                                <img src="{{URL::to($supporter->image) }}" alt="{{$supporter->alt}}" />
                            </a>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
   