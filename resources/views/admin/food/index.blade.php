@extends('layouts.admin')

@section('sub-content')
<food-index :items="{{ $food }}"></food-index>
@endsection