<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
    <title>Dashboard</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="admin/css/admin.css">
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="-page-wrapper">
      <div class="navbar-collapse collapse mo-sidebar">
        <ul class="mo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="mo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li class="active"><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
          
          <li><a href="admin/reservasi/categories.php"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>reservasi</a></li>
          <li><a href="tables.html"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Preferences</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="mo-content-wrapper">
        <div class="mo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Overview</li>
    
<div class="home-content">
			<h3>Categories</h3>
			<button type="button" class="btn btn-tambah">
				<a href="categories-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Photo</th>
						<th>Categories</th>
						<th scope="col" style="width: 30%">Description</th>
						<th scope="col" style="width: 15%">Price</th>
						<th scope="col" style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
					
<tr>
				<td colspan='5' align ='center'>
                          
                        </td>
			   </tr>
				                    <tr>
 <td>
                        <img src='../img_categories/$data[photo]' width='200px'>
                      </td>
                      <td>$data[categories]</td>
					  <td>$data[description]</td>
                      <td>$data[price]</td>
                      <td >
                        <a class='btn-edit' href=categories-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=categories-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  
					
					
				</tbody>
			</table>
		</div>

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="mo-footer">
        <div class="mo-copyright">
          <p>Copyright &copy; 2024 Hotel Reservation</p>
        </div>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/mo_script.js"></script>
    <script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
      {
        label: "My First dataset",
        fillColor : "rgba(220,220,220,0.2)",
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        label: "My Second dataset",
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
      ]

    }

    window.onload = function(){
      var ctx_line = document.getElementById("mo-line-chart").getContext("2d");
      window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
      });
    };

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>
