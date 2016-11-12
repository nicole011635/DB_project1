<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MANAGE PAGE_Auntie Wu soap workshop</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
			 		 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">賣家管理</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">管理商品</a>
						</li>
						<li>
							<a href="#">管理訂單</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
		<div class="col-md-12" style="width: 94%; margin-left: 3%;">
			
			<ul class="breadcrumb">
				<li>
					<a href="#">賣家管理</a> <span class="divider"></span>
				</li>
				<li class="active">
					管理商品
				</li>
			</ul>
			<div class="col-md-12">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="text" name="" value=""> 
						<select id="selectClass" name="selectClass"> 
							<option value="所有商品">所有商品</option> 
							<option value="洗顏沐浴皂">洗顏沐浴</option> 
							<option value="洗髮皂">洗髮皂</option> 
						</select> 
					<input type="submit" value="submit">
				</form>
			</div>
			<form action="m_productInfor.php" method="post">&nbsp;
				<div class="col-md-12" style="text-align:center;border-width:1px; border-style:solid;padding:4%;">
<?php 

include("auntie-connect.php");

$sql='SELECT * FROM `soap`';

/*
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$sClass=$_POST['selectClass'];
	$sql='SELECT * FROM `soap` WHERE `sClass`="'.$sClass.'"';
}
*/
		

if ($result=mysqli_query($con,$sql)){
	while($row=mysqli_fetch_array($result)){

?>			
			
 					<button type="submit" name="sName" value="<?php echo $row['sName'];?>" style="border: none;padding:0px;width:50%">
						<pre style="text-align:left;"><img src="pic/<?php echo $row['sPic'];?>" width="20%">	<?php echo $row['sName'];?>		<?php echo $row['sCharge'];?>	</pre>
					</button>
					<br>

<?php
	}//end while
}//end if
?>			
				</div>
			</form>

		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>