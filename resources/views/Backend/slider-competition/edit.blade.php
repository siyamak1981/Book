@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')
@section('headSection')
<link href="{{ asset('Backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">


        <div class="row">
            @include('includes.messages')

            <form role="form" action="{{ route('slider-competition.update',$slider-competition->id) }}" class="form-horizontal" 
                 method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <div class="card-box">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-30">پیشفرض</h4>
                        <img src="{{Storage::disk('local')->url('slider-competition/photo/'.$slider-competition->image)}}" style="width: 70px; height:70px;margin-bottom:50px">
                        <input type="file" name="image" class="dropify" data-height="300" />
                        
                  
                    </div>
                    <div class="col-sm-12">
                        <div class="col-lg-6 m-t-30">
                            <div class="form-group">
                                <label class="col-md-2 control-label"> خلاصه </label>
                                <div class="col-md-10">
                                    <input type="text" name="title" class="form-control" value="{{ $slider-competition->title }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">اسلاگ </label>
                                <div class="col-md-10">
                                    <input type="text" name="slug" class="form-control" value="{{ $slider-competition->slug }}">
                                </div>
                            </div>
                            <div class="col-lg-6 m-t-30">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">وضعیت</label>
                                <div class="col-sm-6">
                                    <div class="checkbox checkbox-pink">
                                        <input id="checkbox1" type="checkbox" name="status" data-parsley-multiple="groups" data-parsley-mincheck="2" data-parsley-id="69" value="1" @if ($slider-competition->status == 1)
                                        {{'checked'}}
                                        @endif>
                                        <label for="checkbox1"> انتشار </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-6 m-t-30">

                            <div class="form-group">
                                <label class="col-md-2 control-label"> توضیح عکس </label>
                                <div class="col-md-10">
                                    <input type="text" name="alt" class="form-control" value="{{ $slider-competition->alt }}">
                                </div>
                            </div>

                         
                        </div>

                    </div><!-- end col -->


                    <div class="col-lg-12">
                        <div class="card-box">
                            <textarea id="elm1" name="body"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-right m-r-5">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            ورود
                        </button>
                        <a type="submit" href="{{ route('slider-competition.index') }}" class="btn btn-default waves-effect waves-light m-l-5">
                            برگشت
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- end row -->
</div>



@endsection
@section('footerSection')
<script src="{{ asset('Backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script>
    var resizefunc = [];
</script>
<script src="{{ asset('Backend/plugins/fileuploads/js/dropify.min.js') }}"></script>


<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'فایل را به اینجا بکشید یا کلیک کنید',
            'replace': 'برای جایگزینی فایل را به اینجا بکشید یا کلیک کنید',
            'remove': 'پاک کردن',
            'error': 'با پوزش فراوان، خطایی رخ داده'
        },
        error: {
            'fileSize': 'حجم فایل بیشتر از حد مجاز است (1M).'
        }
    });
</script>

<script src="{{ asset('Backend/plugins/tinymce/tinymce.min.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        if ($("#elm1").length > 0) {
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "rtl insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [{
                        title: 'Bold text',
                        inline: 'b'
                    },
                    {
                        title: 'Red text',
                        inline: 'span',
                        styles: {
                            color: '#ff0000'
                        }
                    },
                    {
                        title: 'Red header',
                        block: 'h1',
                        styles: {
                            color: '#ff0000'
                        }
                    },
                    {
                        title: 'Example 1',
                        inline: 'span',
                        classes: 'example1'
                    },
                    {
                        title: 'Example 2',
                        inline: 'span',
                        classes: 'example2'
                    },
                    {
                        title: 'Table styles'
                    },
                    {
                        title: 'Table row 1',
                        selector: 'tr',
                        classes: 'tablerow1'
                    }
                ]
            });
        }
    });
</script>

@endsection