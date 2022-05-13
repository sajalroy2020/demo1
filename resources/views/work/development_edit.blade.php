
@extends('layouts/admin_layout')
@section('content')


<!-- start Page Content -->
<main>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Work Development</h1>
        </div>

        <hr>
        <div class="col-md-6 mx-auto">
            @if(session('msg'))
                <p class="alert alert-success">{{ session('msg')}} </p>
            @endif 
            <form class="user" action="{{ url('admin/works/design/development_update/'.$development->id) }}" method="POST" enctype="multipart/form-data">
                @csrf                
                @method('PUT')
                <div class="form-group">
                    <label class="text-dark"><b>Main Title</b></label>
                    @error('work_development_title')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror  
                    <input value="{{$development->work_development_title}}" name="work_development_title" type="text" class="form-control py-4" id="exampleInputPassword">
                </div>

                <div class="form-group">
                    <label class="text-dark"><b>sub Title</b></label>
                    @error('work_development_sub_title')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror  
                    <input value="{{$development->work_development_sub_title}}" name="work_development_sub_title" type="text" class="form-control py-4" id="exampleInputPassword">
                </div>

                <div class="form-group">
                    <label class="text-dark"><b>Image</b></label>
                <div class="mb-3">
                    
                </div>
                <input name="development_img" type="file" class="form-control pb-1" id="exampleInputEmail1">  
                <img width="60" src="{{ asset('storage/public/development-img/'.$development->development_img) }}" alt="">        

                </div> 

                <div class="mt-3">
                    <button class="btn btn-primary px-4" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection
