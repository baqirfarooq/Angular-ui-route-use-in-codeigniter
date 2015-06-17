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
