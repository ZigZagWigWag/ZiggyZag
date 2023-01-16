<?PHP include ('config.php');
//lengkapkan aturcara ini
header("location:index.php");
$id_pelajar = $_GET['id_pelajar'];

$result = mysqli_query($connect,"DELETE FROM pelajar WHERE id_pelajar='$id_pelajar'");
?>




