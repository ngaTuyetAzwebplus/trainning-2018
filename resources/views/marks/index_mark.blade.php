@extends('layouts.flat')

@section('content')
<div class="container">
<h3>Điểm của sinh viên</h3>
{{--  <form action="/students/search", method="GET">
    <input type="text" name="name">
    <button type="submit" >Tìm kiếm</button>
</form>  --}}
<a class="btn btn-success btn-sm float-right mb-3" href="/students" role="button"><i class="fas fa-plus"></i> Add new mark</a>
<br>
<table class="table bg-white">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Ten</th>
            <th scope="col">php</th>
            <th scope="col">mySQL</th>
            <th scope="col">Java</th>
            <th scope="col">#</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($marks as $mark)
            <tr>
                <th scope="col"> {{ $mark->id }} </th>
                <td> {{ $mark->student->name }} </td>
                <td> {{ $mark->php }} </td>
                <td> {{ $mark->mySQl }} </td>
                <td> {{ $mark->java }} </td>
            </tr>
        @endforeach
    <tbody>
</table>
</div>
@endsection