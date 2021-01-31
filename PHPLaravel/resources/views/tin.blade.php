<style>
    .pagination li{
        width: 1000px;
        margin-left: 1000px;
    }
</style>
@foreach($tin as $value)
    {{$value->id}}<br/>
    {{$value->name}}<br/>
@endforeach
{!! $tin->links() !!}
