@extends('backEnd.master')

@section('title')
View | About
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('about.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add about</a>
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
            <th>Title</th>
            <th>Description</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>linkedin</th>
            <th>Instagram</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Linkedin</th>
            <th>Instagram</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($abouts as $about)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{$about->title}}</td>
            <td>{{$about->description}}</td>
            <td>{{$about->phone}}</td>
            <td>{{$about->email}}</td>
            <td>{{$about->website}}</td>
            <td>{{$about->facebook }}</td>
            <td>{{$about->twitter}}</td>
            <td>{{$about->linkedin}}</td>
            <td>{{$about->instagram}}</td>
            <td>
              <img src="{{(!empty($about->image))?url('public/upload/about_images/'.$about->image):url('public/upload/no-image.png')}}" style="width: 60px; height: 60px;" class="img-fluid img-thumbnail">
            </td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('about.edit',$about->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('about.delete',$about->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection