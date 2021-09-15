@extends('layouts.admin')
@section('content')
@if(Session::has('w9doc'))
<h2 class="text-center" style="margin: 0;padding:0">Review</h2>
       {{-- demo.showSwal('success-message','{{session('sweetalert')}}'); --}}
    <div class="card ">
        <div class="card-header ">
        </div>        
        <div class="card-body ">
    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ asset('assets/docx') }}/{{session('w9doc')}}" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:100vh;width:100%;border:none;overflow:hidden;" frameborder='0'>W9</iframe>
                <div style="text-align: center;">
                    
                <a href="" class="btn btn-primary ">Everything looks good!</a>
                <a href="javascript:history.back()" class="btn btn-danger ">Take me back I need to fix
                    something</a>  
                </div> 
        </div>
    </div>

@else
<div class="card ">
    <div class="card-header ">
    </div>        
    <div class="card-body ">
        <h1 class="text-center">Oops</h1>
        <a href="javascript:history.back()" class="btn btn-default pull-right">Go Back</a>
    </div>
</div>
@endif


@endsection