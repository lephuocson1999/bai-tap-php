<?php

    include_once('header.php')

?>
<?php 

    require_once("/entities/product.class.php");

    if(isset($_POST["btnSubmit"])){
        $productName = $_POST["txtName"];
        $cateID      = $_POST["txtCateID"];
        $price       = $_POST["txtPrice"];
        $quantity    = $_POST["txtQuantity"];
        $description = $_POST["txtDesc"];
        $picture     = $_POST["txtPicture"];
        echo productName, cateID, cateID, cateID, cateID, 
        $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);
        
        $result = $newProduct->save();

        if(!$result){
            header("Location: add_product.php?failure");
        }else{
            header("Location: add_product.php?inserted");
        }
    }
?>
<?php

    if(isset($_GET["inserted"])){
        echo "<h2> Them san pham thanh cong </h2>";
    }

?>
<div class="container">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ten San Pham</label>
            <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "" ;?>" class="form-control" id="lblinput" aria-describedby="emailHelp">
            <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mo ta san pham</label>
            <input type="text" name="txtDesc" value="<?php echo isset($_POST["txtDesc"]) ? $_POST["txtDesc"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Danh muc</label>
            <input type="text" name="txtCateID" value="<?php echo isset($_POST["txtCateID"]) ? $_POST["txtCateID"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div><div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gia</label>
            <input type="text" name="txtPrice" value="<?php echo isset($_POST["txtPrice"]) ? $_POST["txtPrice"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div><div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">So luong</label>
            <input type="text" name="txtQuantity" value="<?php echo isset($_POST["txtQuantity"]) ? $_POST["txtQuantity"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div><div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mo ta san pham</label>
            <input type="text" name="txtDesc" value="<?php echo isset($_POST["txtDesc"]) ? $_POST["txtDesc"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div><div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hinh anh</label>
            <input type="file" name="txtPicture" value="<?php echo isset($_POST["txtPicture"]) ? $_POST["txtPicture"] : "" ;?>" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php

    include_once('footer.php')

?>

