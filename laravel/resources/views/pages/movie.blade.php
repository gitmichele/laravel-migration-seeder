@extends('layouts.main-layout')

@section('content')
<ul>
    <li>
        Original title: {{ $movie -> original_title }}
    </li>
    <li>
        Nationality: {{ $movie -> nationality }}
    </li>
    <li>
        Date: {{ $movie -> date }}
    </li>

    <li>
        Vote: {{ $movie -> vote }}
    </li>
</ul>    
@endsection