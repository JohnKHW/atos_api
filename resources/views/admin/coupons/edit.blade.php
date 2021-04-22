@extends('layouts.admin')

@section('sub-content')
<coupon-form mode="edit" :items="{{ $coupon }}"></coupon-form>
@endsection