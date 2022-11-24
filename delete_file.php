<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $find_data_table = find_by_id('data_table',(int)$_GET['id']);
  $acc_year = $_GET['year_id'];
  $page= $_GET['page'];
  $photo = new data_table();
  if($photo->data_table_destroy($find_data_table['id'],$find_data_table['file_name'])){
      $session->msg("s","Photo has been deleted.");
      redirect('files.php?id='.$acc_year.'&view_page='.$page);
  } else {
      $session->msg("d","Photo deletion failed Or Missing Prm.");
      redirect('files.php?id='.$acc_year.'&view_page='.$page);
  }
?>
