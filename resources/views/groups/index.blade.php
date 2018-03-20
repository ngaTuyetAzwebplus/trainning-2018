@extends('layouts.flat')

@section('content')
<div class="container">
<h3 class="mb-5">Danh sách các lớp</h3>
<a class="btn btn-success btn-sm float-right mb-3" href="/groups/create" role="button"><i class="fas fa-plus"></i> Add new class</a>
<table class="table bg-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên lớp</th>
        <th scope="col">Năm thành lập</th>
        <th scope="col">Sửa/xóa</th>
      </tr>
    </thead>
    <tbody>
            @foreach ($groups as $group)
      <tr>
        <td scope="row">{{ $group->id }}</td>
        <td><a class="text-dark font-weight-bold" href="/groups/{{$group->id}}">{{ $group->name }}</a></td>
        <td>{{ $group->year }}</td>
        <td>
            <form method="POST" action="/groups/{{$group->id}}">
                    @csrf
                 <a class="btn btn-success btn-sm mr-3" href="/groups/{{$group->id}}/edit" role="button"><i class="fas fa-pencil-alt"></i></a>
           
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