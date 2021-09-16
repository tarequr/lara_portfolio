@extends('backEnd.master')

@section('title')
Add | Education
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('education.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage User</a>
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
                    <h1 class="h4 text-gray-900 mb-4">Add Education!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('education.save') }}" enctype="multipart/form-data" >
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date')}}">
                         <strong class="text-danger"> {{$errors->has('start_date') ? $errors->first('start_date') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="end_date" class="form-control" value="{{ old('end_date')}}">
                         <strong class="text-danger"> {{$errors->has('end_date') ? $errors->first('end_date') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Degree<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                         <input type="text" name="degree" class="form-control" value="{{ old('degree')}}" placeholder="Enter your degree">
                         <strong class="text-danger"> {{$errors->has('degree') ? $errors->first('degree') : '' }} </strong>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Institution<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                         <input type="text" name="institution" class="form-control" value="{{ old('institution')}}" placeholder="Enter your institution">
                         <strong class="text-danger"> {{$errors->has('institution') ? $errors->first('institution') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Location<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                         <input type="text" name="location" class="form-control" value="{{ old('location')}}" placeholder="Enter your location">
                         <strong class="text-danger"> {{$errors->has('location') ? $errors->first('location') : '' }} </strong>
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
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Save Education Info">
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
