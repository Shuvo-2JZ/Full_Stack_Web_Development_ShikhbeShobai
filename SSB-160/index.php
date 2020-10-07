<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Anika's Assignment-2</title>
</head>

<body>
    <?php
    //not case sensitive (variable in php)
    
    $taskname = 'SSB-160, Assignment-2';
    echo "<b>$taskname </b><br><br>";

    $firstname = 'Anika';
    $lastname = 'Salsabil';
    $fullname= $firstname ." ". $lastname;
    
    echo "<b>First Name: </b>";
    echo $firstname; echo '<br>';
    
    echo "<b>Last Name: </b>";
    echo $lastname; echo '<br>';
    
    echo "<b>Full Name: </b>";
    echo $fullname; echo '<br>';
    
    echo '<br>';
    $numbers= array(100, 200, 300, 400, 500);
    echo "<b>The given number array is: </b>";
    echo implode(", ",$numbers); echo '<br>';
    
    $sumofnumbers = array_sum($numbers);
    echo "The <b>Sum</b> of the number array is: $sumofnumbers <br>";
    
    
    
    echo '<br>';echo '<br>';
    echo "<b>Used Variable Details:<br></b>";
    var_dump($firstname); echo '<br>';
    var_dump($lastname);  echo '<br>';
    var_dump($lastname);  echo '<br>';
        
    ?>
    
    <?php
    echo "<br><br><b>Please enter 3 values (Int, String, Float anything:)</b>";
    print "<form method=post action=index.php>";
        
        for($i=0; $i <3; $i++){
            print "<input type=text name=txt$i size=5 />";

        }
        print "<input type=submit value=Submit />";
        
        
    print "</form>";
    
    echo "<br><b>The Output Array:</b> <br>";
    $arr= array();
    if (isset($_POST['txt0']))
    {
        for($i=0; $i <3; $i++){
            $arr[$i] = $_POST['txt'.$i];

        }  
        print "<pre>";
        print_r($arr);
        print "</pre>";
    }
    
    ?>


</body>


</html>
