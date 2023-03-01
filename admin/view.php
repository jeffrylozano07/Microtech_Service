<?php
    require 'database.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php");?>
    </head>
    
    <body>
        <h1 class="text-logo"> Microtech - Service</h1>
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <h1><strong>Detalle Producto</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Nombre:</label><?php echo '  '.$item['name'];?>
                      </div>
                      <div class="form-group">
                        <label>Descripción:</label><?php echo '  '.$item['description'];?>
                      </div>
                      <div class="form-group">
                        <label>Precio:</label> S/. <?php echo '  '.number_format((float)$item['price'], 2). ' ';?>
                      </div>
                      <div class="form-group">
                        <label>Categoría:</label><?php echo '  '.$item['category'];?>
                      </div>
                      <div class="form-group">
                        <label>Imagen:</label><?php echo '  '.$item['image'];?>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                        <img src="<?php echo '../images/'.$item['image'];?>" alt="...">
                        <div class="price">S/. <?php echo number_format((float)$item['price'], 2). ' ';?></div>
                          <div class="caption">
                            <h4><?php echo $item['name'];?></h4>
                            <p><?php echo $item['description'];?></p>
                          </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>

