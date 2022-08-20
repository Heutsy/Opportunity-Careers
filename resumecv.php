<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resumecv</title>
    <link rel="stylesheet" href="css/opportunity.css">
</head>
<body>
    <header>
        <div id="header1">
          <div id="logo">
             <img src="image/opportunity.png" >
          </div>
          <div id="slogan">
             <h1>opportunityCareer</h1>
             <p>Find Your Own</p>
          </div>
        </div >
        <div id="navbar">
            <a href="index.html">Accueil</a>
            <a href="Aide.html">Apropos</a>
        </div>
    </header>
    <div>
       <?php/*
$_SERVER="localhost";
$dbname="opportunityc";
$user="root";
$pass="";
try {
    $db=new PDO("mysql:host=$_SERVER;dbname=$dbname",$user,$pass);
} 
catch (PDOException $e) {
    die ('erreur :'.$e->getmessage());
}                                                                                                                                                                                                                                                                                     
$query = "SELECT * FROM clients where nom_client=:nom";
$statement= $db->prepare($query);
$statement->execute(['nom'=>$nom]);
$clients = $statement->fetchAll();
foreach ($clients as $client){
    ?>
<p> <?php echo $client ['nom_client'].'  '.$client ['telephone'].'  '.$client ['sex'].'  '.$client ['code_fournisseur'] ?></p>

<?php
}
$nom ='Ali';
$query ="SELECT * FROM clients WHERE nom_client=:nom";
$statement = $db->prepare($query);
$statement->execute(['nom'=>$nom]);
$clients = $statement->fetch();
echo $client['nom_client'];
echo '<br>';
//var_dump($clients)
$code ='cl001';
$query ="SELECT * FROM clients WHERE code_client=:code";
$statement = $db->prepare($query);
$statement->execute(['code'=>$code]);
$clients = $statement->fetch();
echo $client['code_client'];
//var_dump($clients)
 ?> 
    </div>
    <footer>
        <div id="socialmedia">
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