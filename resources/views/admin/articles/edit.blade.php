@extends('layouts.admin')

@section('sub-content')
<article-form mode="edit" :items="{{ $article }}"></article-form>
@endsection