<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>QA Url Checker</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
	html,body { height:100%;  }
	.site-wrapper { padding-top:15px; height:100%; }

	.custom-inline {  }
	.custom-inline .form-group { width:calc(100% - 110px); }
	.custom-inline .form-group .form-control { width:calc(100% - 150px); }
	.btn-url-check { width:100px; }
	#url {  }
	.logo { margin-right: 15px; }
	.col-700px { width:700px; }
	.col-adapt700 { width: calc(100% - 700px); }
</style>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>


<div class="site-wrapper">


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<form class="form-inline custom-inline" action="iframe.php" method="post" target="form_submit">
				  <div class="form-group">
				  	<a class="logo" href="#"><img src="http://via.placeholder.com/50x50?text=logo" alt="T.E.A.M"></a>
				    <label for="url">Enter URL</label>
				    <input name="url" value="http://view.e.icis.com/?qs=1b22d3ca56f901e519fbc54806888dbcf7cd2bfc688daf9149b621f6fb493b7ce72c63aa72fe2ccd8d9aa1ec21a0ecb5c90c2033964ebd1f45bd5b4ad5fdf9d847850637cfda7b7205d3504d7dc06094" type="text" class="form-control" id="url" placeholder="http://helloworld.com/test.html">
				  </div>
				  <button type="submit" class="btn btn-info btn-url-check">Check</button>
				</form>
				<hr>
			</div>
		</div>
	</div>

	<iframe src="iframe.php" width="100%" style="height:calc(100% - 95px)" frameborder="0" id="form_submit" name="form_submit"></iframe>

</div>



<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>