@extends('layouts.client-base')



@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        <span>Make your order here.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">

        <div class="col-lg-12 text-center">
            <h2>Order Information</h2>
            <h4>Choose category for your product</h4>
        </div>
        <div class="feature-box fbox-center fbox-effect nobottomborder" >
            <div class="fbox-icon">
                <i class="icon-box"></i>
            </div>
            @if ($product->category_id == 1)
            <h3>Desain Produksi</h3>
            @elseif ($product->category_id == 2)
            <h3>Desain Non Produksi</h3>
            @else
            <h3>Video</h3>
            @endif
        </div>

        <div class="">
            <form method="" class="row center my-auto">

                <div class="col-lg-12 category-form form-group">
                    <label for="exampleFormControlSelect1">Select category</label>
                    <select class="form-control " id="exampleFormControlSelect1">
                        @foreach($products as $row)
                        <option value="{{$row->id}}">{{$row->value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-12 form-group">
                    <a href="{{ route('productOrder', 1)}}" class="btn btn-primary" onclick="parentNode.submit()">Next Step</a>
                </div>
                {{-- @endforeach --}}
            </form>
        </div>
    </div>
</div>

@endsection
