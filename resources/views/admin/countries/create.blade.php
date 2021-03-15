@extends('layouts.admin')
@section('sub-content')
<country-form mode="create" :regions="{{ $regions }}"></country-form>
@endsection