@extends('layouts.admin')

@section('sub-content')
<point-index :items="{{ $points->toJson() }}"></point-index>
@endsection