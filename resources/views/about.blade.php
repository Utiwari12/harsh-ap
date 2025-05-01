@include('common.header')
<h1>About</h1>
<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Logout Successfully" class="error"/>

@includeIf('common.inner', ['page'=>'This is about Page of Common Inner Page'])
{{-- @include('common.inner', ['page'=>'This is about Page of Common Inner Page']) --}}
{{-- <h2>{{ $name }} </h2> --}}

<style>
    .success{
        color: wheat;
        background-color: black;
        padding: 5px 10px
        margin: 15px
        border-radius: 5px
        font-size: 20px
        
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