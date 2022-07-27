<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Typography :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<!-- Login session is started -->
<?php
	session_start();
	if(isset($_SESSION['userfname']))
	{
?>
			
	<div class="account">
		<button onclick=my_account()>My Account</button>
	</div>
			
	<div class="logout">
		<button onclick=handle_logout()>LogOut</button>		
	</div>

<?php
	}
?>
<!-- Log Out Script -->
<script>
	function handle_logout() {
		window.location.href = 'logout.php';
	}

	function my_account() {
		window.location.href = 'account.php';
	}
</script>

<style>
	.logout {
		margin:20px;
		margin-left:1203px;
		margin-top:-44px;
	}

	.account {
		margin:20px;
	}
</style>

<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.php"><img src="images/logo2.png" alt=" " /><h1>FASHION<span>CLUB</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+18045403380</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.php" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
												<li><a href="kids.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
												<li><a href="party.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Party Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
												<li><a href="night.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
												<li><a href="formals.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
												<li><a href="inner.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.php"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
												<li><a href="watches.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
												<li><a href="cosmetics.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="deos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="haircare.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="shoes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
												<li><a href="handbags.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
												<li><a href="skincare.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.php"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="about.php" class="hyper"><span>About</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="search.php" method="get">
				<input type="search" name="Search" id="search" placeholder="Search for a Product..." required="">
				<div id="productlist"></div>
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>

		<!-- AutoComplete Search CSS Code -->
		<style>
        ul {
            background-color: #eee;
            cursor: pointer;
        }

        li {
            padding: 12px;
        }
    	</style>

		<!-- AutoComplete Search Ajax Code -->
		<script>
    $(document).ready(function()
    {
        $('#search').keyup(function()
        {
            var query = $(this).val();

            if(query != '')
            {
                $.ajax({
                        url:"auto_search.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#productlist').fadeIn();
                            $('#productlist').html(data);
                        }
                });
            }
            else{
                $('#productlist').fadeOut();
                $('#productlist').html("");
            }
        });

        $(document).on('click','li',function(){
            $('#search').val($(this).text());
            $('#productlist').fadeOut();
        })
    });
</script>

		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner">
</div>
<div class="typography main-grid-border">
		<div class="container">
			
			<div class="typo-grid">
				<div class="typo-1">
					  <div class="grid_3 grid_4">
					  <h3 class="head-top">Headings</h3>
					  <div class="bs-example">
						<table class="table">
						  <tbody>
							<tr>
							  <td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
							  <td class="type-info">Semibold 36px</td>
							</tr>
							<tr>
							  <td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
							  <td class="type-info">Semibold 30px</td>
							</tr>
							<tr>
							  <td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
							  <td class="type-info">Semibold 24px</td>
							</tr>
							<tr>
							  <td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
							  <td class="type-info">Semibold 18px</td>
							</tr>
							<tr>
							  <td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
							  <td class="type-info">Semibold 14px</td>
							</tr>
							<tr>
							  <td><h6>h6. Bootstrap heading</h6></td>
							  <td class="type-info">Semibold 12px</td>
							</tr>
						  </tbody>
						</table>
						</div>
					  </div>
					  <div class="grid_3 grid_5">
						<h3 class="head-top">Labels</h3>
						 <div class="but_list">
						  <h1>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h1>
						  <h2>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h2>
						  <h3>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h3>
						  <h4>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h4>
						  <h5>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h5>
						  <h6>
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
						  </h6>
						 </div>
					   </div>
					   <div class="grid_3 grid_5">
						 <h3 class="head-top">Progress Bars</h3>
							 <div class="tab-content">
								  <div class="tab-pane active" id="domprogress">
									  <div class="progress">    
										<div class="progress-bar progress-bar-primary" style="width: 20%"></div>
									  </div>
									  <p>Info with <code>progress-bar-info</code> class.</p>
									  <div class="progress">    
										<div class="progress-bar progress-bar-info" style="width: 60%"></div>
									  </div>
									  <p>Success with <code>progress-bar-success</code> class.</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 30%"></div>
									  </div>
									  <p>Warning with <code>progress-bar-warning</code> class.</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
									  </div>
									  <p>Danger with <code>progress-bar-danger</code> class.</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-danger" style="width: 50%"></div>
									  </div>
									  <p>Inverse with <code>progress-bar-inverse</code> class.</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
									  </div>
									   <p>Inverse with <code>progress-bar-inverse</code> class.</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
										<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
										<div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
									  </div>
								</div>
						   </div>
					   </div>
					   <div class="grid_3 grid_5">
						 <h3 class="head-top">Alerts</h3>
						 <div class="but_list">
						   <div class="alert alert-success" role="alert">
							<strong>Well done!</strong> You successfully read this important alert message.
						   </div>
						   <div class="alert alert-info" role="alert">
							<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
						   </div>
						   <div class="alert alert-warning" role="alert">
							<strong>Warning!</strong> Best check yo self, you're not looking too good.
						   </div>
						   <div class="alert alert-danger" role="alert">
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						   </div>
						 </div>
					   </div>
					   <div class="grid_3 grid_5">
						 <h3 class="head-top">Pagination</h3>
						 <div class="col-md-6 page_1">
						  <nav>
						  <ul class="pagination pagination-lg">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						  </ul>
						  </nav>
						  <nav>
						  <ul class="pagination">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						  </ul>
						</nav>
						<nav>
						  <ul class="pagination pagination-sm">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						  </ul>
						</nav>
						</div>
						<div class="col-md-6 page_1">
							<ul class="pagination pagination-lg">
								<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><span aria-hidden="true">»</span></a></li>
						   </ul>
						<nav>
						  <ul class="pagination">
							<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						 </ul>
					   </nav>
						 <ul class="pagination pagination-sm">
							<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><span aria-hidden="true">»</span></a></li>
						</ul>
						</div>
					   <div class="clearfix"> </div>
					   </div>
					   <div class="grid_3 grid_5">
						 <h3 class="head-top">Breadcrumbs</h3>
						 <div class="but_list">
							<ol class="breadcrumb">
							  <li class="active">Home</li>
							</ol>
							<ol class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li class="active">Library</li>
							</ol>
							<ol class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li><a href="#">Library</a></li>
							  <li class="active">Data</li>
							</ol>
						  </div>
					   </div>
					   <div class="grid_3 grid_5">
						 <h3 class="head-top">Badges</h3>
						   <div class="but_list">
							<div class="col-md-6 page_1">
								<p>Add modifier classes to change the appearance of a badge.</p>
								  <table class="table table-bordered">
									<thead>
										<tr>
											<th width="50%">Classes</th>
											<th width="50%">Badges</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>No modifiers</td>
											<td><span class="badge">42</span></td>
										</tr>
										<tr>
											<td><code>.badge-primary</code></td>
											<td><span class="badge badge-primary">1</span></td>
										</tr>
										<tr>
											<td><code>.badge-success</code></td>
											<td><span class="badge badge-success">22</span></td>
										</tr>
										<tr>
											<td><code>.badge-info</code></td>
											<td><span class="badge badge-info">30</span></td>
										</tr>
										<tr>
											<td><code>.badge-warning</code></td>
											<td><span class="badge badge-warning">412</span></td>
										</tr>
										<tr>
											<td><code>.badge-danger</code></td>
											<td><span class="badge badge-danger">999</span></td>
										</tr>
									</tbody>
								  </table>                    
							</div>
							<div class="col-md-6 page_1">
							  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
								<div class="list-group list-group-alternate"> 
									<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
									<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
									<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
									<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
									<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
									<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
								</div>
						   </div>
						   <div class="clearfix"> </div>
						   </div>
						 </div>
						 <div class="grid_3 grid_5">
							 <h3 class="head-top">Tabs</h3>
							 <div class="but_list">
							   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
								  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
								  <li role="presentation" class="dropdown">
									<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
									  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
									</ul>
								  </li>
								</ul>
							<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							  </div>
							</div>
					   </div>
					   </div>
					  </div>
      
				</div>
			</div>
		</div>	
		
	</div>
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2>Newsletter</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="subscribe_email.php" method="post">
					<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/logo2.png" alt=" " /><h3>FASHION<span>CLUB</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>New York City.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="icons.php">Web Icons</a></li>
				<li><a href="typography.php">Typography</a></li>
				<li><a href="faq.php">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="jewellery.php">Jewellery</a></li>
				<li><a href="cosmetics.php">Cosmetics</a></li>
				<li><a href="shoes.php">Shoes</a></li>
				<li><a href="deos.php">Deos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<li><a href="recommended.php">Recommended </a></li>
				<li><a href="payment.php">Payments</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>