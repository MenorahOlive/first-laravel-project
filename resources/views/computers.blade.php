<p>This page is working</p>   

@foreach($computers as $computer)
<p>{{$computer->PC_Name}} - {{$computer->RAM_Size}} - {{$computer->Processor_Type}}</p>

@endforeach