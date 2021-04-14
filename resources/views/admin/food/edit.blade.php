@extends('layouts.admin')

@section('sub-content')
<food-form mode="edit" :items="{{ $food }}" :points="{{ $points }}" :countries="{{ $countries }}"></food-form>
@endsection