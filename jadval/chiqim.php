<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container1">
        <div class="inner">
            <div class="mt-3">
                <a href="../db/add_chiqim.php">
                    <button class="btn btn-success">Kiritish</button>
                </a>
            </div>
            <?php
                include "../db/db.php";

                $sql = "SELECT * FROM chiqim";
                $res = mysqli_query($db, $sql);
                $users = array();
                while($row = mysqli_fetch_assoc($res)){
                    $users[] = $row;
                }
            ?>
            <div class="table_inner">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nomi</th>
                            <th>Miqdori (kg)</th>
                            <th>Narxi (so'm)</th>
                            <th>Sana</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?=$user['id']?> </td>
                        <td><?=$user['nomi']?></td>
                        <td><?=$user['miqdori']?></td>
                        <td><?=$user['narxi']?></td>
                        <td><?=$user['chiqish_sanasi']?></td>
                    </tr>
                    <?php endforeach ?>
                   </tbody>
                  </table>
            </div>
        </div>
    </div>


    <script src="js/jquery.js"></script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>