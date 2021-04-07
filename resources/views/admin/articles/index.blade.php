@extends('layouts.admin')

@section('sub-content')
<article-index :items="{{ $articles }}"></article-index>
@endsection