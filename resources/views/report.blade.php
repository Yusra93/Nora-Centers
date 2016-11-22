@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<br><br><h3>Students</h3>
<form action="{{ url ('report/students') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    {!! csrf_field() !!}
    <!-- Form Name -->
  <table class="table">
  <tr>
    <td>

  <!-- Text from_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="from_date">from date</label>
      <div class="col-md-8">
      <input id="from_date" name="from_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>
    <td>
  <!-- Text to_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="to_date">to date</label>
      <div class="col-md-8">
      <input id="to_date" name="to_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>

    <td>
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">GO</button>
        </div>
    </div>
    </td>
    </tr>
    </form>
  <!-- End form-->
</table>

<!-- purchases -->

<br><br><h3>Teachers</h3>
<form action="{{ url ('report/teachers') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    {!! csrf_field() !!}
    <!-- Form Name -->
  <table class="table">
  <tr>
    <td>

  <!-- Text from_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="from_date">from date</label>
      <div class="col-md-8">
      <input id="from_date" name="from_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>
    <td>
  <!-- Text to_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="to_date">to date</label>
      <div class="col-md-8">
      <input id="to_date" name="to_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>

    <td>
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">GO</button>
        </div>
    </div>
    </td>
    </tr>
    </form>
</table>
<br><br><h3>Courses</h3>
<form action="{{ url ('report/courses') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    {!! csrf_field() !!}
    <!-- Form Name -->
  <table class="table">
  <tr>
    <td>

  <!-- Text from_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="from_date">from date</label>
      <div class="col-md-8">
      <input id="from_date" name="from_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>
    <td>
  <!-- Text to_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="to_date">to date</label>
      <div class="col-md-8">
      <input id="to_date" name="to_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>

    <td>
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">GO</button>
        </div>
    </div>
    </td>
    </tr>
    </form>
</table>
    <br><br><h3>Results</h3>
        <form action="{{ url ('report/results') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {!! csrf_field() !!}
            <!-- Form Name -->
          <table class="table">
          <tr>
            <td>
        
          <!-- Text from_date-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="from_date">from date</label>
              <div class="col-md-8">
              <input id="from_date" name="from_date" placeholder="name" class="form-control input-md" required="" type="date">
              </div>
            </div>
            </td>
            <td>
          <!-- Text to_date-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="to_date">to date</label>
              <div class="col-md-8">
              <input id="to_date" name="to_date" placeholder="name" class="form-control input-md" required="" type="date">
              </div>
            </div>
            </td>
        
            <td>
            <!-- Button -->
            <div class="form-group">
                <div class="col-md-8">
                    <button id="submit" name="submit" class="btn btn-primary">GO</button>
                </div>
            </div>
            </td>
            </tr>
            </form>
</table>
  <!-- End form-->

@stop