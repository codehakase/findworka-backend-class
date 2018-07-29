<!Doctype html>
<html>
	<head>
		<title>LaraBlog</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" />
		<style>
.blog-body {
	padding: 14px 16px;
}
						ul.attrib > li {
							font-size: 12px;
						}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="text-center">
				<h1>LaraBlog</h1>
			</div>
			<div>
				<h3>{{ $post->title }}</h3>
				<small>Published by Sample User, on {{ $post->created_at->diffForHumans() }}
				<hr>

				<p>{!! nl2br($post->body) !!}</p>
			</div>
		</div>
	</body>
</html>
