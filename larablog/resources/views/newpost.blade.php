<html>
	<head>
		<title>LaraBlog New Post</title>
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
			
			<form action="/posts" method="POST">
				@csrf
				<div class="form-group">
					<label>Post Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Post Body</label>
					<textarea name="body" class="form-control" rows="15"></textarea>
				</div>
				<div class="form-group">
					<label>Category</label>
					<input type="text" name="category" class="form-control">
				</div>
        <div class="form-group">
					<input type="submit" value="Create Post" class="btn btn-md btn-success">
				</div>                                        
			</form>
		</div>
	</body>
</html>
