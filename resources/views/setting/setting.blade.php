@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">setting
        </div>
      <div class="panel-body">
      <a href="" type="button" class="btn btn-default pull-right">Edit</a> 
          Username : {{ Auth::user()->name }}
                    <hr>
      <a href="" type="button" class="btn btn-default pull-right">Edit</a>
                    Email : {{ Auth::user()->email }}
                    <hr>
                    <!--Password : {{ Auth::user()->password }}-->
        </div>            
      </div>
    </div>
  </div>
</div>
@stop
