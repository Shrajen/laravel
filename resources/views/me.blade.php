<h1> 
    Welcome, {{$name ?? 'Guest'}}
    {{time()}}
    <br>
    {{date('d-m-y')}}
    
</h1>
{!! $data !!}