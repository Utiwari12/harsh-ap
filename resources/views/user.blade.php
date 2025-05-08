{{-- <h1>View User Page</h1>
{{ print_r($data) }}

<ul>
   <li>
    <span>Name: </span><span><b>{{$data->name}}</b></span>
   </li>
</ul> --}}

{{-- <h1>View User Page</h1> --}}
{{-- {{ print_r($data) }} --}}

{{-- <ul>
    @foreach ($data as $user)
        <li>
            Name : {{ $user['name'] }}
            
           
            <br>
           
        </li>
        <li> Email : {{ $user['email'] }}
            
           </li>
           <li>Phone: {{ $user['phone'] }}</li>
           <li>Website: {{ $user['website'] }}</li>
           <h2>Address</h2>
           <li>City: {{ $user['address']['city'] }}</li>
           <li>Street: {{ $user['address']['street'] }}</li>
           <li>Suite: {{ $user['address']['suite'] }}</li>
           <li>Zipcode: {{ $user['address']['zipcode'] }}</li>
           
           <li>Lat: {{ $user['address']['geo']['lat'] }}</li>
           <li>Lng: {{ $user['address']['geo']['lng'] }}</li>
           <h2>Company</h2>
           <li>Company Name: {{ $user['company']['name']}}</li>
           <li>Company Catchphrase: {{ $user['company']['catchPhrase'] }}</li>
           <li>Company Bs: {{ $user['company']['bs'] }}</li>
           
           <br>
    @endforeach
</ul> --}}

{{-- To Post data to database --}}
<div>
    <h3>User form</h3>
    {{-- <form action="/user" method="get"> --}}
    <form action="/user" method="post">
    {{-- <input type="hidden" name="_method" value="put"> --}}
    {{-- <input type="text" name="_method" value="delete"> --}}
      @csrf
      <input type="text" name="name" id="" placeholder="Enter Your Name">
      <br>
       <input type="email" name="email" id="" placeholder="Enter Your Email">
       <br>
       <input type="password" name="password" id="" placeholder="Enter Your Password">
       <br>
       <br>
       <button type="submit">Submit</button>
    </form>
</div>