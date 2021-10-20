@extends('layouts.master')

@section('title' ,'Home')

@section('main_content')

<div class="row">
    <div class="col-12">
        <h1 class="text-center">Repository Design Pattern CRUD</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add New Data
        </button>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $key => $student)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->roll}}</td>
                    <td>
                        <a href="{{route('student.view',$student->id)}}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{route('student.delete',$student->id)}}" class="btn btn-sm btn-danger">Trash</a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        @stop
    </div>
</div>
