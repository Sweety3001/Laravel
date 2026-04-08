<h1>welcome to employ data</h1>

@php
    $total = 0;
@endphp

@foreach($employee as $em)
    <ul>
        <li>{{ $em['name'] }} : {{ $em['salary'] }}</li>
    </ul>
    @php
        $total += $em['salary'];
    @endphp
@endforeach

<p>total salary: {{ $total }}</p>
<p>average salary: {{ $total / count($employee) }}</p>