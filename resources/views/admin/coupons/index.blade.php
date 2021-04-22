@extends('layouts.admin')

@section('sub-content')
<coupon-index :items="{{ $coupons->toJson() }}"></coupon-index> 

@endsection