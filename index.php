<?php
  $page_title = 'Dashboard';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  // page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('year');
 $c_product       = count_by_id('data_table');
 $c_user          = count_by_id('users');
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>
  <div class="row">
    <a href="year.php?view_page=Student" style="color:black;">
		<div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-secondary1">
          <i class="glyphicon glyphicon-list-alt"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 1 </h2>
          <p class="text-muted">Students</p>
        </div>
       </div>
    </div>
	</a>

	<a href="year.php?view_page=Elective" style="color:black;">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-credit-card"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 2 </h2>
          <p class="text-muted">Electives</p>
        </div>
       </div>
    </div>
	</a>

	<a href="year.php?view_page=Examination" style="color:black;">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-blue2">
          <i class="glyphicon glyphicon-book"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">3</h2>
          <p class="text-muted">Examination</p>
        </div>
       </div>
    </div>
	</a>

	<a href="year.php?view_page=Software" style="color:black;">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
          <i class="glyphicon glyphicon-floppy-disk"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">4</h2>
          <p class="text-muted">Software</p>
        </div>
       </div>
    </div>
	</a>
</div>

  <div class="row">



 </div>



<?php include_once('layouts/footer.php'); ?>
