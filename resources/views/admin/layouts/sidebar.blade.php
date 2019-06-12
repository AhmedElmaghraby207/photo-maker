<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset(App\User::first() ? App\User::first()->image : 'http://via.placehold.com/150x150')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{App\User::first()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
                <a href="{{route('profile.index')}}"><i class="fa fa-user"></i> الصفحة الشخصية</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="{{url('/photo-maker-home')}}">
                    <i class="fa fa-dashboard"></i> <span>الموقع (Photo Maker)</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{{url('/admin')}}">
                    <i class="fa fa-dashboard"></i> <span>الرئيسية</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>صور الصفحة الرئيسية</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('homePhotos.index')}}"><i class="fa fa-circle-o"></i> عرض الصور</a></li>
                    <li><a href="{{route('homePhotos.create')}}"><i class="fa fa-circle-o"></i> إضافة صورة</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>الالبومات</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> عرض الالبومات</a></li>
                    <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> إضافة ألبوم</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>الصور</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('photos.index')}}"><i class="fa fa-circle-o"></i> عرض الصور</a></li>
                    <li><a href="{{route('photos.create')}}"><i class="fa fa-circle-o"></i> إضافة صورة</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('about.index')}}">
                    <i class="fa fa-dashboard"></i> <span>من نحن</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('services.index')}}">
                    <i class="fa fa-dashboard"></i> <span>خدماتنا</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('services.index')}}"><i class="fa fa-circle-o"></i> عرض محتوى خدماتنا</a></li>
                    <li><a href="{{route('services.create')}}"><i class="fa fa-circle-o"></i> إضافة محتوى جديد</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{route('customers.index')}}">
                    <i class="fa fa-dashboard"></i> <span>العملاء</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('customers.index')}}"><i class="fa fa-circle-o"></i> عرض الالعملاء</a></li>
                    <li><a href="{{route('customers.create')}}"><i class="fa fa-circle-o"></i> إضافة عميل</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('info.index')}}">
                    <i class="fa fa-dashboard"></i> <span>تفاصيل الاتصال</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{{route('joins.index')}}">
                    <i class="fa fa-dashboard"></i> <span>المشاركين</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{{route('orders.index')}}">
                    <i class="fa fa-dashboard"></i> <span>الطلبات</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('packages.index')}}">
                    <i class="fa fa-dashboard"></i> <span>مجموعات خدماتنا</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('packages.index')}}"><i class="fa fa-circle-o"></i> عرض المجموعات</a></li>
                    <li><a href="{{route('packages.create')}}"><i class="fa fa-circle-o"></i> إضافة مجموعة</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>انواع مجموعات خدماتنا</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('options.index')}}"><i class="fa fa-circle-o"></i> عرض كل الانواع</a></li>
                    <li><a href="{{route('options.create')}}"><i class="fa fa-circle-o"></i> إضافة نوع جديد</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>الاعدادات</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('profile.index')}}"><i class="fa fa-circle-o"></i>الصفحة الشخصية</a></li>
                    <li><a href="{{route('footer.index')}}"><i class="fa fa-circle-o"></i>الفوتر</a></li>
                    <li><a href="{{route('settings.index')}}"><i class="fa fa-circle-o"></i>اللوجو & الايكون</a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
