@extends('admin.layouts.master')

@section('title', 'Student Details ')

@section('content_header', 'Student Details')


@section('content')


    <div class="box box-info">


            <b>{{$student->name}}</b><br>
            <br>
            <b>Roll:</b> {{$student->roll}}<br>
            <b>Father's Name:</b> {{$student->father_name}}<br>
            <b>Mother's Name:</b> {{$student->mother_name}}<br>
            <b>Email:</b> {{$student->email}}<br>
            <b>Password:</b> {{$student->password}}<br>
            <b>Image:</b> {{$student->image}}

        <div class="box-footer">
            <a href="{{url('/admin/students')}}"><button type="submit" class="btn btn-primary">Back</button></a>

        </div>
    </div>





@endsection
