@extends('layout.master')
@section('ifelse')
@if($khoahoc != "")
{!! $khoahoc !!}
@else
    {{"Khong co khoa hoc"}}
@endif
{{$khoahoc or "khong co khoa hoc"}}
@for($i = 0; $i < 100; $i++)
    {{ $i }}
@endfor
    <a href="php">PHP</a>
    <a href="laravel">Laravel</a>
@endsection
