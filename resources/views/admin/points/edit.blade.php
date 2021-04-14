@extends('layouts.admin')

@section('sub-content')
<point-form mode="edit" :items="{{ $point }}"></point-form>

@endsection