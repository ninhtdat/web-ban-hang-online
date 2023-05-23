@extends('backend/layout')
@section('content')
    @php
        $array = [['a', 1], ['b', 2], ['c', 3]];
        $keys = array_column($array, 0);
        if (in_array('a', $keys)) {
            echo "Có phần tử có key = 'a'";
        } else {
            echo "Không có phần tử có key = 'a'";
        } 
    @endphp
@endsection
