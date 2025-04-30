@include('common.header')
<h1>About</h1>

@includeIf('common.inner', ['page'=>'This is about Page of Common Inner Page'])
{{-- @include('common.inner', ['page'=>'This is about Page of Common Inner Page']) --}}
{{-- <h2>{{ $name }} </h2> --}}