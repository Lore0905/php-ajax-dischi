<?php
    require __DIR__ . '/database.php';
    // var_dump($database)
?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-dischi</title>
</head>
<body>
    <header>
        <?php include_once __DIR__ . '/header.html'?>
    </header>
    <main>
        <section id="main-section">
            <div class="container">

                <?php foreach($database as $description_disco) { ?>
                    <!-- single disco -->
                    <div class="container-wrap-disco">

                        <!-- img disco --> 
                        <div class="img-disco">
                            <img src=" <?php echo $description_disco['poster'] ?>" alt="discoObject.title">
                        </div>
                        <!-- title disco -->
                        <div class="title-disco">
                            <h2>  <?php echo $description_disco['title'] ?> </h2>
                        </div>
                        <!-- author -->
                        <div class="author-disco">
                            <span> <?php echo $description_disco['author'] ?> </span>
                        </div>
                        <!-- year -->
                        <div class="year-disco">
                            <span> <?php echo $description_disco['year'] ?> </span>
                        </div>

                    </div>
                <?php } ?>

            </div>
        </section>
    </main>
</body>
</html>