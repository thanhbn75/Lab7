@extends('layouts.master')

@section('title', 'Trang liên hệ')

@section('content')
    <h3>Đây là nội dung trang LIÊN HỆ</h3>
    <form>
        <input type="text" class="form-control mb-2" placeholder="Họ tên">
        <textarea class="form-control mb-2" placeholder="Nội dung"></textarea>
        <button class="btn btn-primary">Gửi</button>
    </form>
@endsection