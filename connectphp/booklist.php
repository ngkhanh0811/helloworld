<html>

<body>
<?php
$myDB = new mysqli('localhost', 'root', '', 'collegeweb' );
if ($myDB -> connect_errno) {
    die('Connect Error (' . $myDB ->connect_errno . ')' . $myDB -> connect_errno);
}
$sql = "SELECT * FROM student WHERE classID = 'T2109M' ORDER BY stuID";
$result = $myDB -> query($sql);
?>

<table cellpadding=" 2" cellspacing="6" align="center" border="1" >

    <tr>
        <td colspan="4">
            <h3 align="center">Information of Student</h3>
        </td>
    </tr>

    <tr>
        <td align="center">ID</td>
        <td align="center">Name</td>
        <td align="center">Birth Day</td>
        <td align="center">Address</td>
        <td align="center">Class</td>
    </tr>

    <?php
    While ($row = $result-> fetch_assoc()) {
        echo "<tr>";
        echo "<td>";

        echo stripcslashes($row["stuID"]);
        echo "</td><td align='center'>";
        echo $row ["stuName"];
        echo "</td><td>";
        echo $row["stuDay"];
        echo "</td><td>";
        echo $row["address"];
        echo "</td><td>";
        echo $row["classID"];
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>