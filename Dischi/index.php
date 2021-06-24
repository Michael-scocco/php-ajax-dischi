
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div id="app"> 
        <header>
            <div class="immagine">
                <img src="./img/logo.png" alt="logo spotify" width="100" height="100">  
            </div>
            
            <div class="selezione">
                <label for="generi">Scegli un genere:</label>
                <select name="generi" id="generi">
                    <option valore disabilitato="">Seleziona un genere</option>
                    <option v-for="genere in generi" :value="genere">{{genere}}</option>
                </select>
            </div>

        </header>
        <main>
            <ul class="lista-album">
                <li class="contenitore-singolo-album" v-for="singoloAlbum in listaAlbum">
                    <img :src="singoloAlbum.poster" alt="">
                    <h1>{{singoloAlbum.title}}</h1>
                    <h3>{{singoloAlbum.author}}</h3>
                    <p>{{singoloAlbum.year}}</p>
                </li>
            </ul>
        </main>
        
    </div>
 
    
    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
     <!-- LIBRERIA AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>