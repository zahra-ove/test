@extends('layouts.layout')

@section('title')
{{'لیست علاقمندی ها'}}
@endsection

@section('content')

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">حساب کاربری</a></li>
        <li><a href="{{url('wishlist')}}">لیست علاقه مندی من</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">لیست آرزوی من</h1>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td class="text-center">تصویر</td>
                  <td class="text-left">نام محصول</td>
                  <td class="text-left">مدل</td>
                  <td class="text-right">موجودی</td>
                  <td class="text-right">قیمت واحد</td>
                  <td class="text-right">عملیات</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"><a href="{{url('product')}}"><img src="image/product/samsung_tab_1-50x50.jpg" alt="تبلت ایسر" title="تبلت ایسر" /></a></td>
                  <td class="text-left"><a href="{{url('product')}}">آیپاد کلاسیک</a></td>
                  <td class="text-left">محصول 20</td>
                  <td class="text-right">موجود</td>
                  <td class="text-right"><div class="price"> 400000 تومان </div></td>
                  <td class="text-right"><button class="btn btn-primary" title="" data-toggle="tooltip" onClick="cart.add('48');" type="button" data-original-title="افزودن به سبد"><i class="fa fa-shopping-cart"></i></button>
                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="http://localhost/2.2.0.0-compiled/index.php?route=account/wishlist&amp;remove=48" data-original-title="حذف"><i class="fa fa-times"></i></a></td>
                </tr>
                <tr>
                  <td class="text-center"><a href="{{url('product')}}"><img src="image/product/sony_vaio_1-50x50.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" /></a></td>
                  <td class="text-left"><a href="{{url('product')}}">گلکسی تب 10.1</a></td>
                  <td class="text-left">SAM1</td>
                  <td class="text-right">پیش سفارش</td>
                  <td class="text-right"><div class="price"> 600000 تومان </div></td>
                  <td class="text-right"><button class="btn btn-primary" title="" data-toggle="tooltip" onClick="" type="button" data-original-title="افزودن به سبد"><i class="fa fa-shopping-cart"></i></button>
                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="حذف"><i class="fa fa-times"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
</div>

@endsection
