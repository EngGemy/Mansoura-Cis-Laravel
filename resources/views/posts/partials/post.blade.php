@if($loop->first)
    <p >{{$key}}.{{$post['title']}}</p>
@else
    <p>{{$key}}.{{$post['title']}}</p>
{{--    @break($key==1)--}}
@endif
