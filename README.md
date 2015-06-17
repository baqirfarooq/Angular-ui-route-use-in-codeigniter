# Angular-ui-route-use-in-codeigniter
Use the Angular ui Route in Codeigniter

###Controller
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// construct
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('layout/template');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

```
###View
Create Layout Folder In View In Layout Folder Create template.php file
```php
<!DOCTYPE HTML>
<html lang="en" ng-app="angularCodeigniter">
<head>
<base href="<?php echo base_url(); ?>">
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
<script>var BASE_URL = "<?php echo base_url(); ?>";</script>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Angular ui-Route Use In CodeIgniter</a>
    </div>
    
</nav>
<div style="margin-bottom: 10%;">&nbsp;</div>

<!-- ui-view -->
<ui-view> </ui-view>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>
</html>

```
create login.php file in View Folder
```php
<div class="container" ng-controller="LoginCtrl">
	
	<div class="col-md-offset-3 col-md-6">

	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Login</h3>
		  </div>
		  <div class="panel-body">
				<form action="" method="POST" role="form">
			
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" placeholder="">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="text" class="form-control" id="" placeholder="">
					</div>
					<div class="pull-right">
						<a ui-sref="dashboard" class="btn btn-primary">Dashboard</a>
						<button type="submit" class="btn btn-primary">Login</button>

					</div>
					
				</form>
		  </div>
	</div>
		


	</div>


</div>
```


