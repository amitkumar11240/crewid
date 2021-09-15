@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                              <div class="col-12 col-sm-8 col-md-6 col-lg-4" style="margin: auto">
                                <div class="card text-center">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item mr-auto ml-auto"><i class="fa fa-male text-success mx-2"></i>Your current subscription</li> 
                                    </ul>
                                  <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                    <h4 class="m-0"> Package : 
                                        @if (Auth::user()->pkg_num=='1')
                                            Free
                                        @endif
                                    </h4>                                    
                                  </div>
                                  <div class="card-body">
                                    <h1 class="m-0">@if (Auth::user()->pkg_num=='1')
                                        $0
                                    @endif</h1>
                                    <h5 class="text-muted"><small>per Month</small></h5>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Subscription Date : {{Auth::user()->pkg_date}}</li>
                                    <li class="list-group-item"><i class="fa fa-venus text-success mx-2"></i>Pay only for what you use</li>
                                  </ul>
                                  <div class="card-footer border-top-0">
                                    <a href="{{ route('package') }}" class="btn btn-wd btn-default btn-outline text-uppercase">Upgrade Account <i class="fa fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

@endsection