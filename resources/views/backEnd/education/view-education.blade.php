@extends('backEnd.master')

@section('title')
View | Education
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('education.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Education</a>
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
            <th>Degree</th>
            <th>Institution</th>
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
            <th>Degree</th>
            <th>Institution</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($educations as $education)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ date('d-M-Y',strtotime($education->start_date))}}</td>
            <td>
              @if(date('Y',strtotime($education->end_date)) < 2000)
                <span>Present</span>
              @else
                {{ date('d-M-Y',strtotime($education->end_date))}}
              @endif
            </td>
            <td>{{$education->degree}}</td>
            <td>{{$education->institution}}</td>
            <td>{{$education->location}}</td>
            <td>{{$education->description }}</td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('education.edit',$education->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('education.delete',$education->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection