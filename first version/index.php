<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <!-- Css -->
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include __DIR__ . '/db.php'; ?>
    <header>
        <img class="headerImage" src="./download.png" alt="logo">
    </header>
    <main class="container-card d-flex flex-wrap justify-content-between">
        <?php foreach($database as $data){?>
            <div class="card">
                <img class="image" src="<?php echo $data['poster'];?>" alt="">
                <h2><?php echo $data['title'];?></h2>
                <h3><?php echo $data['author'];?></h3>
                <h4><?php echo $data['year'];?></h4>
            </div>
        <?php } ?>
    </main>
</body>
</html>