@extends('admin.layouts.master')

@section('title', 'Student Index Page ')

@section('content_header', 'Students List')


@section('content')


    <div class="box box-info">

  @if(session()->has('message'))
{{session('message')}}
  @endif

    </div>




    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Email</th>
                    {{--<th>Password</th>--}}
                    {{--<th>Image</th>--}}
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      @php
                      $sl =0;
                      @endphp

                      @foreach($students as $student)
                <tr>
                    <td>{{++$sl}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->roll}}</td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->mother_name}}</td>
                    <td>{{$student->email}}</td>
                    {{--<td>{{$student->password}}</td>--}}
                    {{--<td>{{$student->image}}</td>--}}
                    <td class="center">
                        <button><a href="{{url('/admin/students/'.$student->id)}}" style="color: black">Show</a></button>

                        <button><a href="{{url('/admin/students/'.$student->id.'/edit')}}" style="color: black">edit</a></button>

                        {!! Form::open(['url' => '/admin/students/'.$student->id, 'method'=>'delete']) !!}

                        {!! Form::submit('delete') !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
