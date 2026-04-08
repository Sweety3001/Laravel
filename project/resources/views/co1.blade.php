<table>
  <tr>
    <th>Name</th>
    <th>Age</th>
  </tr>
  @foreach( $students as $students)
  @if( $students['name'] == $name )
    <tr>
      <td>{{ $students['name'] }}</td>
      <td>{{ $students['age'] }}</td>
    </tr>
  @endif
  @endforeach

</table>

