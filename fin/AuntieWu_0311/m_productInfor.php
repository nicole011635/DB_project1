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
							<a href="m_product.php">管理商品</a>
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
		<div class="col-md-12 content">
			<ul class="breadcrumb">
				<li>
					<a href="#">賣家管理</a> <span class="divider"></span>
				</li>
				<li>
					<a href="m_product.php">管理商品</a> <span class="divider"></span>
				</li>
				<li class="active">
					<?php echo $_POST['sName']; ?>
				</li>
			</ul>






			<form action="#" method="post">
			<!-- 產品詳細資訊 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<b>產品資訊與規格</b>
					</h3>
				</div>
				<div class="panel-body">
					
				<div class="form-group">					 
					<label>
						商品分類
					</label>
					<select name="sClass">
						<option value="洗顏沐浴皂">洗顏沐浴皂</option>
						<option value="洗髮皂">洗髮皂</option>
						<option value="沐浴乳液體皂">沐浴乳液體皂</option>
						<option value="洗髮精液體皂">洗髮精液體皂</option>
						<option value="美白保養系列">美白保養系列</option>
						<option value="寵愛寵物皂">寵愛寵物皂</option>
						<option value="代製母乳皂">代製母乳皂</option>
						<option value="個人膚質客製手工皂">個人膚質客製手工皂</option>

					</select><br>									 
					<label>
						商品名稱
					</label>
					<input type="text" size="15px" name="proName" value="<?php echo $_POST['sName']; ?>"><br>
				
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>






				</div>
				<div class="panel-footer">
					Panel footer
				</div>
			</div>
			
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>