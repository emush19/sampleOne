@extends('template.master')
@section('content')

@if(Session::has('message'))
	<div class="alert alert-info">
		{{Session::get('message')}}
	</div>
@endif
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Account ID</th>
			<th scope="col">Email</th>
			<th scope="col">Active Balance</th>
			<th scope="col">Total Balance</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
</table>

@stop