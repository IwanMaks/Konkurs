<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Heroes Guede</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="choose gender-choose">
                <span class="name name-gender">Gender: </span>
                <span class="m mini-name">M</span>
                <input type="radio" name="gender" id="" value="male">
                <span class="w mini-name">W</span>
                <input type="radio" name="gender" id="" value="female">
            </div>
            <div class="choose date-choose">
                <span class="name name-date">Period of life:</span>
                <span class="from mini-name">from:</span>
                <input type="text" name="from" id="" class="date-input">
                <span class="to mini-name">to:</span>
                <input type="text" name="to" id="" class="date-input">
            </div>
            <div class="choose species-choose">
                <span class="name name-species">Species: </span>
                <select name="species" id="species" class="mini-name" >
                    <option class="mini-name" value=""></option>
                    <option class="mini-name" value="human">Human</option>
                    <option class="mini-name" value="Zehoberei">Zehoberei</option>
                    <option class="mini-name" value="flora colossus">Flora Colossus</option>
                    <option class="mini-name" value="Asgardian">Asgardian</option>
                    <option class="mini-name" value="kronan">Kronan</option>
                    <option class="mini-name" value="Frost Giant">Frost Giant</option>
                    <option class="mini-name" value="Titan">Titan</option>
                    <option class="mini-name" value="Android">Android</option>
                    <option class="mini-name" value="Centaurian">Centaurian</option>
                </select>
            </div>
            <div class="choose film-choose">
                <span class="name name-film">Film: </span>
                <input type="text" name="film" id="" class="film-input">
            </div>
            <div class="choose sitiezenship-choose">
                <span class="name citizenship-name">Citizenship: </span>
                <select name="citizenship" id="citizenship" class="mini-name" >
                    <option class="mini-name" value=""></option>
                    <option class="mini-name" value="American">American</option>
                    <option class="mini-name" value="Wakandan">Wakandan</option>
                    <option class="mini-name" value="Soviet">Soviet</option>
                    <option class="mini-name" value="British">British</option>
                    <option class="mini-name" value="Asgardian">Asgardian</option>
                    <option class="mini-name" value="Sokovian">Sokovian</option>
                    <option class="mini-name" value="Jotun">Jotun</option>
                    <option class="mini-name" value="Nazi German">Nazi German</option>
                    <option class="mini-name" value="Chinese">Chinese</option>
                </select>
            </div>
            <div class="choose status-choose">
                <span class="name name-status">Status: </span>
                <select name="status" id="status" class="mini-name">
                    <option value=""></option>
                    <option value="deceased">Deceased</option>
                    <option value="alive">Alive</option>
                    <option value="unknown">Unknown</option>
                    <option value="destroyed">Destroyed</option>
                </select>
            </div>
            <button class="header-button">
                <img src="img/arrow.svg" alt="arrow">
            </button>
        </header>

        <ul class="catalog-heroes">
            <!--<li class="card-hero">
                <img src="dbimage/97d1d9f934a350cee765c5ac1a466605.jpg" alt="" class="img-hero">
                <div class="info-hero">
                    <div class="header-hero">
                        <div class="hero-name">Tanos</div>
                        <div class="date-hero">1984 - 2013</div>
                    </div>
                    <div class="hero-list">
                        <div class="list-title">
                            <div class="title-hero real-name-hero-title">Real name:</div>
                            <div class="title-hero status-hero-title">Status:</div>
                            <div class="title-hero gender-hero-title">Gender:</div>
                            <div class="title-hero citizenship-hero-title">Citizenship:</div>
                            <div class="title-hero spice-hero-title">Spice:</div>
                            <div class="title-hero films-hero-title">Films:</div>
                        </div>
                        <div class="list-value">
                            <div class="value-hero real-name-hero-value">Scott Edward Harris Lang</div>
                            <div class="value-hero status-hero-value">Alive</div>
                            <div class="value-hero gender-hero-value">Male</div>
                            <div class="value-hero citizenship-hero-value">American</div>
                            <div class="value-hero spice-hero-value">Human</div>
                            <div class="value-hero films-hero-value">Ant-Men</div>
                        </div>
                    </div>
                </div>
            </li>-->
        </ul>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>