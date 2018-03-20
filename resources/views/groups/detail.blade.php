@extends('layouts.app')

@section('content')
<div class="container">
<h1>Danh sach sinh vien cuar lop tu View</h1>
<table border="1" style="width:100%">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Tuoi</td>
        <td>#</td>
    </tr>
    
    @foreach ($students as $student)
    <tr>
        <td> {{ $student->id }} </td>
        <td> {{ $student->name }} </td>
        <td> {{ $student->age }} </td>
        <td> 
        <a href="/students/{{$student->id}}/edit">Edit</a>    
        <form method="POST" action="/students/{{$student->id}}">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-primary">
                    {{ __('Delete') }}
                </button>
        </form>   
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection