@extends('layout.master')
@section("title", "หน้าแรก")
@section("article")
<div class="container">
    <h1>หน้าแรก</h1>
    สวัสดี {{$name}},
    คุณมีอายุ @if($age > 19) คุณมีอายุมากกว่า 19 @else คุณมีอายุต่ำกว่า 19 @endif
    {{$status}}
</div>

@endsection
