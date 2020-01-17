@extends('layouts.layout')

@section('title')
{{'مقایسه'}}
@endsection

@section('content')

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{url('compare')}}">مقایسه محصولات</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">مقایسه محصولات</h1>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td colspan="4"><strong>جزئیات محصول</strong></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>محصولات</td>
                  <td><a href="{{url('product')}}"><strong>لپ تاپ ایلین ور</strong></a></td>
                  <td><a href="{{url('product')}}"><strong>کتاب آموزش باغبانی</strong></a></td>
                  <td><a href="{{url('product')}}"><strong>تبلت ایسر</strong></a></td>
                </tr>
                <tr>
                  <td>تصویر</td>
                  <td class="text-center"><img class="img-thumbnail" title="لپ تاپ ایلین ور" alt="لپ تاپ ایلین ور" src="image/product/macbook_air_1-90x90.jpg"></td>
                  <td class="text-center"><img class="img-thumbnail" title=" کتاب آموزش باغبانی " alt=" کتاب آموزش باغبانی " src="image/product/macbook_pro_1-90x90.jpg"></td>
                  <td class="text-center"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="image/product/samsung_tab_1-90x90.jpg"></td>
                </tr>
                <tr>
                  <td>قیمت</td>
                  <td><span class="price-old">12 میلیون تومان</span> <span class="price-new">10 میلیون تومان</span></td>
                  <td><span class="price-old">120000 تومان</span> <span class="price-new">98000 تومان</span></td>
                  <td><span class="price-old">240000 تومان</span> <span class="price-new">98000 تومان</span></td>
                </tr>
                <tr>
                  <td>مدل</td>
                  <td>محصولات 17</td>
                  <td>محصولات 18</td>
                  <td>SAM1</td>
                </tr>
                <tr>
                  <td>برند</td>
                  <td>اپل</td>
                  <td>اپل</td>
                  <td>اپل</td>
                </tr>
                <tr>
                  <td>وضعیت موجودی</td>
                  <td>موجود</td>
                  <td>موجود</td>
                  <td>پیش سفارش</td>
                </tr>
                <tr>
                  <td>رتبه</td>
                  <td class="rating"><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                    بر اساس 0 بررسی</td>
                  <td class="rating"><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                    بر اساس 0 بررسی</td>
                  <td class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                    بر اساس 1 بررسی.</td>
                </tr>
                <tr>
                  <td>خلاصه</td>
                  <td class="description">مک بوک ایر ساده و سریع و سبک چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد..</td>
                  <td class="description"> آخرین دستاورد های روز دنیا

                    سامسونگ باز هم چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت...</td>
                  <td class="description">گلکسی تب 10.1, سامسونگ باز هم چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت...</td>
                </tr>
                <tr>
                  <td>وزن</td>
                  <td>1.50kg</td>
                  <td>1.80kg</td>
                  <td>2.00kg</td>
                </tr>
                <tr>
                  <td>ابعاد (طول - عرض - ارتفاع)</td>
                  <td>0.00mm x 0.00mm x 0.00mm</td>
                  <td>0.00mm x 0.00mm x 0.00mm</td>
                  <td>0.00cm x 0.00cm x 0.00cm</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td></td>
                  <td><input type="button" onClick="" class="btn btn-primary btn-block" value="افزودن به سبد">
                    <a class="btn btn-danger btn-block" href="#">حذف</a></td>
                  <td><input type="button" onClick="" class="btn btn-primary btn-block" value="افزودن به سبد">
                    <a class="btn btn-danger btn-block" href="#">حذف</a></td>
                  <td><input type="button" onClick="" class="btn btn-primary btn-block" value="افزودن به سبد">
                    <a class="btn btn-danger btn-block" href="#">حذف</a></td>
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
