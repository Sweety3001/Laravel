<h1>Student home page</h1>
<h1> index is {{$num}}</h1>
<h2>check if num is even or odd</h2>
@if ($num %2==0) 
<h1>num is even</h1>
@else <h1>num is odd</h1>
@endif

@php
$i=1;
@endphp
@while($i<=20)
@if($i==6)
@php
$i++;
@endphp
@continue
@endif
@endwhile