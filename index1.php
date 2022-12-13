<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        
	<div class="container">
        <form action="php/create.php" 
              method="post">
		   <h1><center>Add Biller</ceter></h1><br>
		  
           <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
		   <div class="form-group">
		     <label for="billername"><i class="zmdi zmdi-card"></i></label>
		     <input type="text" 
		           class="form-control" 
		           id="billername" 
		           name="billername" 
                           value="<?php if(isset($_GET['billername']))
		                           echo($_GET['billername']); ?>" 
		           placeholder="Please enter biller name">
		   </div>
           <div class="form-group">
		     <label for="amount"><i class="zmdi zmdi-money"></i></label>
		     <input type="amount" 
		           class="form-control" 
		           id="amount" 
		           name="amount" 
                           value="<?php if(isset($_GET['amount']))
		                           echo($_GET['amount']); ?>" 
		           placeholder="Please enter amount">
		   </div>
           <div class="form-group">
                    <center><label for="billtype">Select Bill Type:</label>
                            <select class="form-select"
                                    name="billtype"
                                    aria-label="Default select example">
                            <option selected value="subscription">Subscription</option>
                            <option value="utility">Utility</option>
                    </select>
                    </center>
            </div>
            <div class="form-group">
            <center><label for="duedate"><i class="zmdi zmdi-calendar"></i></label>
                    <input type="date" 
		           class="form-control" 
		           id="duedate" 
		           name="duedate">
                    </center>
            </div>
            <div class="form-group">
		     <label for="remarks"><i class="zmdi zmdi-comment"></i></label>
		     <input type="text" 
		           class="form-control" 
		           id="remarks" 
		           name="remarks" 
                           value="<?php if(isset($_GET['remarks']))
		                           echo($_GET['remarks']); ?>" 
		           placeholder="Please enter your remarks">
		   </div>
           <div class="form-group form-button">
            <input type="submit" 
                    name="create"
                    id="save" 
                    class="form-submit" value="Save"/><a href="read.php" class="btn btn-success">View Account</a>
                    </div>

	    </form>
	</div>
</body>
</html>
