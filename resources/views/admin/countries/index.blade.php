@extends('layouts.admin')

@section('sub-content')
<country-index :items="{{ $countries->toJson() }}"></country-index>
@endsection