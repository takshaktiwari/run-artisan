<!DOCTYPE html>
<html>
<head>
	<title>Run Artisan Output</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" SameSite=Secure>

</head>
<body style="background-color: #ececec">
	<section>
		<h1 class="font-weight-bold text-secondary py-4 text-center">-: Artisan Output :-</h1>

		<div class="output bg-dark p-sm-5 p-3">
			@foreach($output as $out)
				<h5>
					<pre class="text-warning">{{ $out }}</pre>
				</h5>
			@endforeach
		</div>

		<div class="text-center mt-5">
			<ul class="list-unstyled" style="font-size: 18px;">
				<li class="mb-2">
					<a href="https://github.com/takshaktiwari/run-artisan" target="_blank">
						<i class="fab fa-github"></i>
						https://github.com/takshaktiwari/run-artisan
					</a>
				</li>
				<li>
					<a href="mailto:takshaktiwari@gmail.com" target="_blank">
						<i class="fas fa-envelope"></i>
						takshaktiwari@gmail.com
					</a>
				</li>
			</ul>
		</div>
	</section>
</body>
</html>