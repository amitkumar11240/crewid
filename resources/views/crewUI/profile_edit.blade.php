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
                                        <h4 class="card-title">Edit Profile</h4>
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
                                                <input type="text" class="form-control" placeholder="Username" value="{{$data->fname.' '.$data->lname}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" value="{{$data->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="{{$data->fname}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="{{$data->lname}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="upload-img">
                                                <div class="img-upload-row">
                                                <div class="upload-column">
                                                    {{-- <input type="hidden" name="id" value="{{$id}}"> --}}
                                                    <input type="file" onchange="doAfterSelectImage(this)" name="image" id="image" style="display: none">
                                                    <label for="image" class="img-uploader">
                                    
                                                    {{-- <img src="{{ asset('storage/posts/' . $img) }}" id="post_user_image" > --}}
                                                        {{-- <img src="{{asset('asset/images/placeholder.jpg')}}" id="post_user_image"> --}}
                                    
                                                    </label>
                                                    
                                                    <p>Post Screenshot</p>
                                        
                                            <span style="display: none" id="error_image">
                                            <div class="alert alert-danger" role="start">Image is required</div>
                                            </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                           
                                        </div>
                                    </div>

                                                <button type="submit" class="btn btn-info btn-fill pull-left">Update Profile</button>
                                                {{-- <a href="{{ route('/crewInformations') }}"><button type="button" class="btn btn-info btn-fill pull-legt"style="margin-right:10px;">Fill Your Informations</button></a> --}}
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
                                                    <img class="avatar border-gray" src="../../assets/img/default-avatar.png" alt="...">
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

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <script>
$(document).ready(function (e) {
    $(".save_post_btn").on("click", function (e) {
        e.preventDefault();
        let check = userHasUploadImage();
        if (check) {
            let myForm = document.getElementById("addPostForm");
            let formData = new FormData(myForm);
            console.log(formData);
            uploadPost(formData);
        }
    });
});

//save Image

function uploadPost(formData) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: "POST",
        url: "save_post",
        data: formData,
        dataType: "JSON",
        contentType: false,
        processData: false,

        success: function (response) {
            alert(response);
        },
    });
}

//Update

$(document).on("click", ".Update_post_btn", function (e) {
    e.preventDefault();
    let myForm = document.getElementById("UpdatePostForm");
    let formData = new FormData(myForm);
    updatePost(formData);
});
function updatePost(formData) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    const id = $("#id").val();
    $.ajax({
        type: "POST",
        cache: false,
        data: formData,
        dataType: "JSON",
        contentType: false,
        processData: false,
        url: "update_post/" + id,
        success: function (response) {
            alert(response);
        },
    });
}

// validate for image
function userHasUploadImage() {
    let check = true;
    let file = $("#image").get(0).files[0];
    if (file == undefined && file == null) {
        check = false;
        habdleErrors();
        return check;
    }
    habdleErrors();
    return check;
}
function habdleErrors() {
    let file = $("#image").get(0).files[0];
    if (file == undefined && file == null) {
        $("#error_image").show();
    } else {
        $("#error_image").hide();
    }
}
            </script>

@endsection