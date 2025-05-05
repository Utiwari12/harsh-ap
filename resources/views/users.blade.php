<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<h1>Users List</h1>
{{-- {{ 
print_r($users)
}} --}}

<br>
<br>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Created_at</td>
        <td>Updated_at</td>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
    @endforeach
</table>

</div>
