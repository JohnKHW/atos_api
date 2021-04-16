@extends('layouts.admin')

@section('sub-content')
<user-index :items="{{ $users }}"></user-index>

@endsection