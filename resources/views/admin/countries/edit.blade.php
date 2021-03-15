@extends('layouts.admin')

@section('sub-content')
<country-form mode="edit" :items="{{ $country }}" :regions="{{ $regions }}"></country-form>
@endsection