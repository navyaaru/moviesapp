<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <table class="table">
         <tr>
             <td>
                 movie name
             </td>
             <td>
                 <input type="text" class="form-control" name="mname">
             </td>
         </tr>
         <tr>
             <td>
                 actor
             </td>
             <td>
                 <input type="text" class="form-control" name="mact">
             </td>
         </tr>
         <tr>
             <td>
                 actress
             </td>
             <td>
                 <input type="text" class="form-control" name="mactre">
             </td>
         </tr>
        <tr>
            <td>
              producer  
            </td>
            <td>
            <input type="text" class="form-control" name="mpro">
            </td>
        </tr>
        <tr>
            <td>
                camera
            </td>
            <td>
                <input type="text" class="form-control" name="mcam">
            </td>
        </tr>
        <tr>
            <td>
                director
            </td>
            <td>
                <input type="text" class="form-control" name="mdir">
            </td>
        </tr>
        <tr>
            <td>
                distributor
            </td>
            <td>
                <input type="text" class="form-control" name="mdis">
            </td>
        </tr>
        <tr>
            <td>
                release year
            </td>
            <td>
                <input type="text" class="form-control" name="mrel">
            </td>
        </tr>
        <tr>
            <td>
                language
            </td>
            <td>
                <input type="text" class="form-control" name="mlang">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" class="btn btn-success" name="msub">
            </td>
        </tr>

        </table>
    </form>
    
</body>

</html>
<?php
if(isset($_GET["msub"]))
{
    $moviename=$_GET["mname"];
    echo $moviename;
    $actor=$_GET["mact"];
    echo $actor;
    $actress=$_GET["mactre"];
    echo $actress;
    $producer=$_GET["mpro"];
    echo $producer;
    $camera=$_GET["mcam"];
    echo $camera;
    $distributor=$_GET["mdis"];
    echo $distributor;
    $releaseyear=$_GET["mrel"];
    echo $releaseyear;
    $language=$_GET["mlang"];
    echo $language;
    $submit=$_GET["msub"];
    echo $submit;
}
?>