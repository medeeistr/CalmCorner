<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "work"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

if (isset($_GET['q'])) {
    $cuvant = strtolower(trim($_GET['q']));

    $stmt = $conn->prepare("SELECT pagina FROM cautari WHERE LOWER(cuvant_cheie) = ? LIMIT 1");
    $stmt->bind_param("s", $cuvant);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) 
	{
        $row = $result->fetch_assoc();
        header("Location: " . $row['pagina']);
        exit();
    } else 
	{
        echo "<h2 style='font-family: Arial; color: #D81B60; text-align:center; margin-top: 100px;'>Niciun rezultat găsit pentru „" . htmlspecialchars($cuvant) . "”.</h2>";
    }

    $stmt->close();
}

$conn->close();
?>
