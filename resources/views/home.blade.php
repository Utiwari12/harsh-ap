<h1>Home Page</h1>
{{-- get current url --}}
{{URL::current()}}
<h3>{{URL::previous()}}</h3>
<h3>{{URL::full()}}</h3> 
{{-- <h3>{{ url('/') }}</h3>
<h3>{{URL()->current()}}</h3>
{{-- <x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Logout Successfully" class="success"/>
<br>
<br>
<br>
<x-message-banner msg="User Password not correct, plz try again" class="error"/>
<x-message-banner msg="User Password not correct, plz try again" class="success"/> --}}

{{-- <a href="/about">About</a> --}}
{{-- another method --}}

<a href="{{URL::to('about')}}">About</a>

<style>
    .success{
        color: wheat;
        background-color: black;
        padding: 3px 10px
        margin: 5px
        border-radius: 5px
        font-size: 20px
        display: flex
    }

    .error{
        color: rgb(179, 245, 224);
        background-color: black;
        padding: 3px 10px
        margin: 5px
        border-radius: 5px
        font-size: 20px
        display: flex
    }
</style>
@include('common.header')

@include('common.inner', ['page'=>'This is Home Page of Common Inner Page'])
{{-- <a href="/about">About</a>

<a href="/">Welcome Page</a>

<h2>{{ $name }}</h2> --}}
{{-- <h2>{{ rand(1, 100) }}</h2> --}}

{{-- <h3>{{ $users[2] }}</h3> --}}

{{-- @if ($name == 'Upendra Tiwari')
    <h3>{{ $name }}</h3>
@elseif ($name == 'Nilam Tiwari')
    <h2>{{ $name }}</h2>
@else
    <h2>Other Users</h2>
@endif --}}

{{-- <div>
   @foreach ($users as $user)
       <h3>{{ $user }}</h3>
   
   @endforeach
</div>

<div>
    @for ($i = 0; $i < 10; $i++)
        <h2>{{ $i }}</h2>
    
    @endfor
</div> --}}

