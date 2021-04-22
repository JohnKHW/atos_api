@extends('layouts.admin')

@section('sub-content')
<supermarket-index :items="{{ $supermarkets->toJson() }}"></supermarket-index>

@endsection