<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<div class="container">

		<h1 class="text-center mb-3 mt-3">Filter Gallery</h1>

		<div class="text-center mb-3">
			<button class="btn btn-default" data-filter="all">All Images</button>
			<button class="btn btn-default" data-filter="girls">Images Girls</button>
			<button class="btn btn-default" data-filter="reka">Images Reka</button>
			<button class="btn btn-default" data-filter="code">Script Code</button>
		</div>

		<hr/>

		<div class="row">

			<div class="mb-3 col-md-6 filter girls">
				<img src="http://drawings-girls.ucoz.net/2017/11/devushka-s-okrovavlennim-serpom.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col-md-6 filter reka">
				<img src="http://bootstraptema.ru/images/demo/1920x1080/demo1.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col-md-6 filter girls">
				<img src="http://drawings-girls.ucoz.net/2017/11/blondinka-na-trave.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col-md-6 filter reka">
				<img src="http://bootstraptema.ru/images/demo/1920x1080/demo2.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col-md-6 filter girls">
				<img src="http://drawings-girls.ucoz.net/2017/06/devushka-s-izranenim-licom.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col-md-6 filter reka">
				<img src="http://bootstraptema.ru/images/demo/1920x1080/demo3.jpg" class="img-fluid">
			</div>

			<div class="mb-3 col filter code">
				<pre><code>
					$(document).ready(function(){

					$("button").click(function(){
					var value = $(this).attr('data-filter');
					
					if(value == "all")
					{
						$('.filter').show('1000');
					}
					else
					{
						$(".filter").not('.'+value).hide('3000');
						$('.filter').filter('.'+value).show('3000');
						
					}
				});
				
				if ($("button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");

		});
	</code></pre>
</div>

</div>

</div>

<script>
	$(document).ready(function(){

		$("button").click(function(){
			var value = $(this).attr('data-filter');
			
			if(value == "all")
			{
				$('.filter').show('1000');
			}
			else
			{
				$(".filter").not('.'+value).hide('3000');
				$('.filter').filter('.'+value).show('3000');
				
			}
		});
		
		if ($("button").removeClass("active")) {
			$(this).removeClass("active");
		}
		$(this).addClass("active");

	});
</script>
</body>
</html>