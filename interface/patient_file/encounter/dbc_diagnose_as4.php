<?php include_once("../../../interface/globals.php");?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="../../../library/js/jquery.js"></script>

<script type="text/javascript">
function win() {
  window.opener.location.reload(true);
    self.close();
}
</script>
                                                                                
<?php
if ( isset($_POST['saveas']) ) { 
  // only one level records for as = 4
  $as = $_POST['box1'];
  $_SESSION['as4'] = $as;
}
?>

</head>

<body onunload="win();" bgcolor="#A4FF8B">
  <p>Choose your AS IV diagnose</p>

 <form method="post" target="_self">
  <table border=0 cellspacing=0 cellpadding=0 >
  <tr>
   <td width='1%' nowrap>
 <select name="box1" id="box1">
  <?php
  $rlvone = records_level1('as4');
  foreach ($rlvone as $rlv) {
    echo '<option value=\'' .$rlv['cl_diagnose_code']. '\'>' .substr($rlv['cl_diagnose_element'], 0, 70). '</option>';
  } ?>
</select>
       </td></tr>
 </table>
 <input type="submit" value="Choose" name="saveas"/>
 <input type="button" value="Close" onclick="window.close();" />
 </form>
                                                          
  
</body>
</html>
