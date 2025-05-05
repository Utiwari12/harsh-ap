{{-- <h1>View User Page</h1>
{{ print_r($data) }}

<ul>
   <li>
    <span>Name: </span><span><b>{{$data->name}}</b></span>
   </li>
</ul> --}}

<h1>View User Page</h1>
{{-- {{ print_r($data) }} --}}

<ul>
    @foreach ($data as $user)
        <li>
            Name : {{ $user['name'] }}
            
           
            <br>
           
        </li>
        <li> Email : {{ $user['email'] }}
            <br>
           </li>
           <li>Phone: {{ $user['phone'] }}</li>
           <li>Website: {{ $user['website'] }}</li>
           {{-- <li>Address: {{ $user['address'] }}</li> --}}
    @endforeach
</ul>