@extends('layouts.admin')

@section('sub-content')
<supermarket-index :items="{{ $supermarkets }}"></supermarket-index>

@endsection