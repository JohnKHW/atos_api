@extends('layouts.admin')

@section('sub-content')
<point-index :items="{{ $points }}"></point-index>
@endsection