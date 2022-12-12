<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <form action="php/update.php" 
              method="post">
		   <h1><center>UPDATE</ceter></h1><br>
		  
           <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
		   <div class="form-group">
		     <label for="billername"><i class="zmdi zmdi-lock"></i></label>
		     <input type="text" 
		           class="form-control" 
		           id="billername" 
		           name="billername" 
                           value="<?=$row['billername'] ?>" >
		   </div>
           <div class="form-group">
		     <label for="amount"><i class="zmdi zmdi-lock"></i></label>
		     <input type="amount" 
		           class="form-control" 
		           id="amount" 
		           name="amount" 
                           value="<?=$row['amount'] ?>" >
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
            <center><label for="duedate"><i class="zmdi zmdi-lock"></i></label>
                    <input type="date" 
		           class="form-control" 
		           id="duedate" 
		           name="duedate">
                    </center>
            </div>
            <div class="form-group">
		     <label for="remarks"><i class="zmdi zmdi-lock"></i></label>
		     <input type="text" 
		           class="form-control" 
		           id="remarks" 
		           name="remarks" 
                   value="<?=$row['remarks'] ?>" >
		   </div>
           <input type="text" 
                  name="id"
                  value="<?=$row['id'] ?>"
                  hidden >
           <div class="form-group form-button">
            <input type="submit" 
                    name="update"
                    id="update" 
                    class="form-submit" value="Update"/><a href ="read.php" class ="link-primary">View</a>
                    </div>

	    </form>
	</div>
</body>
</html>
