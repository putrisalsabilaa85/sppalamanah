@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
	<div class="col-lg">
		<div class="jumbotron">
		@role('admin|petugas')
		  <h1 class="display-4">Hello, !</h1>
		@endrole

		@role('siswa')
		  <h1 class="display-4">Hello, !</h1>
		@endrole
		  <p class="lead">Selamat datang di WEB SPP SMK AL- AMANAH.</p>
		  <hr class="my-4">
		</div>
	</div>
</div>
@endsection
