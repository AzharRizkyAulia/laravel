@php
    $data1 = 'Azhar';
    $data2 = 'Rizky';
    $data3 = 'Aulia';
    $data4 = 3921;
    $data5 = 5641;
    $status = 3;
@endphp
<h1>Profile {{ $data1 }} {{ $data2 }} {{ $data3 }}{{ $data4 }}{{ $data5 }}</h1>
<br>
@if($status == 3)
    Status kamu lulus
@else
    Status Kamu Tidak lulus
@endif
<br>
<br>

@for ($i = 1; $i <= 10; $i++)
    
@if($i %2 == 0)
    Nilai Ke - {{ $i }} Genap <br>
@else
    Nilai Ke - {{ $i }} Ganjil <br>
@endif
@endfor