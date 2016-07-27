<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Post</title>
        	<!-- Bootstrap Core CSS -->
	    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body>

    	<div class="container">
    		<form action="posts.php" method="post" role="form">             
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label>Title name</label>
                            <input type="text" name="title_name" class="form-control" placeholder="Title name">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" rows="3"></textarea>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
    	</div>
        
        <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- CKEditor-->
    <script src="ckeditor/ckeditor.js"></script>
    
    <script type="text/javascript">
         CKEDITOR.replace('content');
         CKEDITOR.config.toolbarGroups = [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'colors' },
                { name: 'tools' },
        ];
    </script>
    </body>
</html>