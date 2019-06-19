

<?php  
  $sqlstream = mysql_query("SELECT * FROM listing_streaming ORDER BY id_streaming ASC");
  while($data = mysql_fetch_array($sqlstream)){
?>
	<!-- <option value="<?php echo $data['lokasi_streaming'] ?>" style="  text-transform: capitalize;"><?php echo $data['lokasi_streaming'] ?></option> -->
<?php } ?>