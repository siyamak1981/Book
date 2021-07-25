<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu bg-inverse">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('Backend/images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">{{ucfirst(Auth::user()->name)}}</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
               
                
          
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
            

                <li>
                    <a href="{{ route('admin.home')}}" class="waves-effect active bg-inverse text-white"><i class="zmdi zmdi-view-dashboard text-success"></i> <span> داشبورد </span> </a>
                </li>

 
                <li>
                    <a href="{{ route('tag.index') }}" class="waves-effect bg-inverse text-white"><i class="fa fa-comment-o text-info"></i> <span> تگها </span> </a>
                </li>
           
                <li>
                    <a href="{{ route('role.index') }}" class="waves-effect bg-inverse text-white"><i class="fa fa-certificate text-pink"></i> <span> نقشها </span> </a>
                </li>
             @can('posts.category',Auth::user())
                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect bg-inverse text-white"><i class="zmdi zmdi-format-underlined text-warning"></i> <span> دسته بندیها </span> </a>
                </li>
              @endcan
              @can('roles.permission',Auth::user())
                <li>
                    <a href="{{ route('permission.index') }}" class="waves-effect bg-inverse text-white"><i class="fa fa-transgender-alt text-primary"></i> <span>دستر سی ها </span> </a>
                </li>
              @endcan
                <li>
                    <a href="{{ route('user.showusers') }}" class="waves-effect bg-inverse text-white"><i class="fa fa-user text-info"></i> <span>کاربر ها</span> </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}" class="waves-effect bg-inverse text-white"><i class=" fa fa-sticky-note-o text-danger"></i> <span> نوشته ها </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect bg-inverse text-white"><i class="zmdi zmdi-collection-item text-warning"></i><span> دسته بندی ها </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                
                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect bg-inverse text-white"><span> دسته بندیها </span> </a>
                </li>
                <li>
                    <a href="{{ route('subcategory.index') }}" class="waves-effect bg-inverse text-white"><span> زیر مجموعه  </span> </a>
                </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect bg-inverse text-white"><i class="fa fa-camera text-warning"></i><span>کوپن </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                
                <li>
                    <a href="{{ route('coupon.index') }}" class="waves-effect bg-inverse text-white"><span>کوپن تخفیف</span> </a>
                </li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect bg-inverse text-white"><i class="fa fa-camera text-warning"></i><span>دیگر </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                
                <li>
                    <a href="{{ route('newslater.index') }}" class="waves-effect bg-inverse text-white"><span>خبر نامه ها </span> </a>
                </li>
                <li>
                    <a href="{{ URL::to('admin/contact-us') }}" class="waves-effect bg-inverse text-white"><span>تماس با ما </span> </a>
                </li>
                <li>
                    <a href="{{ URL::to('admin/advertising') }}" class="waves-effect bg-inverse text-white"><span> تبلیغ  </span> </a>
                </li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect bg-inverse text-white"><i class="fa fa-comment text-pink"></i><span>محصولات </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                
                <li>
                    <a href="{{ route('product.index') }}" class="waves-effect bg-inverse text-white"><span>محصول </span> </a>
                </li>

                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->