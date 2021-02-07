@extends('layout.master')
@section("title", "หมวดหมู่")
@section("article")
{{-- {{$categories}} --}}
    <a href="/category/create">+ เพิ่มข้อมูล</a>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>ชื่อ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                <td>{{$item->category_id}}</td>
                <td>{{$item->category_name}}</td>
                <td>
                    แก้ไข | <a href="/category/delete/{{$item->category_id}}">ลบ</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$categories->links()}}
    </div>
@endsection
