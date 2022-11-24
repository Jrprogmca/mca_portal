<?php

  // Checkin What level user has permission to view this page
  //page_require_level(1);
if(isset($_GET['view_page'])) {} else redirect('index.php');
$view_page = $_GET['view_page'];
  $page_title = 'Year - '.$view_page;
  require_once('includes/load.php');

  $all_year = find_all_year('year');
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Year  <i> - <?php echo $view_page;?></i></span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Year</th>
                    <th class="text-center" style="width: 100px;"></th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_year as $cat):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($cat['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="files.php?id=<?php echo $cat['name'];?>&view_page=<?php echo $view_page;?>"  class="btn btn-xs btn-primary" data-toggle="tooltip" title="View">
                          View
                        </a>
                      </div>
                    </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
