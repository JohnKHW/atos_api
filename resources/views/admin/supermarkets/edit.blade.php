@extends('layouts.admin')

@section('sub-content')
<supermarket-form mode="edit" :countries="{{ $countries }}" :foodlist="{{ $foodlist }}" :food="{{ $food }}" :items="{{ $supermarket }}"></supermarket-form>

@endsection