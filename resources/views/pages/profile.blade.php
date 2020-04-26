@extends('layouts.client-base')



@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/7.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <h1>Profile</h1>
        <span>Profile. </span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">

        <!-- Row -->
        <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{ asset('material/images/users/5.jpg')}}" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{ Sentinel::getUser()->full_name }}</h4>
                                    <!-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> -->
                                    <div class="list-group">                                        
                                        <a href="{{ route('myorder', Sentinel::getUser()->id)}}" class="list-group-item list-group-item-action clearfix">My Orders <i class="icon-credit-cards float-right"></i></a>                                                                                
                                    </div>                                    
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
                                <small class="text-muted">Email address </small>
                                <h6>{{ Sentinel::getUser()->email }}</h6>
                                
                                <small class="text-muted ">Phone</small>
                                <h6>{{ Sentinel::getUser()->phone_number }}</h6>
                                
                                <small class="text-muted">Street</small>                                
                                <h6>{{ Sentinel::getUser()->address }}</h6>

                                <small class="text-muted">City</small>                                
                                <h6>{{ Sentinel::getUser()->city }}</h6>

                                <small class="text-muted">Province</small>                                
                                <h6>{{ Sentinel::getUser()->province }}</h6>
                                                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">                                
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">                                
                                <!--second tab-->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">{{ Sentinel::getUser()->full_name }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Phone Number</strong>
                                                <br>
                                                <p class="text-muted">{{ Sentinel::getUser()->phone_number }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{ Sentinel::getUser()->email }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>City</strong>
                                                <br>
                                                <p class="text-muted">{{ Sentinel::getUser()->city }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <h4 class="font-medium m-t-30">Notifications</h4>
                                        <hr>
                                        <div class="message-box">
                                            <div class="message-widget">                                                
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><span class="round"><i class="mdi mdi-earth" style="position:relative; top:14px"></i></span></div>
                                                    <div class="mail-contnet">
                                                        <h5>New Product </h5> <span class="mail-desc">Ada Produk Baru Loh Guys</span> <span class="time">9:10 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"> <span class="round bg-success"><i class="mdi mdi-currency-usd" style="position:relative; top:14px"></i></span></div>
                                                    <div class="mail-contnet">
                                                        <h5>Invoices to pay</h5> <span class="mail-desc">Invoice Id : #12345 dengan jumlah Rp 3.500.000 </span> <span class="time">9:08 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><span class="round bg-danger"><i class="mdi mdi-tag-remove" style="position:relative; top:14px"></i></span></div>
                                                    <div class="mail-contnet">
                                                        <h5>Invoice Canceled</h5> <span class="mail-desc">Kamu membatalkan Invoice #112333</span> <span class="time">9:02 AM</span> </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="{{ route('registerUpdate', Sentinel::getUser()->id)}}" method="POST">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ Sentinel::getUser()->full_name }}" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{ Sentinel::getUser()->email }}" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" value="{{ Sentinel::getUser()->password }}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone Number</label>
                                                <div class="col-md-12">
                                                    <input type="number" value="{{ Sentinel::getUser()->phone_number }}" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Street</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ Sentinel::getUser()->address }}" placeholder="Jalan Kemang" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">City</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ Sentinel::getUser()->city }}" placeholder="Jakarta" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Province</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ Sentinel::getUser()->province }}"placeholder="Jakarta Selatan" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

    </div>

</div>
@endsection
