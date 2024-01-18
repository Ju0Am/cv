<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Julie Amelin</title>
</head>

<body>
    <header>
        <h1>JULIE AMELIN</h1>
        <p>Développeuse Web & web mobile <br>
            Recherche de stage du 29 avril au 21 juin </p>
    </header>

    <main>
        <div class="line"></div>
        <div class="information">
            <div class="firstSection">
                <article class="profil">
                    <h3>PROFIL</h3>
                    <p>Désireuse de développer constamment mes compétences afin d'assurer mon évolution professionnelle,
                        je suis confiante en ma capacité à proposer des idées intéressantes pour des campagnes
                        publicitaires inoubliables.</p>
                    <button id="myBtn">Me contacter</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div>
                                <img src="img/git.png" alt="git">
                                <p>06 48 49 13 70</p>
                            </div>
                            <div>
                                <img src="img/git.png" alt="git">
                                <a href="https://github.com/Ju0Am">Ju0Am</a>
                            </div>
                            <div>
                                <img src="img/git.png" alt="git">
                                <p>julieamelin33@gmail.com</p>
                            </div>
                            <div>
                                <img src="img/git.png" alt="git">
                                <p>130 boulevard du massacre, Saint Herblain</p>
                            </div>
                        </div>
                    </div>

                    <article class="loisirs">
                        <h3>LOISIRS</h3>

                        <p>Cinéma | Jeux vidéo | Musique | Jeux de société</p>
                    </article>
                </article>
                <img src="img/ju.png" alt="photoProfil">
            </div>

            <div class="secondSection">
                <article class="experiences">
                    <h3>EXPERIENCES</h3>
                    <button type="button" class="collapsible">Projet Personnel - Développement web</button>
                    <div class="content">
                        <p class="date">2023</p>
                        <p>Développement site portfolio / site vitrine.</p>
                    </div>
                    <button type="button" class="collapsible">Kwark - Motion Design / Montage Vidéo</button>
                    <div class="content">
                        <p class="date">FREELANCE -- Juin 2022 - Novembre 2023</p>
                        <p>Réalisation de montage / habillage vidéo pour une société de formation en ligne.</p>
                    </div>
                    <button type="button" class="collapsible">Titan Studio / Holly Fx - Web design</button>
                    <div class="content">
                        <p class="date">FREELANCE -- 2023</p>
                        <p>Conception de maquette web.</p>
                    </div>
                    <button type="button" class="collapsible">Restaurant Le Gulf Stream</button>
                    <div class="content">
                        <p class="date">SALARIEE -- Saison été 2016 a 2021</p>
                        <p>Réceptionniste, hôtesse d’accueil, manager.</p>
                    </div>
                </article>
                <article class="formation">
                    <h3>FORMATION</h3>
                    <div>
                        <p class="title">ENI Ecole Informatique</p>
                        <p class="date">Novembre 2023 - en cours</p>
                        <p>Formation Développeuse Web et Web Mobile</p>
                    </div>
                    <div>
                        <p class="title">E-artsup, Nantes - Spécialitée Motion Design</p>
                        <p class="date">Septembre 2017 - Juillet 2020</p>
                    </div>
                </article>
            </div>

            <div class="thirdSection">
                <h3>COMPETENCES</h3>
                <article class="competences">
                    <div>
                        <h4>Languages</h4>
                        <p>Java | PHP | XML | HTML5 | CSS | JavaScript</p>
                    </div>
                    <div>
                        <h4>Plateformes / Framework</h4>
                        <p>Java SE | Java Spring Boot | Bootstrap | JQuery</p>
                    </div>
                    <div>
                        <h4>Bases de données</h4>
                        <p>SQLServer</p>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <footer class="contact">
        <h3>COORDONEES</h3>
        <article class="coordonees">

            <div>
                <img src="img/git.png" alt="git">
                <p>06 48 49 13 70</p>
            </div>
            <div>
                <img src="img/git.png" alt="git">
                <p>Ju0Am</p>
            </div>
            <div>
                <img src="img/git.png" alt="git">
                <p>julieamelin33@gmail.com</p>
            </div>
            <div>
                <img src="img/git.png" alt="git">
                <p>130 boulevard du massacre, Saint Herblain</p>
            </div>
    </footer>
    <script src="app.js"></script>
</body>

</html>