<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index-json</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <div id="root">
        <header>
            <?php include_once __DIR__ . '/header.html'?>
        </header>
        <main>
            <section id="main-section">
                <div class="container">

                    <!-- single disco -->
                    <div class="container-wrap-disco" v-for="discoCharacteristic in discoCharacteristics">

                        <!-- img disco --> 
                        <div class="img-disco">
                            <img :src="discoCharacteristic.poster" :alt="discoCharacteristic.title">
                        </div>
                        <!-- title disco -->
                        <div class="title-disco">
                            <h2>{{discoCharacteristic.title}}</h2>
                        </div>
                        <!-- author -->
                        <div class="author-disco">
                            <span>{{discoCharacteristic.author}}</span>
                        </div>
                        <!-- year -->
                        <div class="year-disco">
                            <span>{{discoCharacteristic.year}}</span>
                        </div>

                    </div>

                </div>
            </section>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>