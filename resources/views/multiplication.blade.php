@extends('layouts.master')

@section('title', 'Bảng cửu chương ' . $n)

@section('content')
    @if(!$isValid)
        <div class="alert alert-danger">
            Lỗi: "{{ $n }}" không phải là một số hợp lệ!
        </div>
    @else
        <h3>Bảng cửu chương {{ $n }}</h3>
        <ul class="list-group w-25">
            @for($i = 1; $i <= 10; $i++)
                <li class="list-group-item">
                    {{ $n }} x {{ $i }} = {{ $n * $i }}
                </li>
            @endfor
        </ul>
    @endif
@endsection