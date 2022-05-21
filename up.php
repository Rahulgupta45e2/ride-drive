<!DOCTYPE html>
<html lang="eng">

<head>
    <title>fill doc deatils</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum=1, maximum-scale-user-scalable=no">
    <link rel="stylesheet" href="s13.css">
</head>

<body>
    <div class="map">
<?php
// var_dump($_POST)
?>
        <div class="select-form">
            <h1>Fill-Documents-Details </h1>
            <form action= "book.php?cid=<?= $_GET['cid'] ?>" method="post">
                <input type="hidden" name="data[]" value="<?= $_POST['pickup-date'] ?>">     
                <input type="hidden" name="data[]" value="<?= $_POST['dropup-date'] ?>">     
                <input type="hidden" name="data[]" value="<?= $_POST['location'] ?>">     
                <div class="field">
                    <div class="label">Select document</div>
                    <select name="doc">
                        <option>Adhaar card</option>
                        <option>Pan card</option>
                        <option>Voter card</option>
                        <option>Passport</option>
                        <option>Other documents</option>
                    </select>
                </div>
                <input type="text" placeholder="enter your doc no." name="docno" class="select-form-txt"/>
                <input type="text"  name="fname" placeholder="  first name "  class="select-form-txt"/>
                <input type="text" name="lname" placeholder=" Last name" class="select-form-txt" />
                
                <input type="submit" name="submit" class="select-form-btn"/>
            </form>
        </div>
    </div>
</body>

</html>