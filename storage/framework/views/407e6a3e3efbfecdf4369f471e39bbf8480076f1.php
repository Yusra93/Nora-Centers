
<?php $__env->startSection('page_heading','تعديل منتج'); ?>
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
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
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('course/'.$course->id)); ?>" > Back </a>
    <!--overview end -->
 	<?php echo e(Form::model($course, array('route' => array('course.update', $course->id), 'method' => 'PUT','class' => 'form-horizontal'))); ?>



	<fieldset>
        <?php echo csrf_field(); ?>


        <!-- Add Product -->
        <div class="form-group">
            
            <input hidden="hidden" id="course_id" name="course_id" value=" <?php echo e(App\Course::find($id)->courses_names_id); ?>">
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="course_cost">Course Name</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="course" name="course" value=" <?php echo e(App\CourseName::find(App\Course::find($id)->courses_names_id)->course_name); ?>">
             </div>
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
              <?php foreach($teachers as $teacher): ?>
                  <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->teacher_name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <!-- input course name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_cost">Cost</label>
          <div class="col-md-4">
          <?php echo e(Form::text('course_cost', null, array('class' => 'form-control input-md'))); ?>

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
          <?php echo e(Form::text('course_room', null, array('class' => 'form-control input-md'))); ?>

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
             <!--  -->
            
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
              <button id="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
  
        </fieldset>
    <?php echo e(Form::close()); ?>

           
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>