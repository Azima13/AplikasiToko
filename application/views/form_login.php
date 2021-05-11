<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Toko Online </title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<style>

		        body {
		            background-color: #3d579d;
		            color: #fff;
		        }
		        a{
		            color: #002166;
		        }
		        a:hover{
		            text-decoration: none;
		            color: #fff;
		        }
		        .form-signin:hover{
		            border: 2px solid #fff;
		        }
		        .form-signin .form-signin-heading,
		        .form-signin {
		            margin-bottom: 10px;
		        }
		        .form-group input[type="text"],
		        .form-group input[type="password"] {
		            font-size: 16px;
		            height: auto;
		            margin-bottom: 10px;
		            padding: 4px 9px;
		        }
		        .text-center{
		            text-align: center;
		        }
		    </style>

	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>

		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<?=form_open('login', ['class'=>'form-horizontal'])?>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-4 control-label">Username</label>
			<div class="col-sm-5">
			  <input type="text" class="form-control" name="username">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-4 control-label">Password</label>
			<div class="col-sm-5">
			  <input type="password" class="form-control" name="password">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-4 col-sm-10">
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Remember me
				</label>
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-4 col-sm-10">
			  <button type="submit" class="btn btn-default">Sign in</button>
			</div>
		  </div>
		</form>

	</body>
</html>
