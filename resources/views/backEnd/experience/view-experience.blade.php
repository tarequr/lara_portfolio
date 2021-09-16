@extends('backEnd.master')

@section('title')
View | Experience
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('experience.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Experience</a>
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
            <th>Start Date</th>
            <th>End Date</th>
            <th>Company Name</th>
            <th>designation</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Company Name</th>
            <th>designation</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($experiences as $experience)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ date('d-M-Y',strtotime($experience->start_date))}}</td>
            <td>
              @if(date('Y',strtotime($experience->end_date)) < 2000)
                <span>Present</span>
              @else
                {{ date('d-M-Y',strtotime($experience->end_date))}}
              @endif
            </td>
            <td>{{$experience->company_name}}</td>
            <td>{{$experience->designation}}</td>
            <td>{{$experience->location}}</td>
            <td>{{$experience->description }}</td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('experience.edit',$experience->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('experience.delete',$experience->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection