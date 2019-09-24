<h1>Customer List</h1>
@foreach ($customer as $c)
<p><a href="/customer/{{$c}}">customer{{$c}}</a></p>
    
@endforeach
