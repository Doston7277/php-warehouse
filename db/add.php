<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">

</head>
<body>
<div class="container">
    <div class="header">
        <center><h2>Kirim</h2></center>
    </div>
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
        <button type="submit" name="add">Submit</button>
    </form>
</div>


</body>
</html>