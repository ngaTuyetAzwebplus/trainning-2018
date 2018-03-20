@extends('layouts.flat')

@section('content')
<div class="container">
<h1>Danh sach sinh vien tu View</h1>
{{--  <form action="/students/search", method="GET">
    <input type="text" name="name">
    <button type="submit" >Tìm kiếm</button>
</form>  --}}
<br>
<table class="table bg-white">
        <thead>
                <tr>
                    <td>STT</td>
                    <td>Ten</td>
                    <td>php</td>
                    <td>mySQL</td>
                    <td>Java</td>
                    <td>#</td>
                </tr>
        </thead>
        <tbody>
    @foreach ($marks as $mark)
    <tr>
        <td> {{ $mark->id }} </td>
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