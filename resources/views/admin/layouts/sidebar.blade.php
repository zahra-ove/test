
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- داشبورد --}}
        {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                داشبوردها
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد اول</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد دوم</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد سوم</p>
                </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                ویجت‌ها
                <span class="right badge badge-danger">جدید</span>
                </p>
            </a>
        </li> --}}

        {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                چارت‌ها
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار ChartJS</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Flot</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Inline</p>
                </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-tree"></i>
                <p>
                اشیای گرافیکی
                <i class="fa fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>عمومی</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>آیکون‌ها</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>دکمه‌ها</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اسلایدر‌ها</p>
                </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                فرم‌ها
                <i class="fa fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اجزا عمومی</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پیشرفته</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویشرایشگر</p>
                </a>
                </li>
            </ul>
        </li> --}}

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                جداول
                <i class="fa fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست کاربران</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.products.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست محصولات</p>
                </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.categories.index')}}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>لیست دسته بندی ها</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                صفحات
                <i class="fa fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>سفارشات</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پروفایل</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه ورود</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه عضویت</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>قفل صفحه</p>
                </a>
                </li>
            </ul>
        </li> --}}

    </ul>
</nav>
