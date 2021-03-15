@extends('layouts.admin')

@section('sub-content')
<food-form mode="edit" :items="{{ $food }}" :types="{{ $types }}" :countries="{{ $countries }}"></food-form>
@endsection