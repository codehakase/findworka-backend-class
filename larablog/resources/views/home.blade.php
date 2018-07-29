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
			<div class="clearfix"></div>
			<br><br>
			<a href="/post/new" class="btn btn-sm btn-primary">Add New Article</a> 
			@foreach ($posts as $post)
			<div class="card">
				<div class="card-header">
          <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
				</div>
				<div class="card-body blog-body">
          <p>{!! \Illuminate\Support\Str::words($post->body, 40,'....')  !!} <a href="/posts/{{ $post->id }}">[Read More]</a></p>
					<ul class="attrib">
						<li>Written by: Shola Money</li>
						<li>Published: {{ $post->created_at->diffForHumans() }}</li>
					</ul>
				</div>
			</div>
			@endforeach
    </div>
  </body>
</html>
