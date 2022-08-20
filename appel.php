<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>appel.php</title>
    <style>
        * {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: large;
}
body {
  margin: auto;
  width: 93rem;
}
header {
  display: flex;
  flex-direction: column;
  background-color: gray;
  color: rgb(11, 177, 253);
}
#header1 {
  display: flex;
  justify-content: center;
  align-items: center;
}
#logo {
  margin-right: -17rem;
}
#logo img {
  width: 25%;
  border-radius: 8%;
}
#slogan {
  display: flex;
  flex-direction: column;
  margin: 0em;
}
#slogan h1{
    font-size: 2.5rem;
    margin-left: 2rem;
}
#slogan p {
  margin-top: -1rem;
  margin-left: 12rem;
  font-size: 1.5rem;
  font-weight: bolder;
}
#navbar {
  display: flex;
  justify-content: flex-end;
}
#navbar a {
  text-decoration: none;
  font-size: 1.25rem;
  font-weight: bolder;
  margin: 0.5rem 2rem;
  color: white;
}
#navbar a:hover {
  color: rgb(11, 177, 253);
  text-decoration: none;
  font-size: 2rem;
}
#navbar a:focus{
    color: rgb(11, 177, 253);
}
#body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 80rem;
  padding: 0px;
  margin-top: -9rem;
  margin-bottom: -8.9rem;
}
.slider img {
  width: 93rem;
  height: 80rem;
}
.images {
  margin: 0px;
  display: flex;
  animation-duration: 120s;
  animation-name: slider;
  animation-iteration-count: infinite;
  animation-fill-mode: both;
}
@keyframes slider {
  0% {
    transform: translateX(0);
  }
  12.5% {
    transform: translateX(-93rem);
  }
  25% {
    transform: translateX(-186rem);
  }
  37.5% {
    transform: translateX(-279rem);
  }
  50%{
    transform: translateX(-372rem);
  }
  62.5% {
    transform: translateX(-465rem);
  }

  75% {
    transform: translateX(-558rem);
  }

  87.5% {
    transform: translateX(-651rem);
  }

  100% {
    transform: translateX(0);
  }
}
#slide {
  width: 92.85rem;
  overflow: hidden;
  margin: 0%;
}
#body h1 {
  text-align: center;
  font-size: 3rem;
}
.baccuiel {
  width: 30%;
  height: 2.5rem;
  padding-top: 1.25rem;
  align-self: center;
  margin: 2rem;
  text-transform: capitalize;
  font-weight: bolder;
  background-color: gray;
  color: white;
  border: 1px solid gray;
  border-radius: 2rem;
  text-decoration: none;
  text-align: center;
}
#body a:hover {
  background-color: white;
  color: rgb(11, 177, 253);
}
footer {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: gray;
}
#socialmedia{
    display: flex;
    align-items: center;
    color: rgb(11, 177, 253);
}
#socialmedia p{
    font-size: 1.5rem;
    font-weight: bolder;
}
#socialmedia img {
  width: 3rem;
  height: 3rem;
  background-color: rgb(11, 177, 253);
  margin: 1.5rem;
  border-radius: 50%;
}
form {
  color: black;
  font-weight: bolder;
}
#body2 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 2rem;
}
#form {
  display: flex;
}
.start {
  align-self: center;
  margin: 3rem 0rem;
}
.button {
  background-color: gray;
  height: 2.5rem;
  width: 7.5rem;
  border-radius: 2rem;
  margin: 0rem 1rem;
  border: 1px solid gray;
  font-weight: bold;
  color: white;
}
.button:hover {
  background-color: white;
  color: rgb(11, 177, 253);
}
#search button:hover {
  background-color: white;
  color: rgb(11, 177, 253);
}
.section {
  width: 50%;
}
.h1{
text-align: center;
text-transform: capitalize;
font-size: 2rem;
color: rgb(11, 177, 253);
}
.champ{
    width:25rem;
    height: 2rem;
}

#search {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
#search input {
  height: 1.5rem;
  width: 15rem;
}
#search button {
  width: 10rem;
  height: 2rem;
}
#search button:hover {
  color: rgb(11, 177, 253);
}
h3 {
  color:rgb(11, 177, 253);
}

.poste p a {
  text-decoration: none;
  color: black;
  font-weight: bolder;
}

.poste {
  display: flex;
  justify-content: space-around;
}
#insert {
  display: flex;
}
#btn {
  height: 1.5rem;
  width: 10rem;
}
.start1 {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2.5rem;
}

    </style>
</head>
<body>
    <header>
        <div id="header1">
            <div id="logo">
                <img src="image/opportunity.png">
            </div>
            <div id="slogan">
                <h1>OpportunityCareer</h1>
                <p>Find Your Own</p>
            </div>
        </div>
        <div id="navbar">
            <a href="index.html">Accueil</a>
            <a href="APPEL.HTML">Poster une Appel d'Offre</a>
            <a href="service.html">Rechercher un Metier</a>
            <a href="postulez.html">Postuler pour un Emploi</a>
            <a href="Cv.HTML">Enregistrer son Cv</a>
            <a href="Aide.html">Aide</a>
        </div>
    </header>
<body>
    <h1 class="h1">VOTRE OFFRE</h1>
    <ol>
        <li><?php echo "Nom :". $_POST['name'] ?></li>
        <li><?php echo "Numero de Telephone :". $_POST['telephone'] ?></li>
        <li><?php echo "Email :". $_POST['email'] ?></li>
        <li><?php echo "Nom de la Structure :". $_POST['structure'] ?></li>
        <li><?php echo "Secteur d'activite :". $_POST['secteur'] ?></li>
        <li><?php echo "Non de poste :". $_POST['poste'] ?></li>
        <li><?php echo "Nombres d'heure :". $_POST['heure'] ?></li>
        <li><?php echo "Lieu de travail :". $_POST['lieu'] ?></li>
        <li><?php echo "Tranche horraire :". $_POST['horraire'] ?></li>
        <li><?php echo "Jour de travail :". $_POST['day'] ?></li>
        <li><?php echo "Qualification :". $_POST['age'] ?></li>
        <li><?php echo "Trange d'age :". $_POST['niveau'] ?></li>
        <li><?php echo "Niveau scolaire :". $_POST['qualite'] ?></li>
        <li><?php echo "Qualités :". $_POST['qualite'] ?></li>
        <li><?php echo "Aptitudes :". $_POST['apt'] ?></li>
        <li><?php echo "Conditions de travail :". $_POST['condition'] ?></li>
    </ol>
    <footer>
        <div id="socialmedia">
            <p>Suivez nous sur</p>
            <img src="fontawesome/svgs/brands/facebook.svg">
            <img src="fontawesome/svgs/brands/twitter-square.svg">
        </div>
        <div id="logo">
            <img src="image/opportunity.png" alt="oppportunity">
        </div>
    </footer>
    <script src="js/opportunity.js"></script>
</body>
</html>