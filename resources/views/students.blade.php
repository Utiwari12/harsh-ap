<div>
   
  <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
  <h2>Students data</h2>
  {{-- {{print_r($data)}} --}}

  <table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>batch</td>
        
    </tr>
    @foreach ($data as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batch }}</td>
        </tr>
    @endforeach
  </table>


</div>
