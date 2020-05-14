<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="../dist/css/styles.css"/>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>jQuery Ajax Form Submit Example In PHP</h2>
                </div>
                <p>Please fill all fields in the form</p>
 
                <p id="show_message" style="display: none">Form data sent. Thanks for your comments.We will update you within 24 hours. </p>
 
                <span id="error" style="display: none"></span>
 
                <form action="javascript:void(0)" method="post" id="ajax-form">
 
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
                    </div>
 
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="" maxlength="30" >
                    </div>
 
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" value="" maxlength="12" >
                    </div> 
 
                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
             
                </form>
            </div>
        </div>    
    </div>
<script type="text/javascript" src="../dist/js/scripts.min.js"></script>	
</body>
</html>
