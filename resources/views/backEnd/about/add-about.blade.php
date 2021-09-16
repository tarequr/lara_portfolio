@extends('backEnd.master')

@section('title')
Add | About
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('about.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage User</a>
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
                    <h1 class="h4 text-gray-900 mb-4">Add About!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('about.save') }}" enctype="multipart/form-data" >
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Title</label>
                      <div class="col-sm-9">
                        <textarea rows="2" name="title" class="form-control" placeholder="Enter your title">{{old('title')}}</textarea>
                         <strong class="text-danger"> {{$errors->has('title') ? $errors->first('title') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Description</label>
                      <div class="col-sm-9">
                        <textarea rows="5" name="description" class="form-control" placeholder="Enter your description">{{old('description')}}</textarea>
                         <strong class="text-danger"> {{$errors->has('description') ? $errors->first('description') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                         <input type="text" name="phone" class="form-control" value="{{ old('phone')}}" placeholder="Enter your phone">
                         <strong class="text-danger"> {{$errors->has('phone') ? $errors->first('phone') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                         <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter your email">
                         <strong class="text-danger"> {{$errors->has('email') ? $errors->first('email') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Website Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="website" class="form-control" value="{{ old('website')}}" placeholder="www.example.com">
                         <strong class="text-danger"> {{$errors->has('website') ? $errors->first('website') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Facebook Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="facebook" class="form-control" value="{{ old('facebook')}}" placeholder="www.facebook.com/">
                         <strong class="text-danger"> {{$errors->has('facebook') ? $errors->first('facebook') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Twitter Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="twitter" class="form-control" value="{{ old('twitter')}}" placeholder="www.twitter.com/">
                         <strong class="text-danger"> {{$errors->has('twitter') ? $errors->first('twitter') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">LinkedIn Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin')}}" placeholder="www.linkedin.com/">
                         <strong class="text-danger"> {{$errors->has('linkedin') ? $errors->first('linkedin') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Instagram Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="instagram" class="form-control" value="{{ old('instagram')}}" placeholder="www.instagram.com/">
                         <strong class="text-danger"> {{$errors->has('instagram') ? $errors->first('instagram') : '' }} </strong>
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
                        <img src="{{url('public/upload/no-image.png')}}" style="width: 120px; height: 120px; border: 1px solid #000;" id="showImage">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Save About Info">
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
