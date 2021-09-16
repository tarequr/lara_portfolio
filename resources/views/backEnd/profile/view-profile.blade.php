@extends('backEnd.master')

@section('title')
View | Profile
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('profile.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Profile</a>
    <div class="table-responsive">
      <div class="text-center">
        @if(Session::get('message'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ Session::get('message')}}</strong>
          </div>
        @endif
      </div><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>Themeforest</th>
            <th>Dribbble</th>
            <th>Behance</th>
            <th>Github</th>
            <th>Flickr</th>
            <th>Smung Mung</th>
            <th>Square Space</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Themeforest</th>
            <th>Dribbble</th>
            <th>Behance</th>
            <th>Github</th>
            <th>Flickr</th>
            <th>Smung Mung</th>
            <th>Square Space</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($profiles as $profile)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $profile->themeforest }}</td>
            <td>{{ $profile->dribbble }}</td>
            <td>{{ $profile->behance }}</td>
            <td>{{ $profile->github }}</td>
            <td>{{ $profile->flickr }}</td>
            <td>{{ $profile->smug }}</td>
            <td>{{ $profile->squarespace }}</td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('profile.edit',$profile->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('profile.delete',$profile->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection