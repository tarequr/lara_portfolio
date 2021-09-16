@extends('backEnd.master')

@section('title')
View | Portfolio
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('portfolio.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Portfolio</a>
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
            <th>Portfolio Name</th>
            <th>Portfolio Link</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Portfolio Name</th>
            <th>Portfolio Link</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($portfolios as $portfolio)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{$portfolio->name}}</td>
            <td>{{$portfolio->link}}</td>
            <td>
              <img src="{{(!empty($portfolio->image))?url('public/upload/portfolio_images/'.$portfolio->image):url('public/upload/no-image.png')}}" style="width: 60px; height: 60px;" class="img-fluid img-thumbnail">
            </td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('portfolio.edit',$portfolio->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('portfolio.delete',$portfolio->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection