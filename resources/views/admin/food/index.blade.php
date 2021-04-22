@extends('layouts.admin')

@section('sub-content')
<food-index :items="{{ $food->toJson() }}"></food-index> 

@endsection