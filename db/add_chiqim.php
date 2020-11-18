<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">

</head>
<body>
<div class="container">
    <div class="header">
        <center><h2>Chiqim</h2></center>
    </div>
    <?php
                include "db.php";

                $sql = "SELECT * FROM chiqim";
                $res = mysqli_query($db, $sql);
                $names = array();
                while($row = mysqli_fetch_assoc($res)){
                    $names[] = $row;
                }
            ?>
        <label class="label-select" for="exampleFormControlSelect1">Mavjud mahsulotlar</label>
        <select class="form-control-select" id="exampleFormControlSelect1">
            <?php foreach ($names as $name): ?>
            
                <option>
                        <?=$name['nomi']?>
                </option>
            
            <?php endforeach ?>
            </select>
    <form id="form" class="form" id="form" action="insert.php" method="post">
        <div class="form-control">
            <label for="nomi">Nomi</label>
            <input type="text" placeholder="" id="nomi"  name="nomi"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="nomi">Miqdori</label>
            <input type="text" placeholder="" id="miqdori" name="miqdori"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="nomi">Narxi</label>
            <input type="text" placeholder="" id="narxi" name="narxi"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="nomi">Sana</label>
            <input type="date" placeholder="" id="sana" name="sana"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <button type="submit" name="add_chiqim">Submit</button>
    </form>
</div>


</body>
</html>