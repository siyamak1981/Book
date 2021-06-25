<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu bg-inverse">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('Backend/images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">علی یدالهی</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
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
                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect bg-inverse text-white"><i class="zmdi zmdi-format-underlined text-warning"></i> <span> دسته بندیها </span> </a>
                </li>
              
                <li>
                    <a href="{{ route('permission.index') }}" class="waves-effect bg-inverse text-white"><i class="fa fa-transgender-alt text-primary"></i> <span>دستر سی ها </span> </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}" class="waves-effect bg-inverse text-white"><i class=" fa fa-sticky-note-o text-danger"></i> <span> نوشته ها </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect bg-inverse text-white"><i class="zmdi zmdi-collection-item text-warning"></i><span> برگه ها </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="page-starter.html">برگه خالی</a></li>
                        <li><a href="page-login.html">ورود</a></li>
                        <li><a href="page-register.html">ثبت نام</a></li>
                        <li><a href="page-recoverpw.html">فراموشی رمز</a></li>
                        <li><a href="page-lock-screen.html">قفل صفحه</a></li>
                        <li><a href="page-confirm-mail.html">تنظیمات ایمیل</a></li>
                        <li><a href="page-404.html">خطای 404</a></li>
                        <li><a href="page-500.html">خطای 500</a></li>
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