@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<script src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
  
      function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        /*switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }*/
      }
    }

</script>
  <script type="text/javascript">
    $(function(){
      
      $('.add').click(function(){
        var articles =$('.id').html(); 
                var n=($('.boddy tr').length-0);
               
                 var tr='<tr >'+'<td><input type="text" name="body" class=" col-md-4 form-control" placeholder="subject"></td>'+
                 '<td><a href="#" class="btn btn-danger delete">delete</a></td></tr>';


           $('.boddy').append(tr);     
    });

      $('.dataTable').delegate('.delete','click',function(){

        $(this).parent().parent().parent().remove();
      });
      $('.boddy').delegate ('.id','change',function(){

      var tr=$(this).parent().parent();
        tr.find('.body').val(un);
      });

    });

    
  </script>
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('/courses_names') }}" > Back</a>
    <legend> </legend>
    <!--overview end -->
<!-- Select Basic -->
        
        <!-- start form -->
        <form action="{{ url ('course') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->
        <div class="form-group">
            
            <input hidden="hidden" id="course_id" name="course_id" value=" {{$id}}">
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="course_cost">Course Name</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="course" name="course" value=" {{App\CourseName::find($id)->course_name}}">
             </div>
        </div> 
        <div class="form-group">
            <label class="col-md-4 control-label " for="course_cost">Course Status</label>
            <div class="col-md-2">
            <div class="checks">
            <input type="radio" class="sug" name="check" value="0" > Suggested<br>
            <input type="radio" name="check" value="1" checked> Active<br>
             </div></div>
         </div>
         
         <script type="text/javascript">
           
           $('.checks').delegate('.sug','click',function(){

        $('.rest').remove();
      });

         </script> 
        <div class="rest">
        <div class="form-group">
          <label class="col-md-4 control-label" for="teacher_id">Teacher Name</label>
          <div class="col-md-4">
            <select id="teacher_id" name="teacher_id" class="form-control" required="true">
              @foreach($teachers as $teacher)
                  <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <!-- input course name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_cost">Cost</label>
          <div class="col-md-4">
          <input id="course_cost" name="course_cost" placeholder="cost" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <div class="form-group">
        <!-- <div class="boddy " >
             <label class="col-md-4 control-label" for="subject">المواد</label>
             <div class="col-md-4">
            
             <input type="text" name="subject" placeholder="subject" class="subject form-control">

             <input type="button" name="" class="btn btn-primary pull-right" onclick="addRow('dataTable')" value="+"><br>
            </div>
        </div> -->
        </div>

        <!-- input course description-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_room">Room</label>
          <div class="col-md-4">
          <input id="course_room" name="course_room" placeholder="room" class="form-control input-md" required="" type="text" >
          </div>
        </div>

         <!-- input course name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_begin">Begin</label>
          <div class="col-md-2">
          <input id="course_begin" name="course_begin"  class="form-control input-md" required="" type="date">
          </div>
        </div>

        <!-- input course description-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_end">End</label>
          <div class="col-md-2">
          <input id="course_end" name="course_end" class="form-control input-md" required="" type="date" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="course_time">Time</label>
          <div class="col-md-2">
          <input list="course_time"  name="course_time" class="form-control input-md" required=""  >
          <datalist id="course_time">
              <option value="08-10">
              <option value="10-12">
              <option value="12-14">
              <option value="14-16">
              <option value="16-18">
              <option value="18-20">
          </datalist>
          </div>
        </div>
      
        <div class="col-md-4 pull-right">
        <input type="button" name="" class="btn btn-primary " onclick="addRow('dataTable')" value="+">
        </div>
  <TABLE id="dataTable" class="table" >
    <TR>
           
      <TD class="col-md-2">
        <div class="boddy " >
             <label class="col-md-4 control-label" for="subject"></label>
             <div class="col-md-4">
            
             <input type="text" name="subjects[]" placeholder="subject" class="subject form-control">

<!--              <a href="#" class="btn btn-danger delete">delete</a>   -->
              </div>
        </div>
      </TD>
<!--       <TD class="col-md-1">
        <input type="checkbox" name="chk" class="form-control"/>
      </TD> -->
    </TR>
  </TABLE>
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