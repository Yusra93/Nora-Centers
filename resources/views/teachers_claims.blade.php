@extends('layouts.master')
@section('content') 
<h3>Teachers Claims</h3>
<script src="{{asset('js/ligthtable.js')}}"></script>
<form class="form-inline pull-right srcTop">
 <input type="search" class="light-table-filter form-control " data-table="order-table" placeholder="Filter">
 </form>
 
 <table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>


								</tr>
							</thead>
							<tbody>
								@foreach($teachers as $teacher)
								<tr>
									<td><a href="{{ URL::to('teacher/' . $teacher->id ) }}" class="" >{{$teacher->teacher_name}}</a></td>
									<td>{{$teacher->teacher_contact_number}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						
@stop