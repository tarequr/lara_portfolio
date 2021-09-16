@extends('backEnd.master')

@section('title')
Update | Profile
@endsection

@section('content')

  <div class="container">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <a href="{{route('profile.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage User</a>
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
                    <h1 class="h4 text-gray-900 mb-4">Update Profile!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('profile.update',$editData->id) }}" >
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Themeforest Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="themeforest" class="form-control" value="{{ $editData->themeforest}}" placeholder="www.themeforest.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Dribbble Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="dribbble" class="form-control" value="{{ $editData->dribbble }}" placeholder="www.dribbble.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Behance Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="behance" class="form-control" value="{{ $editData->behance }}" placeholder="www.behance.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Github Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="github" class="form-control" value="{{ $editData->github }}" placeholder="www.github.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Flickr Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="flickr" class="form-control" value="{{ $editData->flickr }}" placeholder="www.flickr.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Smung Mung Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="smug" class="form-control" value="{{ $editData->smug }}" placeholder="www.smug.com/">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Square Space Link</label>
                      <div class="col-sm-9">
                         <input type="text" name="squarespace" class="form-control" value="{{ $editData->squarespace }}" placeholder="www.squarespace.com/">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Update Profile Info">
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