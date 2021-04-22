@extends('layouts.admin')

@section('sub-content')
<article-index :items="{{ $articles->toJson() }}"></article-index>
@endsection