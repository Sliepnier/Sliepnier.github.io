<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="tableExport.js"></script>
    <script type="text/javascript" src="jquery.base64.js"></script>
    <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="jspdf/jspdf.js"></script>
    <script type="text/javascript" src="jspdf/libs/base64.js"></script>
    <title>2</title>
</head>
<body>
<?php
echo "Number 17";
echo "<table id='tab' style='border: solid 1px black;'>";
echo "<tr><th>Position</th><th>Max Salary</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreamhome";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT position, max(salary) FROM staff group by position");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<select name="type" id="type">
    <option value="pdf">PDF</option>
    <option value="csv">CSV</option>
    <option value="excel">XLS</option>
</select>
<button id='exp' name='exp'>Export</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            if($("#type").val()=="pdf"){
                $('#tab').tableExport({type:'pdf',escape:'false'});
            }
            else if($("#type").val()=="csv"){
                $('#tab').tableExport({type:'csv',escape:'false'});
            }
            else{
                $('#tab').tableExport({type:'excel',escape:'false'});
            }
            
        });
    });
</script>
</body>
</html>
