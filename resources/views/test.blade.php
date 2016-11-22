@extends('layouts.master')
@section('content')
<script src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
	$(function(){
		
		$('.add').click(function(){
			var articles =$('.id').html(); 
			var n=($('.boddy tr').length-0);
			
			var tr='<tr><th class="no">'+n+'</th>'+
			' <td><select name="id"  class="form-control id" >'+articles+'</select></td>'+
			'<td><input type="text" name="body" class="body form-control"></td>'+
			'<td><a href="#" class="btn btn-danger delete">delete</a></td></tr>';


			$('.boddy').append(tr);     
		});

		$('.boddy').delegate('.delete','click',function(){

			$(this).parent().parent().remove();
		});
		$('.boddy').delegate ('.id','change',function(){

			var tr=$(this).parent().parent();
			var un=tr.find('.id option:selected').attr('data-body');
			tr.find('.body').val(un);
		});

	});

	
</script>


</head>
<body>
	<p align="center">
		<table class="boddy">
			<thead >
				<th>no</th><th>name</th><th>job</th>

				<th><input type="button" name="" class="btn btn-primary add" value="+"></th>
			</thead>
			<thead>
				<th class="no">1</th>
				<th> <select name="id" class="form-control id">
					<?php foreach ($students as $article): ?>
						<option data-body="<?php echo ($article->student_name); ?>" value="<?php=$articles->id; ?>"><?php echo ($article->student_name); ?></option>
					<?php endforeach ?>
				</select></th>
				<th><input type="text" name="body" class="body form-control"></th>
				<th><a href="#" class="btn btn-danger delete">delete</a></th>
				

			</thead>

		</table>
	</p>
	<a href="javascript:window.print()"onclick="window.print();return false" class="btn btn-primary"><h2>print</h2></a>


	
</body>
@stop