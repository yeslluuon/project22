@extends('layout.master')
@section("title", "หมวดหมู่")
@section("article")
{{-- {{$categories}} --}}
    <div class="container">
        <form action="/category/store" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4>ผิดพลาด</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="formgroup">
                <label>ชื่อหมวดหมู่</label>
                <input type="text" class="formcontrol" name="category_name" required>
            </div>
            <button type="submit" class="btn btn-primary"> บันทึก</button>
        </form>
    </div>
@endsection
