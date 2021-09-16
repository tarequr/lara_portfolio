@extends('backEnd.master')

@section('title')
View | Skill
@endsection

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <a href="{{route('skill.add')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Skill</a>
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
            <th>Skill Name</th>
            <th>Percentage</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sl No</th>
            <th>Skill Name</th>
            <th>Percentage</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;  ?>
          @foreach($skills as $skill)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{$skill->name}}</td>
            <td>{{$skill->percentage}}</td>
            <td>
              <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
              <a href="{{ route('skill.edit',$skill->id)}}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('skill.delete',$skill->id)}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection