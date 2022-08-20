<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resumeappel</title>
</head>
<body>
    <h1>VOTRE OFFRE</h1>
    <ol>
        <li>
           <?php echo "nom: $nom"; ?>
        </li>
</ol>
if( !isset($_POST['telephone']) || empty($_POST['telephone']))
{
echo('Il faut un numero de telephone valide pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['email']) ||  empty($_POST['email']))
{
echo('Il faut un email pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
if( !isset($_POST['poste']) || empty($_POST['poste']))
{
echo('Entrer votre Metier pour soumettre le formulaire.');
// Arrête l'exécution de PHP
return;
}
$name=$_POST['name'];
$telephone= $_POST['telephone'];
$email=$_POST['email'];
$structure= $_POST['structure'];
$secteur=$_POST['secteur'];
$poste= $_POST['poste'];
$heure=$_POST['heure'];
$lieu= $_POST['lieu'];
$horraire= $_POST['horraire'];
$day=$_POST['day'];
$age= $_POST['age'];
$niveau=$_POST['niveau'];
$qualite= $_POST['qualite'];
$apt=$_POST['apt'];
$condition= $_POST['condition'];
echo "nom".$name
    ?>
    <?php
$_SERVER="localhost";
$dbname="opportunityc";
$user="root";
$pass="";
$name=$_POST['name'];
$telephone= $_POST['telephone'];
$email=$_POST['email'];
$structure= $_POST['structure'];
$secteur=$_POST['secteur'];
$poste= $_POST['poste'];
$heure=$_POST['heure'];
$lieu= $_POST['lieu'];
$horraire= $_POST['horraire'];
$day=$_POST['day'];
$age= $_POST['age'];
$niveau=$_POST['niveau'];
$qualite= $_POST['qualite'];
$apt=$_POST['apt'];
$condition= $_POST['condition'];

try {
    $dbco=new PDO("mysql:host=$_SERVER;:dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sth=$dbco->prepare("
        INSERT INTO appel(name,telephone,email,structure,secteur,poste,heure,lieu,
        horraire,day,age,niveau,qualite,apt,condition)
        VALUES(:name,:telephone,:email:structure,:secteur,:poste,:heure,:lieu,
        :horraire,:day,:age,:niveau,:qualite,:apt,:condition)");
        $sth->bindParam(':name',$name);
        $sth->bindParam(':telephone',$telephone);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':structure',$structure);
        $sth->bindParam(':secteur',$secteur);
        $sth->bindParam(':poste',$poste);
        $sth->bindParam(':heure',$heure);
        $sth->bindParam(':lieu',$lieu);
        $sth->bindParam(':horraire',$horraire);
        $sth->bindParam(':day',$day);
        $sth->bindParam(':age',$age);
        $sth->bindParam(':niveau',$niveau);
        $sth->bindParam(':qualite',$qualite);
        $sth->bindParam(':apt',$apt);
        $sth->bindParam(':condition',$condition);
        $sth->execute();
    header("location:resumeappel.php");
} 
catch (PDOException $e) {
    echo 'impossible de traiter les donnees. Erreur :'.$e ->getMessage();
}
</body>
</html>