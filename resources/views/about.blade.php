@extends('layouts.master')
@section('content') 
<style type="text/css">
	h3 {
    color: #3366cc;
    font-size: 32px;
}
p {
	font-size: 20px;
}
</style>
<div class="row">
<div style="margin: auto; display: block; " >
<a class="btn btn-link" target="blank" href="http://www.obaaa.sd">
	<img width="1140px" height="628px" 
	src="{{asset('obaaa.jpg')}}" alt="obaaa" ></a>
</div>
</div>
<br>
<div class="row">
<div id="front-columns"> 		

	<div class="col-xs-4" dir="rtl">

		<h3 >أفكار نحو الكمال</h3>

		<p> مجموعة من الشباب المتحمس خلف أوبااا؛ ليقدمو لكم مواقع إنترنت وتطبيقات خدمية، معتمدين على أدوات حرة، وبأفكار تقودكم نحو الكمال.</p>
	</div>
	<div class="col-xs-4" dir="rtl">

		<h3>
			رؤيتنا
		</h3>

		<p>تمكين الاشخاص والمؤسسات من دخول عالم التقنية والتعامل معها والاستفادة منها, بطرق آمنه ورخيصة.</p>
	</div>
	
<div class="col-xs-4" dir="rtl">

		<h3>أوبااا</h3>

		<p>نقوم بتصميم وبرمجة مواقع ويب وتطبيقات خدمية معتمدين على تقنيات حرة. كما نحمل مسؤولية إجتماعية لنشر وتمكين المعرفة للجميع.</p> 
	</div>
</div>
	@stop