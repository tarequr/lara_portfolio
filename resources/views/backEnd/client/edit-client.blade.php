@extends('backEnd.master')

@section('title')
Update | Client
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('client.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage User</a>
    </div>
  </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h3 class="text-center text-success"> {{ Session::get('message')}} </h3>
                    <h1 class="h4 text-gray-900 mb-4">Update Client!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('client.update',$editData->id) }}" enctype="multipart/form-data" >
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Client Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="link" class="form-control" value="{{ $editData->link }}" placeholder="www.example.com">
                         <strong class="text-danger"> {{$errors->has('link') ? $errors->first('link') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input type="file" name="image" id="image"><br>
                        <strong class="text-danger"> {{$errors->has('image') ? $errors->first('image') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <img src="{{(!empty($editData->image))?url('public/upload/client_images/'.$editData->image):url('public/upload/no-image.png')}}" style="width: 120px; height: 120px; border: 1px solid #000;" id="showImage">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Update Client Info">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
