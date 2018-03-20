@extends('layouts.flat')

@section('content')
<div class="container">
<h3>Danh sách sinh viên của lớp  </h3>

<form action="/students/search", method="GET">
    <a class="btn btn-success btn-sm mb-3" href="/students/create" role="button"><i class="fas fa-plus"></i> Add new student</a>
    
    <div class="input-group">
            <input class="form-control col-3" type="text" placeholder="Search for..." class="name">
            <span class="input-group-append">
              <button class="btn btn-success" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        
</form>
<br>
<table class="table bg-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Lớp</th>
            <th scope="col">Sửa / xóa</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($students as $student)
          <tr>
            <th scope="row">{{ $student->id }} </th>
            <td><a href="../marks/{{$student->id}}">{{ $student->name }}</a></td>
            <td> {{ $student->age }} </td>
            <td> {{ $student->group->name }} </td>
            <td>
                    <form method="POST" action="/students/{{$student->id}}">
                        @csrf
                     <a class="btn btn-success btn-sm mr-3" href="/students/{{$student->id}}/edit" role="button"><i class="fas fa-pencil-alt"></i></a>
               
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm">
                         <i class="fas fa-trash-alt"></i>
                    </button>
                </form>  
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection