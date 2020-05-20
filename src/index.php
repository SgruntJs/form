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
                <p>Required fields *</p>
 
                <p id="show_message" style="display: none">Form data sent. Thanks for your comments.We will update you within 24 hours. </p>
 
                <span id="error" style="display: none"></span>
 
                <form action="javascript:void(0)" method="post" id="ajax-form">
 
                    <div class="form-group">
                        <label>Your customer reference</label>
                        <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
                    </div>
 					<input type="hidden" name="" id="">
	 				<div class="form-group">
	                        <label>Serial number</label>
	                        <input type="text" name="serialnumber" id="serialnumber" class="form-control" value="" maxlength="50" >
	                </div>
	               <div class="form-group">
	               	<select id="productList" class="form-control">
		               <option value = " ">Product status</option>
		               <option value = "2">Already bought by an end client</option>
		               <option value = "3">three</option>
		               <option value = "4">four</option>
		             </select>
         			</div>
         			 <div class="form-group form-control--pd" style="display: none;">
                        <label>Please indicate the customer  purchase date</label>
                        <input type="text" name="email" id="purchasedate" class="form-control" value="" placeholder="dd/mm/yyyy" >
                    </div>
 					<div class="form-group">
	               	<select id="requiredService" class="form-control">
		               <option value = " ">PAdvanced Substitution</option>
		               <option value = "2">Already bought by an end client</option>
		               <option value = "3">three</option>
		               <option value = "4">four</option>
		             </select>
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
<script type="text/javascript" src="js/form.js"></script>	
</body>
</html>
