<?php
    /* Stampare a schermo una decina di dischi musicali (vedi screenshot vue-dischi).
    
    Utilizzare: Html, Sass, JS, VueJS, PHP
    
    Prima Milestone:
    Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

    Seconda Milestone:
    Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
 */

    require __DIR__ . '/database/dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>vue-dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>

    <div id="root">

        <!-- header -->
        <header>

            <!-- logo -->
            <i class="fab fa-spotify logo"></i>

            <!-- order by year -->
            <!-- <div class="ordina">
                <span>Order By</span>
                <select id="ordina" @change="oderByYearUp(selected)" v-model="selected">
                    <option> 
                        from the most recent
                    </option>
                    <option>
                        from the least recent   
                    </option>
                </select>
            </div> -->

            <!-- ricerca Genere -->
            <!-- <div class="filtra">
                <span>Search a Genre</span>
                <select name="generi" id="generi" v-model="genere">
                    <option v-for="genere in generi" >
                        {{genere}}
                    </option>
                </select>
            </div> -->
            
        </header>

        <!-- main -->
        <main>
            <div class="albums">

                <!-- <div v-for="(album, index) in albums" class="album" v-if="chekGenere(index)">
                    <img :src="album.poster" alt="">
                    <h2 class="titolo">{{album.title}}</h2>
                    <div class="info">
                        <div class="autore">
                            {{album.author}}
                        </div>
                        <div class="anno">
                            {{album.year}}
                        </div>
                    </div>
                </div> -->
                
                <!-- PHP -->
                <?php 
                    foreach ($dischi as $key => $disco) : 
                        //var_dump($disco);
                        ?>
                        <div class="album">
                            <img src="<?= $disco["poster"]; ?>" alt="">
                            <h2 class="titolo"><?= $disco["title"]; ?></h2>
                            <div class="info">
                                <div class="autore">
                                    <?= $disco["author"]; ?>
                                </div>
                                <div class="anno">
                                    <?= $disco["year"]; ?>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach; 
                ?>
            </div>
        </main>
        
    </div>
    <!-- script AJAX e Vue js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script src="./dist/js/app.js"></script>
</body>
</html>