@extends('layouts.admin')

@section('content')



<div id="exTab1" class="container">	
<div class="row">  
    <div class="col-md-12">
<ul  class="nav nav-pills list-inline justify-content-center">
			<li class="active tabmenu">
        <a  href="#1a" data-toggle="tab"class="tabanchor">Personal Information</a>
			</li>
			<li class="tabmenu"><a href="#2a" data-toggle="tab"class="tabanchor">Physical Address</a>
			</li>
			<li class="tabmenu"><a href="#3a" data-toggle="tab"class="tabanchor">Mailing Address</a>
			</li>
  		<li class="tabmenu"><a href="#4a" data-toggle="tab"class="tabanchor">Vehicle Info</a>
			</li>
            <li class="tabmenu"><a href="#5a" data-toggle="tab"class="tabanchor">Emergency Contact</a>
			</li>
            <li class="tabmenu"><a href="#6a" data-toggle="tab"class="tabanchor">Identification</a>
			</li>
            <li class="tabmenu"><a href="#7a" data-toggle="tab"class="tabanchor">Tax Info</a>
			</li>
            <li class="tabmenu"><a href="#8a" data-toggle="tab"class="tabanchor">w9</a>
			</li>
            <li class="tabmenu"><a href="#9a" data-toggle="tab"class="tabanchor">State Tax</a>
			</li>
            <li class="tabmenu"><a href="#10a" data-toggle="tab"class="tabanchor">Demographics</a>
			</li>
            <li class="tabmenu"><a href="#11a" data-toggle="tab"class="tabanchor">Conflict of interest</a>
           
			</li>
            <li class="tabmenu"><a href="#12a" data-toggle="tab"class="tabanchor">Hiring Info</a>
            
			</li>
		</ul>   
    </div>     
</div>
        <form class="form" method="POST" action="{{ route('/save') }}" id="infoForm">
            @csrf

            @if(Session::has('require'))
                <div class="alert alert-danger">
                    {{session('require')}}
                </div>
            @endif

            {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                    <b> Validation Error </b> </span>
            </div>
         @endif --}}

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                   
                                                    <h4 class="card-title">Personal Information</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>First Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Company" value="{{$data->fname}}">
                                                            <input type="hidden" class="form-control" name="user_id" value="{{$data->id}}">
                                                            @if ($errors->has('first_name'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('first_name') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 px-1">
                                                        <div class="form-group">
                                                            <label>Middle Name</label>
                                                            <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" value="{{$data->mname}}">
                                                            {{-- @if ($errors->has('mname'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mname') }}
                                                             </div>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{$data->lname}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label for="Preffered_Name">Preffered Name</label>
                                                            <input type="text" class="form-control" name="Preffered_Name" placeholder="Preffered Name" value="{{old('Preffered_Name')}}">                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="email" value="{{$data->email}}" readonly>
                                                            {{-- @if ($errors->has('email'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('email') }}
                                                             </div>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">                                                    
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label for="Phone_Number">Phone Number <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="Phone_Number" id="Phone_Number" placeholder="Phone Number" value="{{old('Phone_Number')}}" required>                                                            
                                                            @if ($errors->has('Phone_Number'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('Phone_Number') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label for="Second_Phone_Number">Second Phone Number</label>
                                                            <input type="number" class="form-control" name="Second_Phone_Number" id="Second_Phone_Number" placeholder="Second Phone Number" value="{{old('Second_Phone_Number')}}">
                                                            @if ($errors->has('Second_Phone_Number'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('Second_Phone_Number') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">                                                    
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="date" name="DOB" id="DOB" class="form-control" placeholder="Date of Birth" value="{{old('DOB')}}">                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Social Security Number</label>
                                                            <input type="text" name="Social_Security_Number" class="form-control" placeholder="Social Security Number" value="{{old('Social_Security_Number')}}">                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="fname">Add Signature
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <canvas id="sig-canvas" width="300" height="100" style="border: groove;border-radius: 10px;">
                                                        
                                                        </canvas>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!--<button type="button" class="btn-clear" id="sig-clearBtn"><i class="fa fa-close"></i></button>-->
                                                        <button type="button" class="claerSign btn-clear" id="sig-clearBtn">Clear Signature</button>
                                                    </div>
                                                </div>
                                                <br />
                                                <div class="row" style="display: none">
                                                    <div class="col-md-12">
                                                        <textarea id="sig-dataUrl" class="form-control" rows="5" name="image_url" required></textarea>
                                                    </div>
                                                </div>
                                                <br />
                                                <div class="row" style="display: none">
                                                    <div class="col-md-12">
                                                        <span>Preview:</span>
                                                        <br>
                                                        <img id="sig-image" src="" alt="Your signature will go here!" name="image-body" />
                                                    </div>
                                                </div>
                                                {{-- <divvalue\></div> --}}
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="2a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Physical Address</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                            <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Street1 <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="street1" id="street1" placeholder="Street1"  required>
                                                            {{-- @if ($errors->has('street1'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('street1') }}
                                                             </div>
                                                            @endif --}}
                                                            <div id="show_suggestion"></div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Street2</label>
                                                            <input type="text" class="form-control" name="street2" id="street2" placeholder="Street2" >
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Postal Code <span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="postal_code" id="postal_code" placeholder="ZIP Code"  required>
                                                        {{-- @if ($errors->has('postal_code'))
                                                        <div class = "alert alert-danger">
                                                                  {{ $errors->first('postal_code') }}
                                                         </div>
                                                        @endif --}}
                                                        <div id="show_postal_suggestion"></div>
                                                    </div>
                                                    
                                                </div>
                                                    <div class="col-md-4 px-1">
                                                        <div class="form-group">
                                                            <label>City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="city" placeholder="City" id="city"  required>
                                                            @if ($errors->has('city'))
                                                            <div class = "alert alert-danger">
                                                                {{ $errors->first('city') }}
                                                       </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4  pl-1 ">
                                                        <div class="form-group">
                                                            <label>State <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="state" placeholder="state" id="state"  required>
                                                            @if ($errors->has('state'))
                                                            <div class = "alert alert-danger">
                                                                {{ $errors->first('state') }}
                                                       </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Apt No.</label>
                                                            <input type="number" class="form-control" name="apt_no" placeholder="Apt No" value="{{old('apt_no')}}">
                                                            {{-- @if ($errors->has('apt_no'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('apt_no') }}
                                                             </div>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="3a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Mailling Address</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                            <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Street1</label>
                                                            <input type="text" class="form-control" name="mailing_Street1" placeholder="Street1" id="mailing_Street1">
                                                            {{-- @if ($errors->has('mailing_Street1'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mailing_Street1') }}
                                                             </div>
                                                            @endif --}}  
                                                            <div id="mailing_show_suggestion"></div>                                                          
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Street2</label>
                                                            <input type="text" class="form-control" name="mailing_Street2" placeholder="Street2" value="{{old('mailing_Street2')}}">
                                                            {{-- @if ($errors->has('mailing_Street2'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mailing_Street2') }}
                                                             </div>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-4  pr-1">
                                                    <div class="form-group">
                                                        <label>Postal Code</label>
                                                        <input type="number" class="form-control" name="mailing_postal_code" id="mailing_postal_code" placeholder="ZIP Code" id="mailing_postal_code">
                                                        {{-- @if ($errors->has('mailing_postal_code'))
                                                        <div class = "alert alert-danger">
                                                                  {{ $errors->first('mailing_postal_code') }}
                                                         </div>
                                                        @endif --}}
                                                        <div id="mailing_show_postal_suggestion"></div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4 px-1">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" name="mailing_city" id="mailing_city" placeholder="City" value="{{old('mailing_city')}}">
                                                            @if ($errors->has('mailing_city'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mailing_city') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1 ">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" name="mailing_state" id="mailing_state" placeholder="Country" value="{{old('mailing_state')}}">
                                                            @if ($errors->has('mailing_state'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mailing_state') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Apt No.</label>
                                                            <input type="number" class="form-control" name="mailing_apt_no" placeholder="Apt No" value="{{old('mailing_apt_no')}}">
                                                            {{-- @if ($errors->has('mailing_apt_no'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('mailing_apt_no') }}
                                                             </div>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="4a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Vehicle Info</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Make</label>
                                                            <input type="text" class="form-control" name="Make" placeholder="Make" value="{{old('Make')}}">
                                                            @if ($errors->has('Make'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('Make') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Model</label>
                                                            <input type="text" class="form-control" name="Model" placeholder="Model" value="{{old('Model')}}">
                                                            @if ($errors->has('Model'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('Model') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>License Plate</label>
                                                            <input type="text" class="form-control" name="License_plate" placeholder="License Plate" value="{{old('License_plate')}}">
                                                            @if ($errors->has('License_plate'))
                                                            <div class = "alert alert-danger">
                                                                      {{ $errors->first('License_plate') }}
                                                             </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Color</label>
                                                            <input type="text" class="form-control" name="color" placeholder="Color" value="{{old('color')}}">
                                                            @if ($errors->has('color'))
                                                                <div class="alert alert-danger">
                                                                    {{$errors->first('color')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="5a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Emergency Contact</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="em_name" placeholder="Name" value="{{old('em_name')}}">
                                                            @if ($errors->has('em_name'))
                                                                <div class="alert alert-danger">
                                                                    {{$errors->first('em_name')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" name="em_mail" placeholder="" value="{{old('em_mail')}}">
                                                            @if ($errors->has('em_mail'))
                                                                <div class="alert alert-danger">
                                                                    {{$errors->first('em_mail')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Phone No.</label>
                                                            <input type="number" class="form-control" name="em_phone" placeholder="Phone No." value="{{old('em_phone')}}">
                                                            @if ($errors->has('em_phone'))
                                                                <div class="alert alert-danger">
                                                                    {{$errors->first('em_phone')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Relationship</label>
                                                            <input type="text" class="form-control" name="em_relations" placeholder="Relationship" value="{{old('em_relations')}}">
                                                            @if ($errors->has('em_relations'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('em_relations')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="card "id="second">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Add Another Emergency Contact</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Your Email</label>
                                                            <input type="text" class="form-control" disabled=""  placeholder="Your Email" value="Creative Code Inc.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Phone No.</label>
                                                            <input type="number" class="form-control" placeholder="Phone No." value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Relations</label>
                                                            <input type="text" class="form-control" placeholder="Relations" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                </div> 
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				{{-- </div> --}}
                <div class="tab-pane " id="6a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Identification</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                            <div class="row">
                                                    
                                                    <div class="col-md-12 ">

                                                        <div class="form-group">
                                                            <label>Citizenship</label>
                                                            <input type="text" class="form-control" name="Citizenship" placeholder="Citizenship" value="{{old('Citizenship')}}">
                                                            @if ($errors->has('Citizenship'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Citizenship')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            <div class="row">
                                                    
                                            <p class="card-title identificationpara">Add Drivers License</p>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-5 pr-1">

                                                        <div class="form-group">
                                                            <label>Issueing Authority</label>
                                                            <input type="text" class="form-control" name="Issueing_Authority"  placeholder="Issueing Authority" value="{{old('Issueing_Authority')}}">
                                                            @if ($errors->has('Issueing_Authority'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Issueing_Authority')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Number</label>
                                                            <input type="number" class="form-control" name="Number" placeholder="Number" value="{{old('Number')}}">
                                                            @if ($errors->has('Number'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Number')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Expiration</label>
                                                            <input type="date" class="form-control" name="Expiration" placeholder="Expiration"value="{{old('Expiration')}}">
                                                            @if ($errors->has('Expiration'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Expiration')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                            <p class="card-title identificationpara">Add Passport</p>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-5 pr-1">

                                                        <div class="form-group">
                                                            <label>Issueing Authority</label>
                                                            <input type="text" class="form-control" name="passport_Issueing_Authority" placeholder="Issueing Authority" value="{{old('passport_Issueing_Authority')}}">
                                                            @if ($errors->has('passport_Issueing_Authority'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('passport_Issueing_Authority')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Number</label>
                                                            <input type="number" class="form-control" name="passport_Number" placeholder="Number" value="{{old('passport_Number')}}">
                                                            @if ($errors->has('passport_Number'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('passport_Number')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Expiration</label>
                                                            <input type="date" class="form-control" name="passport_Expiration" placeholder="Expiration"value="{{old('passport_Expiration')}}">
                                                            @if ($errors->has('passport_Expiration'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('passport_Expiration')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="7a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Tax Info</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label for="">Marital Status</label>
                                                        <select id="mylist" name="Marital_Status" class="form-control">
                                                            <option selected disabled>Marital Status</option>
                                                            <option value="1" {{ old('Marital_Status') == '1' ? 'selected' : '' }}>Head of household</option>
                                                            
                                                        </select>
                                                        @if ($errors->has('Marital_Status'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Marital_Status')}}
                                                            </div>
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <label for="">Number of Dependents</label>
                                                        <div class="form-group">
                                                            <input id="Number_of_Dependents" name="Number_of_Dependents" value="{{old('Number_of_Dependents')}}" type="number" class="form-control" placeholder="Number of Dependents under 17" />
                                                            @if ($errors->has('Number_of_Dependents'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Number_of_Dependents')}}
                                                            </div>
                                                        @endif
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label for="">Other Dependents</label>
                                                        <div class="form-group">
                                                            <input id="Other_Dependents" name="Other_Dependents" type="number" class="form-control" placeholder="Other Dependents" value="{{old('Other_Dependents')}}" />
                                                            @if ($errors->has('Other_Dependents'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Other_Dependents')}}
                                                            </div>
                                                        @endif
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <label for="">Other Income</label>
                                                        <div class="form-group">
                                                            <input id="Other_Income" name="Other_Income" type="number" class="form-control" placeholder="Other Income" value="{{old('Other_Income')}}" />
                                                            @if ($errors->has('Other_Income'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Other_Income')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label for="">Deductions</label>
                                                        <div class="form-group">
                                                            <input id="Deductions" name="Deductions" type="number" class="form-control" placeholder="Deductions" value="{{old('Deductions')}}" />
                                                            @if ($errors->has('Deductions'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Deductions')}}
                                                            </div>
                                                        @endif
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <label for="">Additional amount to withold</label>
                                                        <div class="form-group">
                                                            <input id="Additional_amount_to_withold" name="Additional_amount_to_withold" type="number" class="form-control" placeholder="Additional amount to withold" value="{{old('Additional_amount_to_withold')}}" />
                                                            @if ($errors->has('Additional_amount_to_withold'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Additional_amount_to_withold')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label class="radio-inline">Exemption : <input type="radio" name="Exemption" value="Yes" checked> Yes</label>
                                                        <label class="radio-inline"><input type="radio" name="Exemption" value="No"> No</label>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="8a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">w9</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Business Name</label>
                                                            <input type="text" class="form-control" name="Business_Name" placeholder="Business Name" value="{{old('Business_Name')}}">
                                                            @if ($errors->has('Business_Name'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Business_Name')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>DBA</label>
                                                            <input type="text" class="form-control" name="DBA" placeholder="DBA" value="{{old('DBA')}}">
                                                            @if ($errors->has('DBA'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('DBA')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Federal Tax Classification</label>
                                                            <select class="form-control" name="Federal_Tax_Classification" ><option value="" selected disabled> - Select Federal Tax Classification- </option>

                                                                <option value="4" {{ old('Federal_Tax_Classification') == '4' ? 'selected' : '' }}>Individual/Sole Proprietor or Single Member LLC</option>

                                                                <option value="5" {{ old('Federal_Tax_Classification') == '5' ? 'selected' : '' }}>C Corp</option>

                                                                <option value="3" {{ old('Federal_Tax_Classification') == '3' ? 'selected' : '' }}>S Corp</option>

                                                                <option value="2" {{ old('Federal_Tax_Classification') == '2' ? 'selected' : '' }}>Partnership</option>

                                                                <option value="1" {{ old('Federal_Tax_Classification') == '1' ? 'selected' : '' }}>LLC Classification(if chosen add classifcation)</option>
                                                                
                                                                </select>
                                                                @if ($errors->has('Federal_Tax_Classification'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Federal_Tax_Classification')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Exemptions</label>
                                                            <input type="checkbox" class="Exemptions " name="showhidecheckbox">Exemptions                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row showthis">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Exemption payee code</label>
                                                            <input type="text" class="form-control" name="Exemption_payee_code" placeholder="Exemption payee code" value="{{old('Exemption_payee_code')}}">
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Exemption from Fatcha reporting code</label>
                                                                <input type="text" class="form-control" name="Exemption_from_Fatcha_reporting_code" placeholder="Exemption from Fatcha reporting code" value="{{old('Exemption_from_Fatcha_reporting_code')}}">
                                                            </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="9a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">State Tax</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Marital Status</label>
                                                            <select class="form-control" name="State_Tax_Marital_Status" ><option value="" selected disabled> - Select Marital Status- </option>

                                                                <option value="1" {{ old('State_Tax_Marital_Status') == '1' ? 'selected' : '' }}>Head of household</option>

                                                                <option value="2" {{ old('State_Tax_Marital_Status') == '2' ? 'selected' : '' }}>Married</option>

                                                                <option value="3" {{ old('State_Tax_Marital_Status') == '3' ? 'selected' : '' }}>Married filling jointly</option>

                                                                <option value="4" {{ old('State_Tax_Marital_Status') == '4' ? 'selected' : '' }}>Married filling separately</option>

                                                                <option value="5" {{ old('State_Tax_Marital_Status') == '5' ? 'selected' : '' }}>Single</option>
                                                                
                                                                </select>
                                                                @if ($errors->has('State_Tax_Marital_Status'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('State_Tax_Marital_Status')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Number of dependents</label>
                                                            <input type="number" name="State_Tax_Number_of_dependents" class="form-control" placeholder="Enter Number of dependents" value="{{old('State_Tax_Number_of_dependents')}}">
                                                            @if ($errors->has('State_Tax_Number_of_dependents'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('State_Tax_Number_of_dependents')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Additional Allowances</label>
                                                            <input type="number" name="State_Tax_Additional_Allowances" class="form-control" placeholder="Enter Additional Allowances" value="{{old('State_Tax_Additional_Allowances')}}">
                                                            @if ($errors->has('State_Tax_Additional_Allowances'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('State_Tax_Additional_Allowances')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Additional Withholding</label>
                                                            <input type="number" name="State_Tax_Additional_Withholding" class="form-control" placeholder="Enter Additional Withholding" value="{{old('State_Tax_Additional_Withholding')}}">
                                                            @if ($errors->has('State_Tax_Additional_Withholding'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('State_Tax_Additional_Withholding')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Total Allowances</label>
                                                            <input type="number" name="State_Tax_Total_Allowances" class="form-control" placeholder="Enter Total Allowances" value="{{old('State_Tax_Total_Allowances')}}">
                                                            @if ($errors->has('State_Tax_Total_Allowances'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('State_Tax_Total_Allowances')}}
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
         <div class="tab-pane " id="10a">
              <div class="container-fluid">
                    <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Demographics</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="card-body ">
                                                
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label class="radio-inline">Have you ever served in the military : <input type="radio" name="military" value="Yes" checked> Yes</label>
                                                        <label class="radio-inline"><input type="radio" name="military" value="No"> No</label>
                                                     </div>
                                                    <div class="col-md-6 pl-1">
                                                            <label class="radio-inline">Protected Veteran : <input type="radio" name="Protected" value="Yes" checked> Yes</label>
                                                            <label class="radio-inline"><input type="radio" name="Protected" value="No"> No</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <label class="radio-inline">Disabled : <input type="radio" name="Disabled" value="Yes" checked> Yes</label>
                                                        <label class="radio-inline"><input type="radio" name="Disabled" value="No"> No</label>
                                                     </div>
                                                     <div class="col-md-6 pl-1">
                                                        <label class="radio-inline">Gender : <input type="radio" name="Gender" value="Male" checked> Male</label>
                                                        <label class="radio-inline"><input type="radio" name="Gender" value="Female"> Female</label>                                                    
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Ethnicity</label>
                                                            <select class="form-control" name="Ethnicity"><option value="" selected disabled> - Select Ethnicity - </option>
                                                                <option value="White" {{ old('Ethnicity') == 'White' ? 'selected' : '' }}>White</option>
                                                                <option value="Black" {{ old('Ethnicity') == 'Black' ? 'selected' : '' }}>Black</option>
                                                                <option value="Hispanic" {{ old('Ethnicity') == 'Hispanic' ? 'selected' : '' }}>Hispanic</option>
                                                                <option value="Asian" {{ old('Ethnicity') == 'Asian' ? 'selected' : '' }}>Asian</option>
                                                                <option value="Native American" {{ old('Ethnicity') == 'Native American' ? 'selected' : '' }}>Native American</option>
                                                                <option value="Other" {{ old('Ethnicity') == 'Other' ? 'selected' : '' }}>Other</option>                                                                
                                                                </select>
                                                                @if ($errors->has('Ethnicity'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Ethnicity')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                     </div>
                                                    <div class="col-md-6 pl-1">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="tab-pane " id="11a">
                    <div class="container-fluid">
                          <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                              <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-6">
                                              <div class="card ">
                                                  <div class="card-header ">
                                                      <div class="card-header">
                                                          <h4 class="card-title">Conflict of interest</h4>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="card-body ">
                                                      
                                                      <div class="row">
                                                        <div class="col-md-6 pr-1">
                                                            <label class="radio-inline">Conflict of interest : <input type="radio" name="Conflict_of_interest" value="Yes" checked> Yes</label>
                                                            <label class="radio-inline"><input type="radio" name="Conflict_of_interest" value="No"> No</label>
                                                        </div>
                                                        <div class="col-md-6 pl-1">
                                                            
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="clearfix"></div>
                                                  </div>
                                              </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="tab-pane " id="12a">
                        <div class="container-fluid">
                              <div class="section-image" data-image="../../assets/img/bg5.jpg" ;>
                                  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-12 col-sm-6">
                                                  <div class="card ">
                                                      <div class="card-header ">
                                                          <div class="card-header">
                                                              <h4 class="card-title">Hiring Info</h4>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="card-body ">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6 pr-1">
                                                                  <div class="form-group">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="Union_Member" value="Yes"> Are you a Union Member</label> 
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6 pl-1">
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6 pr-1">
                                                                  <div class="form-group">
                                                                        <select class="form-control" name="Hire_Status" ><option value="" selected disabled> - Select Hire Status - </option>

                                                                            <option value="HireNewEmployee" {{ old('Hire_Status') == 'HireNewEmployee' ? 'selected' : '' }}>New Employee</option>
                                                                            
                                                                            <option value="Re-Hire" {{ old('Hire_Status') == 'Re-Hire' ? 'selected' : '' }}>Re-Hire</option>
                                                                            
                                                                            <option value="HireChange" {{ old('Hire_Status') == 'HireChange' ? 'selected' : '' }}>Change</option>
                                                                            
                                                                            </select>
                                                                            @if ($errors->has('Hire_Status'))
                                                            <div class="alert alert-danger">
                                                                {{$errors->first('Hire_Status')}}
                                                            </div>
                                                        @endif
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6 pl-1">
                                                                  <div class="form-group">
                                                                    <select class="form-control" name="Employee_Status"><option value="" selected disabled> - Select Employee Status - </option>

                                                                        <option value="1" {{ old('Employee_Status') == '1' ? 'selected' : '' }}>Day Player</option>
                                                                        
                                                                        <option value="2" {{ old('Employee_Status') == '2' ? 'selected' : '' }}>Full Time</option>
                                                                        
                                                                        </select>
                                                                        @if ($errors->has('Employee_Status'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Employee_Status')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6 pr-1">
                                                                <div class="form-group">
                                                                    <label>Start Date</label>
                                                                    <input type="date" name="Start_Date" class="form-control" placeholder="Start Date"value="">
                                                                    @if ($errors->has('Start_Date'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Start_Date')}}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6 pl-1">
                                                                  <div class="form-group">
                                                                        <label>Department</label>
                                                                        <input type="text" name="Department" class="form-control" placeholder="Enter Department Name" value="{{old('Department')}}">
                                                                        @if ($errors->has('Department'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Department')}}
                                                                        </div>
                                                                    @endif
                                                                    </div>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-md-6 pr-1">
                                                              <div class="form-group">
                                                                <label>Position</label>
                                                                <input type="text" name="Position" class="form-control" placeholder="Enter Position" value="{{old('Position')}}">
                                                                @if ($errors->has('Position'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Position')}}
                                                                        </div>
                                                                    @endif
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6 pl-1">
                                                                <div class="form-group">
                                                                      <label>Union</label>
                                                                      <input type="text" name="Union" class="form-control" placeholder="Enter Union" value="{{old('Union')}}">
                                                                      @if ($errors->has('Union'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Union')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 pr-1">
                                                              <div class="form-group">
                                                                <label>OCC Code</label>
                                                                <input type="text" name="OCC_Code" class="form-control" placeholder="Enter OCC Code" value="{{old('OCC_Code')}}">
                                                                @if ($errors->has('OCC_Code'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('OCC_Code')}}
                                                                        </div>
                                                                    @endif
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6 pl-1">
                                                                <div class="form-group">
                                                                    <label>Studio/Distant Hire</label>
                                                                    <select class="form-control" name="Studio/Distant"><option value="" selected disabled> - Studio/Distant Hire - </option>

                                                                        <option value="HireStudio" {{ old('Studio/Distant') == 'HireStudio' ? 'selected' : '' }}>Studio</option>

                                                                        <option value="HireDistant" {{ old('Studio/Distant') == 'HireDistant' ? 'selected' : '' }}>Distant</option>
                                                                        
                                                                        </select>
                                                                        @if ($errors->has('Studio/Distant'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Studio/Distant')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 pr-1">
                                                                <div class="form-group">
                                                                    <label>Daily/Week Hire</label>
                                                                    <select class="form-control" name="Daily/Week"><option value="" selected disabled> - Select Daily/Week Hire - </option>

                                                                        <option value="HireDaily" {{ old('Daily/Week') == 'HireDaily' ? 'selected' : '' }}>Daily</option>

                                                                        <option value="HireWeek" {{ old('Daily/Week') == 'HireWeek' ? 'selected' : '' }}>Week</option>
                                                                        
                                                                        </select>
                                                                        @if ($errors->has('Daily/Week'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Daily/Week')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6 pl-1">
                                                                <div class="form-group">
                                                                    <label>Paid</label>
                                                                    <select class="form-control" name="Paid"><option value="" selected disabled> - Select Paid Form - </option>

                                                                        <option value="Hourly" {{ old('Paid') == 'Hourly' ? 'selected' : '' }}>Hourly</option>

                                                                        <option value="Daily" {{ old('Paid') == 'Daily' ? 'selected' : '' }}>Daily</option>
                                                                        
                                                                        </select>
                                                                        @if ($errors->has('Paid'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Paid')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 pr-1">
                                                                <div class="form-group">
                                                                    <label>Shirt Size</label>
                                                                    <select class="form-control" name="Shirt_Size"><option value="" selected disabled> - Select Shirt Size - </option>

                                                                        <option value="1" {{ old('Shirt_Size') == '1' ? 'selected' : '' }}>X-Small</option>

                                                                        <option value="2" {{ old('Shirt_Size') == '2' ? 'selected' : '' }}>Small</option>

                                                                        <option value="3" {{ old('Shirt_Size') == '3' ? 'selected' : '' }}>Medium</option>

                                                                        <option value="4" {{ old('Shirt_Size') == '4' ? 'selected' : '' }}>Large</option>

                                                                        <option value="5" {{ old('Shirt_Size') == '5' ? 'selected' : '' }}>X-Large</option>

                                                                        <option value="6" {{ old('Shirt_Size') == '6' ? 'selected' : '' }}>XX-Large</option>
                                                                        
                                                                        </select>
                                                                        @if ($errors->has('Shirt_Size'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Shirt_Size')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6 pl-1">
                                                                <div class="form-group">
                                                                      <label>Rate (Per Hour)</label>
                                                                      <input type="number" name="Rate" class="form-control" placeholder="Enter Rate" value="{{old('Rate')}}">
                                                                      @if ($errors->has('Rate'))
                                                                        <div class="alert alert-danger">
                                                                            {{$errors->first('Rate')}}
                                                                        </div>
                                                                    @endif
                                                                  </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 pr-1">
                                                                <div class="form-group">
                                                                    <label>Guaranteed Hours</label>
                                                                    <input type="number" name="Guaranteed_Hours" class="form-control" placeholder="Enter Guaranteed Hours" value="{{old('Guaranteed_Hours')}}">
                                                                    @if ($errors->has('Guaranteed_Hours'))
                                                                    <div class="alert alert-danger">
                                                                        {{$errors->first('Guaranteed_Hours')}}
                                                                    </div>
                                                                @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pl-1">
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                          
                                                         
                                                          
                                                          
                                                          <div class="clearfix"></div>
                                                      </div>
                                                  </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </div>


                          <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-fill" id="sig-submitBtn">Submit</button>
                          </div>
                        </form>
                
				{{-- <div class="tab-pane" id="2a">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
        <div class="tab-pane" id="3a">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div> --}}
			</div>




<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    
    <!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
{{-- <script src="{{asset('assets/previewForm/previewForm.js')}}"></script> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/previewForm/previewForm.css')}}" /> --}}
    <script>
        $(document).ready(function(){
            $('#mylist').change(function(){
    if( $(this).val() == '1'){
        $('#id1').show();
    }
    else{
        $('#id1').hide();
    }if( $(this).val() == '2'){
        $('#id2').show();
    }else{
        $('#id2').hide();
    }if( $(this).val() == '3'){
        $('#id3').show();
    }else{
        $('#id3').hide();
    }if( $(this).val() == '4'){
        $('#id4').show();
    }else{
        $('#id4').hide();
    }if( $(this).val() == '5'){
        $('#id5').show();
    }else{
        $('#id5').hide();
    }
});

$(".showthis").hide();
$(function() {
  $('.Exemptions').change(function() {
    if($('.Exemptions').is(":checked"))   
            $(".showthis").show();
        else
            $(".showthis").hide();
  })
});


});
    </script>

<script>
    $(document).ready(function() {
       
// showing current error tab stert
        $('#infoForm').submit(function () {
            
            
   $(':required:invalid', '#infoForm').each(function () {
      var id = $('.tab-pane').find(':required:invalid').closest('.tab-pane').attr('id');

      $('.nav a[href="#' + id + '"]').tab('show');
   });
});

// showing current error tab end

// form validation start
        $("#infoForm").validate({
            rules: {
                first_name: {
                    required: true,
                    maxlength: 20,
                },
                mname: {
                    maxlength: 20,
                },
                last_name:{
                    maxlength: 20,
                },
                Phone_Number: {
                    minlength: 10,
                    maxlength: 13,
                    number: true
                },
                Second_Phone_Number: {
                    minlength: 10,
                    maxlength: 13,
                    number: true
                },
                DOB: {
                    date: true
                },
                street1: {
                    required: true,
                    maxlength: 50
                },
                street2: {
                    maxlength: 50
                },
                city: {
                    required: true,
                    maxlength: 40
                },
                state: {
                    required: true,
                    maxlength: 40
                },
                postal_code: {
                    required: true,
                    minlength: 5,
                    maxlength: 6
                },
                mailing_Street1: {
                    maxlength: 50
                },
                mailing_Street2: {
                    maxlength: 50
                },
                mailing_city: {
                    maxlength: 40
                },
                mailing_state: {
                    maxlength: 40
                },
                mailing_postal_code: {
                    minlength: 5,
                    maxlength: 6
                },
                em_mail: {
                    // required: true,
                    email: true,
                    maxlength: 50
                },
                em_phone: {
                    minlength: 10,
                    maxlength: 13,
                    number: true
                },
                
                password: {
                    required: true,
                    minlength: 5
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#password"
                },
                gender: {
                    required: true,
                },
                
                address: {
                    required: true, 
                    maxlength: 50
                }             
                
                
            },
            messages: {
                first_name: {
                    required: "First name is required",
                    maxlength: "First name cannot be more than 20 characters"
                },
                mname: {
                    maxlength: "Middle name cannot be more than 20 characters"
                },
                last_name: {
                    maxlength: "Last name cannot be more than 20 characters"
                },
                Phone_Number: {
                    minlength: "Phone number must be beteen 10 to 13 digits"
                },
                Second_Phone_Number: {
                    minlength: "Phone number must be beteen 10 to 13 digits"
                },
                DOB: {
                    date: "Date of birth should be a valid date"
                },
                street1: {
                    required: "street 1 is required",
                    maxlength: "street 1 cannot not be more than 50 characters"
                },
                street2: {
                    maxlength: "street 1 cannot not be more than 50 characters"
                },
                city: {
                    required: "City is required",
                    maxlength: "City cannot be more than 40 characters"
                },
                state: {
                    required: "State is required",
                    maxlength: "City cannot be more than 40 characters"
                },
                zipcode: {
                    required: "Zipcode is required",
                    minlength: "Zipcode must be of 5-6 digits",
                    maxlength: "Zipcode cannot be more than 6 digits"
                },
                mailing_Street1: {
                    maxlength: "street 1 cannot not be more than 50 characters"
                },
                mailing_Street2: {
                    maxlength: "street 1 cannot not be more than 50 characters"
                },
                mailing_city: {
                    maxlength: "City cannot be more than 40 characters"
                },
                mailing_state: {
                    maxlength: "City cannot be more than 40 characters"
                },
                mailing_postal_code: {
                    minlength: "Zipcode must be of 5-6 digits",
                    maxlength: "Zipcode cannot be more than 6 digits"
                },
                em_mail: {
                    // required: "Email is required",
                    email: "Email must be a valid email address",
                    maxlength: "Email cannot be more than 50 characters",
                },
                em_phone: {
                    minlength: "Phone number must be beteen 10 to 13 digits"
                },
                
                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 5 characters"
                },
                confirmPassword: {
                    required:  "Confirm password is required",
                    equalTo: "Password and confirm password should same"
                },
                gender: {
                    required:  "Please select the gender",
                },
                
                address: {
                    required: "Address is required",
                    maxlength: "Address cannot not be more than 50 characters"
                }              
                
                
            }
        });
    });
</script>

{{-- form validation end? --}}

<script type="text/javascript">
	(function() {

		window.requestAnimFrame = (function(callback) {

			return window.requestAnimationFrame ||

				window.webkitRequestAnimationFrame ||

				window.mozRequestAnimationFrame ||

				window.oRequestAnimationFrame ||

				window.msRequestAnimaitonFrame ||

				function(callback) {

					window.setTimeout(callback, 1000 / 60);

				};

		})();



		var canvas = document.getElementById("sig-canvas");

		var ctx = canvas.getContext("2d");

		ctx.strokeStyle = "#222222";

		ctx.lineWidth = 4;

		var signature = document.getElementsByName('signature')[0];



		var drawing = false;

		var mousePos = {

			x: 0,

			y: 0

		};

		var lastPos = mousePos;



		canvas.addEventListener("mousedown", function(e) {

			drawing = true;

			lastPos = getMousePos(canvas, e);

		}, false);



		canvas.addEventListener("mouseup", function(e) {

			drawing = false;

		}, false);



		canvas.addEventListener("mousemove", function(e) {

			mousePos = getMousePos(canvas, e);

		}, false);



		// Add touch event support for mobile

		canvas.addEventListener("touchstart", function(e) {



		}, false);



		canvas.addEventListener("touchmove", function(e) {

			var touch = e.touches[0];

			var me = new MouseEvent("mousemove", {

				clientX: touch.clientX,

				clientY: touch.clientY

			});

			canvas.dispatchEvent(me);

		}, false);



		canvas.addEventListener("touchstart", function(e) {

			mousePos = getTouchPos(canvas, e);

			var touch = e.touches[0];

			var me = new MouseEvent("mousedown", {

				clientX: touch.clientX,

				clientY: touch.clientY

			});

			canvas.dispatchEvent(me);

		}, false);



		canvas.addEventListener("touchend", function(e) {

			var me = new MouseEvent("mouseup", {});

			canvas.dispatchEvent(me);

		}, false);



		function getMousePos(canvasDom, mouseEvent) {

			var rect = canvasDom.getBoundingClientRect();

			return {

				x: mouseEvent.clientX - rect.left,

				y: mouseEvent.clientY - rect.top

			}

		}



		function getTouchPos(canvasDom, touchEvent) {

			var rect = canvasDom.getBoundingClientRect();

			return {

				x: touchEvent.touches[0].clientX - rect.left,

				y: touchEvent.touches[0].clientY - rect.top

			}

		}



		function renderCanvas() {

			if (drawing) {

				ctx.moveTo(lastPos.x, lastPos.y);

				ctx.lineTo(mousePos.x, mousePos.y);

				ctx.stroke();

				lastPos = mousePos;

			}

		}



		// Prevent scrolling when touching the canvas

		document.body.addEventListener("touchstart", function(e) {

			if (e.target == canvas) {

				e.preventDefault();

			}

		}, false);

		document.body.addEventListener("touchend", function(e) {

			if (e.target == canvas) {

				e.preventDefault();

			}

		}, false);

		document.body.addEventListener("touchmove", function(e) {

			if (e.target == canvas) {

				e.preventDefault();

			}

		}, false);



		(function drawLoop() {

			requestAnimFrame(drawLoop);

			renderCanvas();

		})();



		function clearCanvas() {

			canvas.width = canvas.width;

		}



		// Set up the UI

		var sigText = document.getElementById("sig-dataUrl");

		var sigImage = document.getElementById("sig-image");

		var clearBtn = document.getElementById("sig-clearBtn");

		var submitBtn = document.getElementById("sig-submitBtn");

		clearBtn.addEventListener("click", function(e) {

			clearCanvas();

			sigText.innerHTML = "Data URL for your signature will go here!";

			sigImage.setAttribute("src", "");

		}, false);


        // var globalcanvas = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABkCAYAAAA8AQ3AAAAAAXNSR0IArs4c6QAAAvRJREFUeF7t1AEJAAAMAsHZv/RyPNwSyDncOQIECEQEFskpJgECBM5geQICBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECDxmQABlNwQbOQAAAABJRU5ErkJggg==";

		submitBtn.addEventListener("click", function(e) {

         
            

			var dataUrl = canvas.toDataURL();            

			sigText.innerHTML = dataUrl;

            // if(dataUrl == globalcanvas){
            //     alert("empty");
                
            // }
            // if(dataUrl == globalcanvas){
            //     exit();
            // }

			sigImage.setAttribute("src", dataUrl);

		}, false);



	})();

</script>

{{-- mapbox for address start--}}

<script >
    jQuery(document).ready(function($){
        /* ======== code for street1 selection ========== */
        $('#street1').keyup(function(){
            $('#show_suggestion').show();
            let search_text = $(this).val().replace(/\s+/g, '');
            // alert(search_text);
            $.ajax({
                url:'https://api.mapbox.com/geocoding/v5/mapbox.places/'+search_text+'.json?access_token=pk.eyJ1IjoicHJvcGVsZ3VydSIsImEiOiJja3JwenoxcDAwMndqMm9wcWZmcmV3OXcwIn0.Asz6YHlpmNG0Knre66wlzg',
                type:"GET",
                success:function(response) {
                    var str = '<ul>';
                    var data = response.features;
                    $.each(data, function( index, value ) {
                        str = str + '<li> <a class="select-street" style="color:grey;">'+value.place_name+'</a></li>';
                    });
                    str = str + '</ul>';
                    $('#show_suggestion').html(str);
                }
            });
        });

        $(document).on('click',".select-street",function () {        
            $('#street1').val($(this).text());
            $('#show_suggestion').hide();
        });

        /* ======== code for postal code selection ========== */
        $('#postal_code').keyup(function(){
            $('#show_postal_suggestion').show();
            let search_text = $(this).val().replace(/\s+/g, '');
            $.ajax({
                url:'https://api.mapbox.com/geocoding/v5/mapbox.places/'+search_text+'.json?types=postcode&access_token=pk.eyJ1IjoicHJvcGVsZ3VydSIsImEiOiJja3JwenoxcDAwMndqMm9wcWZmcmV3OXcwIn0.Asz6YHlpmNG0Knre66wlzg',
                type:"GET",
                success:function(response) {
                    console.log(response);
                    var str = '<ul>';
                    var data = response.features;
                    $.each(data, function( index, value ) {
                        var city = state = '';
                        var context_arr = value.context;
                        var context_length = context_arr.length;
                        for(var i = 0; i < context_length; i++){    
                            if(context_arr[i]['id'].split('.')[0] == 'place'){
                                 city = context_arr[i]['text'];   
                            }
                            if(context_arr[i]['id'].split('.')[0] == 'region'){
                                 state = context_arr[i]['text'];    
                            }
                        } 
                        str = str + '<li> <a class="select-postcode" style="color:grey;" data-city="'+city+'" data-state="'+state+'" data-postcode="'+value.text+'">'+value.place_name+'</a></li>';
                    });
                    str = str + '</ul>';
                    $('#show_postal_suggestion').html(str);
                }
            });
        });  

        $(document).on('click',".select-postcode",function () {        
            $('#postal_code').val($(this).data('postcode'));
            $('#city').val($(this).data('city'));
            $('#state').val($(this).data('state'));
            $('#show_postal_suggestion').hide();
        });

        $(document).click(function(){
            $('#show_suggestion,#show_postal_suggestion ').hide();
        })
    });
    
</script>

<script >
    jQuery(document).ready(function($){
        /* ======== code for street1 selection ========== */
        $('#mailing_Street1').keyup(function(){
            $('#mailing_show_suggestion').show();
            let search_text = $(this).val().replace(/\s+/g, '');
            // alert(search_text);
            $.ajax({
                url:'https://api.mapbox.com/geocoding/v5/mapbox.places/'+search_text+'.json?access_token=pk.eyJ1IjoicHJvcGVsZ3VydSIsImEiOiJja3JwenoxcDAwMndqMm9wcWZmcmV3OXcwIn0.Asz6YHlpmNG0Knre66wlzg',
                type:"GET",
                success:function(response) {
                    var str = '<ul>';
                    var data = response.features;
                    $.each(data, function( index, value ) {
                        str = str + '<li> <a class="select-street" style="color:grey;">'+value.place_name+'</a></li>';
                    });
                    str = str + '</ul>';
                    $('#mailing_show_suggestion').html(str);
                }
            });
        });

        $(document).on('click',".select-street",function () {        
            $('#mailing_Street1').val($(this).text());
            $('#mailing_show_suggestion').hide();
        });

        /* ======== code for postal code selection ========== */
        $('#mailing_postal_code').keyup(function(){
            $('#mailing_show_postal_suggestion').show();
            let search_text = $(this).val().replace(/\s+/g, '');
            $.ajax({
                url:'https://api.mapbox.com/geocoding/v5/mapbox.places/'+search_text+'.json?types=postcode&access_token=pk.eyJ1IjoicHJvcGVsZ3VydSIsImEiOiJja3JwenoxcDAwMndqMm9wcWZmcmV3OXcwIn0.Asz6YHlpmNG0Knre66wlzg',
                type:"GET",
                success:function(response) {
                    console.log(response);
                    var str = '<ul>';
                    var data = response.features;
                    $.each(data, function( index, value ) {
                        var city = state = '';
                        var context_arr = value.context;
                        var context_length = context_arr.length;
                        for(var i = 0; i < context_length; i++){    
                            if(context_arr[i]['id'].split('.')[0] == 'place'){
                                 city = context_arr[i]['text'];   
                            }
                            if(context_arr[i]['id'].split('.')[0] == 'region'){
                                 state = context_arr[i]['text'];    
                            }
                        } 
                        str = str + '<li> <a class="select-postcode" style="color:grey;" data-city="'+city+'" data-state="'+state+'" data-postcode="'+value.text+'">'+value.place_name+'</a></li>';
                    });
                    str = str + '</ul>';
                    $('#mailing_show_postal_suggestion').html(str);
                }
            });
        });  

        $(document).on('click',".select-postcode",function () {        
            $('#mailing_postal_code').val($(this).data('postcode'));
            $('#mailing_city').val($(this).data('city'));
            $('#mailing_state').val($(this).data('state'));
            $('#mailing_show_postal_suggestion').hide();
        });

        $(document).click(function(){
            $('#mailing_show_suggestion,#mailing_show_postal_suggestion ').hide();
        })
    });
    
</script>
{{-- mapbox end --}}

            @if(Session::has('sweetalert'))
            <script>                
                $(window).bind("load", function() {
                    demo.showSwal('success-message','{{session('sweetalert')}}');
                });

                
            </script>
            @endif

            
                

@endsection