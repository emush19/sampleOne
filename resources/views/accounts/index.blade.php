@extends('template.master')
@section('title')
Account Main Panel
@stop
@section('content')

@if(Session::has('message'))
	<div class="alert alert-info">
		{{Session::get('message')}}
	</div>
@endif
<h2>Panel Account</h2>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#ID</th>
			<th scope="col">Email</th>
			<th scope="col">Active Balance</th>
			<th scope="col">Total Balance</th>
			<th scope="col">Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach($accounts as $account)
			<tr>
				<th scope="row">{{$account->id}}</th>
				<td>{{$account->email}}</td>
				<td>{{$account->active_balance}}</td>
				<td>{{$account->total_balance}}</td>
				<td>
					<div class="btn-group" role="group" aria-label="Basic Example">
						<a href="{{URL::to('accounts/'.$account->id.'edit')}}">
							<button type="button" class="btn btn-warning">EDIT</button>
						</a>&nbsp;
						<form action="{{url('accounts', [$account->id])}}" method="POST">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="submit" class="btn btn-danger" value="DELETE">
						</form>
						
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop