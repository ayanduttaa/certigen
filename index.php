<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="myform">
        <label for="myname">Enter Name </label>
        <input type="text" name="myname" id="">
        <br><br>
        <label for="myage">Enter Age </label>
        <input type="number" name="myage">
        <br><br>
        <input type="submit" name="getpdf">
    </form>
    
    <?php
    if(isset($_POST['getpdf'])){
    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf= new \Mpdf\Mpdf();

    $getname=$_POST['myname'];
    $getage=$_POST['myage'];
    echo $getname;
    echo $getage;
    $mpdf-> WriteHTML("<h1>My name is $getname</h1> <br> <h1>My age is $getage</h1>");
    $mpdf-> Output("$getname.pdf", "D");
}
?>
</body>
</html>