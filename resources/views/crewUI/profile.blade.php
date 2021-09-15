@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <form class="form" method="" action="">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">My Profile</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Company (disabled)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Username" value="{{$data->fname.' '.$data->lname}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" disabled="" value="{{$data->email}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$data->fname}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Last Name" value="{{$data->lname}}">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <a href="{{ route('/crewInformations') }}"><button type="button" class="btn btn-info btn-fill pull-legt"style="margin-right:10px;">Fill Your Informations</button></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-header no-padding">
                                            <div class="card-image">
                                                <img src="../../assets/img/full-screen-image-3.jpg" alt="...">
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="author">
                                                <a href="#">
                                                    <img class="avatar border-gray" src="{{ Auth::user()->avatar }}" alt="...">
                                                    <h5 class="card-title">Tania Keatley</h5>
                                                </a>
                                                <p class="card-description">
                                                    michael24
                                                </p>
                                            </div>
                                            <p class="card-description text-center">
                                                Hey there! As you can see,
                                                <br> it is already looking great.
                                            </p>
                                        </div>
                                        <div class="card-footer ">
                                            <hr>
                                            <div class="button-container text-center">
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-facebook-square"></i>
                                                </button>
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-google-plus-square"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection