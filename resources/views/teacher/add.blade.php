@extends('layouts.master')
@section('page_heading','Teacher')
@section('content')
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('teacher/') }}" >Back</a>
    <legend> </legend>
    <!--overview end -->

        <!-- start form -->
        <form action="{{ url ('teacher') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	{!! csrf_field() !!}

      	<!-- Add Product -->

      	<!-- input teacher name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_name">Name</label>
      	  <div class="col-md-5">
      	  <input id="teacher_name" name="teacher_name" placeholder="name" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_address">Address</label>
      	  <div class="col-md-4">
      	  <input id="teacher_address" name="teacher_address" placeholder="address" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher identity number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_identity_number">Identity Number</label>
      	  <div class="col-md-2">
      	  <input id="teacher_identity_number" name="teacher_identity_number" placeholder="identity number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

      	<!-- input teacher email-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_email">Email</label>
      	  <div class="col-md-5">
      	  <input id="teacher_email" name="teacher_email" placeholder="email" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher contact number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_contact_number">Contact Number</label>
      	  <div class="col-md-2">
      	  <input id="teacher_contact_number" name="teacher_contact_number" placeholder="contact number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>


      	<!-- ----------------------------------------------------------------------------------- -->

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">Save</button>
        		</div>
      	</div>

      	</fieldset>
      	</form>
        <!-- End form--> 
@stop