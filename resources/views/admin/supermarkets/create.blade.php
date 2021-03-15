@extends('layouts.admin')

@section('sub-content')
<supermarket-form mode="create" :foodlist="{{ $foodlist }}" :countries="{{ $countries }}"></supermarket-form>

@endsection