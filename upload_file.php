<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
if(isset($_POST['submit'])) {
$photo = new data_table();
$photo->upload($_FILES['file_upload']);
$acc_year=$_POST['academic-year'];
$page=$_POST['page'];
  if($photo->process_data_table($acc_year,$page)){
      $session->msg('s','File has been uploaded.');
      redirect('files.php?id='.$acc_year.'&view_page='.$page);
  } else{
    $session->msg('d',join($photo->errors));
   redirect('files.php?id='.$acc_year.'&view_page='.$page);
 }
}
?>
