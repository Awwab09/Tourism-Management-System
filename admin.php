<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
echo"
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Admin Panel</title>
  
    <style>

 * {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    min-height: 100vh;
    background: url(images/footer1.jpg) center / cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}

table {
    width: 100%;
}


table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td
 {
    transition: .2s ease-in-out;
}

tbody tr.hide td
{
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}



@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

    </style>

</head>

<body>
    <main class='table'>
        <section class='table__header'>
            <h1>Customer's Orders</h1>
            <li class='nav-item'>
            <a class='nav-link' href='logout.php'>Logout</a>
          </li>
        </section>
";
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$con = mysqli_connect($server, $username, $password, $dbname);


mysqli_select_db($con, 'user_db');

$s = "select * from book_form";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

echo"<thead>";
echo "<table class='table__body'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email id</th>";
echo "<th>Phone No.</th>";
echo "<th>Address</th>";
echo "<th>Location</th>";
echo "<th>Guests No.</th>";
echo "<th>arrivals</th>";
echo "<th>leaving</th>";
echo "</tr>";
echo"</thead>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    echo"<tbody>";
    echo "<tr>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['phone']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['location']}</td>";
    echo "<td>{$row['guests']}</td>";
    echo "<td>{$row['arrivals']}</td>";
    echo "<td>{$row['leaving']}</td>";
    echo "</tr>";
    echo"</tbody>";
}


echo"
    </main>
</body>
</html>
";
}
else 
{ 
  echo '<script language = "javascript">'; 
  echo 'alert("Fail login")'; 
  echo '</script>'; 
  echo "<script>window.location.assign('login.php')</script>"; 
  die();
}
?>