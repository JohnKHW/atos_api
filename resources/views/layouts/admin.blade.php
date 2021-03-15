@extends('layouts.app')

@section('content')
<div class="container">
    <b-row>
        <admin-navigation></admin-navigation>
        <b-col>
            @yield('sub-content')
        </b-col>
    </b-row>
</div>
@endsection