@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')
@section('headSection')
<link href="{{ asset('Backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('Backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />

@endsection

@section('main-content')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">

      <div class="row">
        @include('includes.messages')

        <form role="form" action="{{ route('user.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="col-sm-12">
            <div class="card-box">
              <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                  <i class="zmdi zmdi-more-vert"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">فعال</a></li>
                  <li><a href="#">متن اول</a></li>
                  <li><a href="#">متن دوم</a></li>
                  <li class="divider"></li>
                  <li><a href="#">متن پاورقی</a></li>
                </ul>
              </div>
              <h4 class="header-title m-t-0 m-b-30">پیشفرض</h4>
              <input type="file" name="image" class="dropify" data-height="300" />

              <div class="col-lg-6 m-t-30">
                <div class="form-group">
                  <label class="col-md-2 control-label">نام</label>
                  <div class="col-md-10">
                    <input type="text" name="name" class="form-control" placeholder="نام">
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-md-2 control-label">لینک تلگرام</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="link_1" name="link_1" placeholder="Link_2" value="{{ old('link_1') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">لینک اینستاگرام</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="link_2" name="link_2" placeholder="Link_2" value="{{ old('link_2') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">لینک فیسبوک</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="link_3" name="link_3" placeholder="Link_3" value="{{ old('link_3') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">لینک لینکدین</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="link_4" name="link_4" placeholder="Link_4" value="{{ old('link_4') }}">
                  </div>
                </div>

              </div><!-- end col -->

              <div class="col-lg-6 m-t-30">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ایمیل </label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">تلفن </label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="phone" value="{{ old('phone') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">رمز ورود </label>
                  <div class="col-sm-10">
                    <input type="password" name="password" id="password" class="form-control" placeholder="password" value="{{ old('password') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">تکرار رمز</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm passowrd">
                  </div>
                </div>

         
                <div class="form-group">
                  <label class="col-sm-2 control-label">وضعیت انتشار</label>
                  <div class="col-sm-4">
                    <div class="checkbox checkbox-pink">
                      <input id="checkbox1" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2" name="status" @if (old('status')==1) checked @endif value="1">
                      <label for="checkbox1"> فعال </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label">موقعیت کاربر</label>
                <div class="col-md-10">
                  @foreach ($roles as $role)
                  <div class="checkbox checkbox-pink">
                      <input id="checkbox1" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2" name="role[]" value="{{ $role->id }}">
                      <label for="checkbox1"> {{ $role->name }} </label>
                    </div>
                  @endforeach
                </div>

              </div>
            </div><!-- end col -->
 
            <div class="form-group text-right m-r-5">
              <button class="btn btn-primary waves-effect waves-light" type="submit">
                ورود
              </button>
              <a type="submit" href="{{ route('user.index') }}" class="btn btn-default waves-effect waves-light m-l-5">
                برگشت
              </a>
            </div>
        </form>
      </div>
    </div><!-- end row -->
  </div>
</div><!-- end col -->
</div>
</div>
</div><!-- end col -->
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
@section('footerSection')
@endsection