<?php
$categorie = $_GET['id'];
$view_page = $_GET['view_page'];
$page_title = $view_page;;
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   //page_require_level(1);
  //$products = join_product_table();
  $data_table_files = find_all_students('data_table');
if(isset($_GET['view_page'])) {} else redirect('index.php');
  if(isset($_GET['id'])) {} else redirect('index.php');
?>
<?php include_once('layouts/header.php'); ?>
<?php
  //Display all catgories.

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span><?php echo $view_page;?> Files (<?php echo$categorie;?>)</span>
         </strong>
         <div class="pull-right">
            <input id="myInput" type="text" placeholder="Search...">
         </div>
         <?php if($session->isUserLoggedIn(true)) { ?>
         <div class="pull-right">
           <form  action="upload_file.php" method="POST" enctype="multipart/form-data">
             <input type="hidden" id="academic-year" name="academic-year" value="<?php echo $categorie;?>">
             <input type="hidden" id="page" name="page" value="<?php echo $view_page;?>">
          <div class="pull-right" ><input type="file" required name="file_upload" class="btn btn-default" multiple="multiple" style="text-indent: 0px;padding:2px; margin-right: 20px;" /></div>
  <div class="pull-right"><button type="submit" name="submit" class="btn btn-default" style="text-indent: 0px;padding:3px;">Upload</button></div>
          </form>
         </div>     <?php } ?>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 5%;">#</th>
                <!--<th> Name</th>-->
                <th class="text-left" style="width: 60%;"> File name</th>

                <th class="text-center" style="width: 20%;"> Date </th>

                <!--<th class="text-center" style="width: 10%;"> </th> -->
     <?php if($session->isUserLoggedIn(true)) { ?>
                <th class="text-center" style="width: 5%;"></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php $empty=0; foreach ($data_table_files as $data_table_file):
                if ($data_table_file['menu_col'] == $view_page && $data_table_file['academic_year'] == $categorie){ $empty =1;
                ?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td class="text-left"><a href="<?php echo remove_junk('uploads/files/'.$data_table_file['file_name']); ?>"> <?php echo remove_junk($data_table_file['file_name']); ?></a></td>
                <td class="text-center"> <?php echo date("d-M-Y h:i:s a", strtotime($data_table_file['date_time'])); ?></td>
     <?php if($session->isUserLoggedIn(true)) { ?>
                    <td class="text-center">
                      <a href="delete_file.php?id=<?php echo (int) $data_table_file['id'];?>&year_id=<?php echo $data_table_file['academic_year'];?>&page=<?php echo $view_page;?>";" class="btn btn-danger btn-xs"  title="Delete">
                        <span class="glyphicon glyphicon-trash"></span>
                      </a>
                    </td>
                       <?php } ?>
              </tr>
            <?php } endforeach;
            if ($empty == 0) {
  ?><td class="text-center">*</td><td class="text-left">Empty</td><td class="text-center">---</td><td class="text-center"></td><td class="text-center"></td>
  <?php
}
             ?>
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
