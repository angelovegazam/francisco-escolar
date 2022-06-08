<?php
include("database.php");
$nombres = '';
$apellidos = '';
$cedula_identidad = '';

// if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM registro_estudiantes WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
    $cedula_identidad = $row['cedula_identidad'];
  }
// }

// if (isset($_POST['edit'])) {
  $id = $_GET['id'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $cedula_identidad = $_POST['cedula_identidad'];

  $query = "UPDATE registro_estudiantes set nombres = '$nombres', apellidos = '$apellidos', cedula_identidad = '$cedula_identidad' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
// }

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
