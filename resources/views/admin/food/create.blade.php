@extends('layouts.admin')

@section('sub-content')
<food-form mode="create" :types="{{ $types }}" :countries="{{ $countries }}"></food-form>
@endsection