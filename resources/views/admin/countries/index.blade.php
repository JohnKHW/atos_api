@extends('layouts.admin')

@section('sub-content')
<country-index :items="{{ $countries }}"></country-index>
@endsection