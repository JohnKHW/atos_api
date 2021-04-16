@extends('layouts.admin')

@section('sub-content')
<user-form mode="edit" :items="{{ $user }}" :countries="{{ $countries }}" :roles="{{ $roles }}"></user-form>

@endsection