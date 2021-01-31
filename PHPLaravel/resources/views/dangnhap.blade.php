{{--@if($error != "")--}}
{{--    {!! $error !!}--}}
{{--@else--}}
{{--    {{""}}--}}
{{--@endif--}}
{{--{{$error or "khong co khoa hoc"}}--}}
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="password" />
    <input type="submit" />
</form>
