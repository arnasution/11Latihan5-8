
<!-- Arif Rahman  - PEMEROGRAMAN WEB 2 -->

<?
 = mysqli_connect("localhost","root","");
mysqli_select_db($mysqli,"lat_dbase");
$hasil=mysqli_query($mysqli,"select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit";
?> 