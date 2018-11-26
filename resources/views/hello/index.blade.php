@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
	さらにインデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです</p>
	<p>必要なだけ記述ができます</p>
@endsection

@section('footer')
	copyright 2018 shoichi.ltd.
@endsection