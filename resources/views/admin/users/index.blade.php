@extends('layouts.admin')

@section('sub-content')
<user-index :items="{{ $users->toJson() }}"></user-index>

@endsection