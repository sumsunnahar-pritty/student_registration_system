@extends('admin.layouts.master')

@section('title', 'Update Student Page ')

@section('content_header', 'Add Student')


@section('content')


    <div class="box box-info">

        <!-- /.box-header -->
        <!-- form start -->

        {!! Form::open(['url' => '/admin/students/'.$student->id, 'method'=>'patch', 'class'=>'form-horizontal', 'files'=>'true']) !!}



        {{--<form class="form-horizontal" name="" action="{{url('')}}" method="post" enctype="multipart/form-data">--}}



            <div class="box-body">
{{csrf_field()}}

                {{--<input type="hidden" name="_token" value="{{csrf_field()}}">--}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="{{$student->name}}" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Roll</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="{{$student->roll}}" name="roll" placeholder="Roll">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Father's Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="{{$student->father_name}}" name="father_name" placeholder="Father's Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mother's Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="{{$student->mother_name}}" name="mother_name" placeholder="Mother's Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="" value="{{$student->email}}" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="" value="{{$student->password}}" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="" value="{{$student->image}}" name="image" placeholder="Image">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-info" style="width: 330px; height: 40px; margin-bottom: 15px">Update</button>
                </div>
                <div class="col-md-4 col-md-offset-4">

                    <a href="{{url('/admin/students')}}"><button type="submit" class="btn btn-default" style="width: 330px; height: 40px;">Cancel</button></a>




                </div>





            </div>
            <!-- /.box-footer -->


        {!! Form::close() !!}
    </div>






@endsection
