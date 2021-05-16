<?php 
	require_once './connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="Styles.css"  rel="stylesheet" >
    <title>Document</title>
</head>
<body>

    

<div class="body">
<form action="delete.php" method="POST" >

  <header class="p-3 header text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          
          <h1 style="color: white;">Product Add</h1>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
        </ul>

        

        <div class="text-end">
          <button type="button" id="submit" class="btn btn-outline-light me-2" name="btn2"><a  href="addNew.php">Add</a></button>
          <button  type="submit" class="btn btn-danger" id="Delete" name="Delete" value="Delete">Mass Delete</button>
          <!-- <a style='color:white' href="">Mass Delete</a> -->
        </div>
      </div>
    </div>
  </header>
  <div style='color:white' class="hr__line-break"><hr /></div>

<div class="container-fluid">
<div class="row">
<H1>Movies</H1>
<?php 
				$sql = "SELECT * FROM products WHERE type='CD'";
				$result = mysqli_query($conn, $sql);
				$rowCount = mysqli_num_rows($result);
				if($rowCount > 0) {
					while ($row = mysqli_fetch_assoc($result)) { 


echo '<div class="card" style="width: 18rem;">
<input type="checkbox" id="checkbox" name="check[]" value="'.$row['id'].'">
<center>
  <div class="card-body">
    <h5 class="card-title"> SKU: '.$row['id_name'].'</h5>
    <h6 class="card-subtitle mb-2 text-muted"> Name:' .$row['name']. '</h6>
    <p class="card-text"> Price:'.$row['price'].'$</p>
    <p class="card-text"> Sizr:'.$row['size'].'MB </p>
  </div>
  </center>
</div>';

          }
          } 
          ?>



</div>
</div>


<!-- Books -->


<div class="container-fluid">
  <div class="row">
  <H1>Books</H1>

  <?php 
				$sql = "SELECT * FROM products WHERE type='Books'";
				$result = mysqli_query($conn, $sql);
				$rowCount = mysqli_num_rows($result);
				if($rowCount > 0) {
					while ($row = mysqli_fetch_assoc($result)) { 


echo '<div class="card" style="width: 18rem;">
<input type="checkbox" id="checkbox" name="check[]" value="'.$row['id'].'">
<center>
  <div class="card-body">
    <h5 class="card-title"> SKU: '.$row['id_name'].'</h5>
    <h6 class="card-subtitle mb-2 text-muted"> Name:' .$row['name']. '</h6>
    <p class="card-text"> Price:'.$row['price'].'$ </p>
    <p class="card-text"> Weight:'.$row['weight'].'KG </p>
  </div>
  </center>
</div>';

          }
          } 
          ?>

  

  
  </div>
  </div>


<!-- furniture -->

<div class="container-fluid">
  <div class="row">
  <H1>Furniture</H1>
  
  <?php 
				$sql = "SELECT * FROM products WHERE type='Furniture'";
				$result = mysqli_query($conn, $sql);
				$rowCount = mysqli_num_rows($result);
				if($rowCount > 0) {
					while ($row = mysqli_fetch_assoc($result)) { 


echo '<div class="card" style="width: 18rem;">
<input type="checkbox" id="checkbox" name="check[]" value="'.$row['id'].'">
<center>
  <div class="card-body">
    <h5 class="card-title"> SKU: '.$row['id_name'].'</h5>
    <h6 class="card-subtitle mb-2 text-muted"> Name:' .$row['name']. '</h6>
    <p class="card-text"> Price:'.$row['price'].'$ </p>
    <p class="card-text"> Dimensions(hxwxl):'.$row['height'].'x'.$row['width'].'x'.$row['length'].'cmS</p>
  </div>
  </center>
</div>';

          }
          } 
          ?>
  
  </div>
  </div>

  </form>
</div>
</body>
</html>