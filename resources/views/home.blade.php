<h1>Home Page</h1>

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

