
<?php
// <!-- Milestone 1
// A partire dall'array realizzato stamattina, realizziamo una API che chiameremo con Vue.
// Milestone 2
// Stampiamo in una pagina tutte le auto con Vue.
// Milestone 3
// Inseriamo un sistema di filtraggio con Vue su un paio di campi a scelta!
// Bonus
// Realizziamo una pagina php in cui stampiamo le auto e effettuiamo anche un filtro. -->
?>

<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>php-snacks-b1</title>
</head>
<body>
    <main id="app">
        <form action="http://localhost:88/php-snacks-b1/index.php" method="GET">
            <label for="colore">Colore:</label>
            <select name="colore" id="colore" v-model="filter.colore" @change="getAuto">
                <option value="all">all</option>
                <option value="silver">silver</option>
                <option value="blu">blu</option>
                <option value="rosso">rosso</option>
            </select>
            <label for="marca">Marca:</label>
            <select name="marca" id="marca" v-model="filter.marca" @change="getAuto">
                <option value="all">all</option>
                <option value="mercedes">mercedes</option>
                <option value="wolksvagen">wolksvagen</option>
                <option value="fiat">fiat</option>
            </select>
        </form>
        <div class="container p-5">
            <div class="row row-col-3 g-3">
                <div v-for="auto in cars" class="col-3 m-3 p-3 text-center card">
                    <h5>id: {{auto.id}}</h5>
                    <h3>{{auto.marca}} {{auto.modello}}</h3>
                    <h3>{{auto.km}} {{auto.modello}}</h3>
                    <h4>{{auto.anno}}</h4>
                    <span>Colore: {{auto.colore}}</span>
                    <span>Assicurazione: {{auto.assicurazione}}</span>
                    <span>Optional: {{auto.optional}}</span>
                    <span>Antifurto: {{auto.antifurto}}</span>
                </div>
            </div>
        </div>
    </main>
    
    <script src="js/main.js"></script>
</body>
</html>