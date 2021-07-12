@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')
@section('headSection')
<link href="{{ asset('Backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">

      <div class="row">
        @include('includes.messages')

        <form role="form" action="{{ route('product.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card-box">
            <div class="col-sm-12">
              <div class="col-md-4">
                <h4 class="header-title m-t-0 m-b-30">نمونه اول</h4>
                <input type="file" class="dropify" name="image_one" data-default-file="{{asset('Backend/images/gallery/1.jpg') }}" />
              </div><!-- end col -->

              <div class="col-md-4">
                <h4 class="header-title m-t-0 m-b-30">نمونه دوم</h4>
                <input type="file" class="dropify" name="image_two" data-default-file="{{ asset('Backend/images/gallery/1.jpg') }}" />
              </div><!-- end col -->

              <div class="col-md-4">
                <h4 class="header-title m-t-0 m-b-30">نمونه سوم</h4>
                <input type="file" class="dropify" name="image_three" data-default-file="{{ asset('Backend/images/gallery/1.jpg') }}" />
              </div><!-- end col -->

              <div class="col-lg-6 m-t-30">
                <div class="form-group">
                  <label class="col-md-2 control-label"> نام محصول</label>
                  <div class="col-md-10">
                    <input type="text" name="product_title" class="form-control" placeholder="یک متن نومنه">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-md-2 control-label">خلاصه </label>
                  <div class="col-md-10">
                    <input type="text" name="product_summary" class="form-control" placeholder="متن درون نوشته">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">برگه 1 </label>
                  <div class="col-md-10">
                    <input type="text" name="leaves_one" class="form-control" placeholder="متن درون نوشته">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">برگه 2 </label>
                  <div class="col-md-10">
                    <input type="text" name="leaves_two" class="form-control" placeholder="متن درون نوشته">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">برگه 3 </label>
                  <div class="col-md-10">
                    <input type="text" name="leaves_three" class="form-control" placeholder="متن درون نوشته">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"> نویسنده</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_writer" class="form-control" placeholder="Helping text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> مترجم</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_translator" class="form-control" placeholder="Helping text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> تعداد صفحه</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_countpage" class="form-control" placeholder="Helping text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> ناشر </label>
                  <div class="col-sm-10">
                    <input type="text" name="product_publisher" class="form-control" placeholder="Helping text">
                  </div>
                </div>
              </div><!-- end col -->

              <div class="col-lg-6 m-t-30">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> قیمت </label>
                  <div class="col-sm-10">
                    <input type="text" name="selling_price" class="form-control" placeholder="Helping text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">تخفیف </label>
                  <div class="col-sm-10">
                    <input type="text" name="discount_price" class="form-control" placeholder="Helping text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">سطح </label>
                  <div class="col-sm-10">
                    <input type="text" name="product_level" class="form-control" placeholder="Helping text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">موضوع </label>
                  <div class="col-sm-10">
                    <input type="text" name="product_matter" class="form-control" placeholder="Helping text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"> نوع </label>
                  <div class="col-sm-10">
                    <input type="text" name="product_kind" class="form-control" placeholder="Helping text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">دسته بندی</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="category_id">
                      <option label="Choose Category"></option>
                      @foreach($category as $row)
                      <option value="{{ $row->id }}">{{ $row->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"> زیر مجموعه</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="subcategory_id">
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">وضعیت</label>
                  <div class="col-sm-6">
                    <div class="checkbox checkbox-pink">
                      <input id="checkbox1" type="checkbox" name="status" value="1" data-parsley-multiple="groups" data-parsley-mincheck="2" data-parsley-id="69">
                      <label for="checkbox1"> انتشار </label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end col -->
            <div class="col-lg-12">
              <div class="card-box">
                <textarea id="elm1" name="product_details"></textarea>
              </div>
            </div>
            <div class="form-group text-right m-r-5">
              <button class="btn btn-primary waves-effect waves-light" type="submit">
                ورود
              </button>
              <a type="submit" href="{{ route('product.index') }}" class="btn btn-default waves-effect waves-light m-l-5">
                برگشت
              </a>
            </div>
        </form>
      </div>
    </div><!-- end row -->
  </div>
</div><!-- end col -->


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
<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="category_id"]').on('change', function() {
      var category_id = $(this).val();
      if (category_id) {
        $.ajax({
          url: "{{ url('/get/subcategory/') }}/" + category_id,
          type: "GET",
          dataType: "json",
          success: function(data) {
            var d = $('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value) {
              $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.subcategory_name + '</option>');

            });
          },
        });

      } else {
        alert('danger');
      }

    });
  });
</script>
@endsection