@extends('backEnd.master')

@section('title')
Update | Skill
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('skill.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage User</a>
    </div>
  </div><br>
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
                    <h1 class="h4 text-gray-900 mb-4">Update Skill!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('skill.update',$editData->id) }}" >
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Skill Name<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                         <input type="text" name="name" class="form-control" value="{{ $editData->name }}" placeholder="Enter your skill name">
                         <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Percentage<span class="text-danger">*</span></label>
                      <div class="col-sm-9">
                         <input type="text" name="percentage" class="form-control" value="{{ $editData->percentage }}" placeholder="10 - 100">
                         <strong class="text-danger"> {{$errors->has('percentage') ? $errors->first('percentage') : '' }} </strong>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Update Skill Info">
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