@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <b-col>
            <cashier-index :supermarkets="{{ $supermarkets }}"></cashier-index>
        </b-col>
    </div>
</div>
@endsection