<?php 
require_once('init.php');
require_once('session.php');
require_once('header.php');
if(isset($_GET['cid'])){
    $sql = 'SELECT * FROM cars WHERE id='. $_GET['cid'];
    $res = mysqli_query($conn, $sql);
    if(! $res){
        header('LOCATION:index.php');
    }
    $rows = mysqli_fetch_assoc($res);
    if(!$rows['model']){
        header('LOCATION:index.php');
        exit();        
    }
}else{
    header('LOCATION:index.php');
    exit();
}
$sql = 'SELECT * FROM users WHERE name = "'.$_SESSION['name']. '"';
    $res = mysqli_query($conn, $sql);
    if(! $res){
        header('LOCATION:index.php');
    }
    $user_rows = mysqli_fetch_assoc($res);
?>
<link rel="stylesheet" href="s13.css">
<link rel="stylesheet" href="css/book.css">

<section>
    <table>
        <tr>
            <th>Model no.</th>
            <td><?= $rows['model'] ?></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><?= $rows['price'] ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?= $rows['type'] ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?= $rows['year'] ?></td>
        </tr>
        <tr>
            <th>Fuel Type</th>
            <td><?= $rows['fuel'] ?></td>
        </tr>
        <!-- <tr>
            <th></th>
            <td></td>
        </tr> -->
        
    </table>
</section><hr>
<main>
    <img src="img/<?= $rows['img'] ?>" alt="">
    <form action="booked.php" method="post">
        <input type="hidden" name="user_id" value="<?= $user_rows['id'] ?>">
        <input type="hidden" name="car_id" value="<?= $rows['id'] ?>">
        <h1>Booking</h1>
     <div class="form">
             <div>
             <label for="">Username</label>
             <input type="text" name="name" class="form-txts" value="<?= $_POST['fname'].' '.$_POST['lname']?>">
             </div>
            <div>
             <label for="">Email</label>
                <input type="email" name="email" class="form-txts" value="<?= $user_rows['email'] ?>">
         </div>
            <div>
             <label for="">Pick-up date</label>
             <input type="date" name="pickup" class="form-txts" value="<?= $_POST['data'][0] ?>">
            </div>
            <div>
                <label for="">Drop-up date</label>
             <input type="date" name="dropup" class="form-txts" value="<?= $_POST['data'][1] ?>">
            </div>
             
            <div>
                <label for="">location</label>
             <input type="text" name="location" class="form-txts" value="<?= $_POST['data'][2] ?>">
            </div>
            <div>
                 <label for="">Document Name.</label>
             <input type="text" name="doc" class="form-txts" value="<?= $_POST['doc'] ?>">
             </div>
            <div>
                 <label for="">Document No.</label>
             <input type="text" name="docno" class="form-txts" value="<?= $_POST['docno'] ?>">
             </div>
              <button class="form-btn"> pay offline </button>
        </div>                <input class="form-btn" type="submit" name="submit" >
    </form>
</main><hr>
