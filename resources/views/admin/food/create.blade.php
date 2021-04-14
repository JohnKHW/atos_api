@extends('layouts.admin')

@section('sub-content')
<food-form mode="create" :points="{{ $points }}" :countries="{{ $countries }}"></food-form>
@endsection