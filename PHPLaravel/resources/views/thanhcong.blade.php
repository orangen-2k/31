@if(Auth::check())
<h1>OKOKOKOKO</h1>
@if(isset($user))
    {{"Tên: ".$user->name}}
    <br>
    {{"Email: ".$user->email}}
@endif
<a href="{{url('logout')}}">Đăng xuất</a>
    @else
        <h1>Fail</h1>
@endif
