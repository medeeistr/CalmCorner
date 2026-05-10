<?php
$conn = mysqli_connect("localhost", "root", "", "work");

if (!$conn) {
    die("Conexiune nereușită: " . mysqli_connect_error());
}

$mesaj_programare = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];
    $nume_client = $_POST['nume'];
    $varsta = $_POST['varsta'];
    $email = $_POST['email'];
    $psiholog = $_POST['psiholog'];
    $gand = $_POST['gand'];

    $check_sql = "SELECT COUNT(*) AS total FROM programari WHERE data = ? AND psiholog = ?";
    $stmt_check = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($stmt_check, "ss", $data, $psiholog);
    mysqli_stmt_execute($stmt_check);
    $result_check = mysqli_stmt_get_result($stmt_check);
    $row_check = mysqli_fetch_assoc($result_check);

    if ($row_check['total'] < 4) {
        $insert_sql = "INSERT INTO programari (data, nume, varsta, email, psiholog, gand) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert_sql);
        mysqli_stmt_bind_param($stmt, "ssisss", $data, $nume_client, $varsta, $email, $psiholog, $gand);

        if (mysqli_stmt_execute($stmt)) {
            $mesaj_programare = "<p style='color: green; text-align: center;'>Programarea a fost trimisă cu succes! Vă vom contacta pentru detalii suplimentare.</p>";
        } else {
            $mesaj_programare = "<p style='color: red; text-align: center;'>Eroare la trimiterea programării: " . mysqli_error($conn) . "</p>";
        }
    } else {
        $mesaj_programare = "<p style='color: red; text-align: center;'>Toate locurile pentru această zi și acest psiholog sunt ocupate.</p>";
    }
}

$sql_locuri = "SELECT data, psiholog, COUNT(*) AS total FROM programari GROUP BY data, psiholog";
$result_locuri = mysqli_query($conn, $sql_locuri);

$locuriDisponibile = [];
$locuriMaxime = 4; 

if ($result_locuri) {
    while ($row = mysqli_fetch_assoc($result_locuri)) {
        $key = $row['data'] . '_' . $row['psiholog'];
        $locuriDisponibile[$key] = $locuriMaxime - $row['total']; 
    }
}

$sql = "SELECT nume, imagine, descriere FROM imagini WHERE nume IN ('Teodora Ioan', 'Florin Martinescu', 'Iulia Minculescu')";
$result = mysqli_query($conn, $sql);

$nume = [];
$imagine = [];
$descriere = [];

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if (isset($row['nume'], $row['imagine'], $row['descriere'])) {
            $nume[] = $row['nume'];
            $imagine[] = 'http://localhost/atestat/sitet/' . $row['imagine'];
            $descriere[] = $row['descriere'];
        }
    }
} else {
    echo "Nu s-au găsit înregistrări";
}
?>

<html>
<head>
    <title>Calm Corner</title>
</head>
<body bgcolor="#FFDAB9">
<style>
table.sus a {
    text-decoration: none;
    color: #D81B60;
    margin: 0 10px;
    position: relative;
    font-family: Arial, sans-serif;
    transition: color 0.3s ease;
}
table.sus a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0%;
    height: 2px;
    background-color: #D81B60;
    transition: width 0.3s ease;
}
table.sus a:hover {
    color: #AD1457;
}
table.sus a:hover::after {
    width: 100%;
}
</style>

<table class='sus' border="0" width="100%" cellpadding="10" style="background-color: #fef5e7; box-shadow: 0px 4px 8px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    <tr>
        <td align="left" style="height: 80px; font-size: 24px; font-weight: bold; color: #D81B60; padding-left: 20px;">
            Calm Corner
        </td>
        <td align="center" colspan="2" style="font-size: 20px;">
            <a href="Atestat.php">Acasă</a>
            <a href="camere.php">Cameră de relaxare</a>
            <a href="sesiune.php">Rezervă o sesiune</a>
            <a href="echilibru.php">Resurse pentru echilibru</a>
        </td>
        <td align="right" style="padding-right: 20px;">
            <form action="search.php" method="GET" style="display: inline;">
                <input type="text" name="q" placeholder="Caută..." style="padding: 5px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px;">
                <input type="submit" value="&#128269" style="padding: 5px 10px; font-size: 16px; background-color: #D81B60; color: white; border: none; border-radius: 5px; cursor: pointer;">
            </form>
        </td>
    </tr>
</table>

<h1 align="center">ECHIPA NOASTRĂ</h1>

<div align="center">
    <?php
    for ($i = 0; $i < count($nume); $i++) {
        echo "<div style='margin-bottom: 20px;'>";
        echo "<h3>" . htmlspecialchars($nume[$i]) . "</h3>";
        echo "<img src='" . htmlspecialchars($imagine[$i]) . "' width='150' height='150' style='border-radius: 10px;' />";
        echo "<p style='max-width: 600px;'>" . htmlspecialchars($descriere[$i]) . "</p>";
        echo "<button onclick='afiseazaLocuri(\"" . htmlspecialchars($nume[$i]) . "\")'>Vezi locuri rămase</button>";
        echo "</div>";
    }
    ?>
</div>
<br>
<h2 align="center">Programați o ședință GRATUITĂ, completând formularul următor:</h2>
<form method="post">
    <table border="1" align="center">
        <tr>
            <td><label for="data">Data programării:</label></td>
            <td><input type="date" id="data" name="data" required></td>
        </tr>
        <tr>
            <td><label for="nume">Nume:</label></td>
            <td><input type="text" id="nume" name="nume" required></td>
        </tr>
        <tr>
            <td><label for="varsta">Vârstă:</label></td>
            <td><input type="number" id="varsta" name="varsta" min="0" required></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="psiholog">Alegeți psihologul:</label></td>
            <td>
                <select id="psiholog" name="psiholog" required>
                    <option value="" disabled selected>-- Selectați --</option>
                    <option value="Teodora Ioan">Teodora Ioan</option>
                    <option value="Florin Martinescu">Florin Martinescu</option>
                    <option value="Iulia Minculescu">Iulia Minculescu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="gand">Gând pentru psiholog:</label></td>
            <td><textarea id="gand" name="gand" rows="4" cols="50" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="Trimite">
            </td>
        </tr>
    </table>
</form>

<?php echo $mesaj_programare; ?>

<script>
const locuriDisponibile = <?php echo json_encode($locuriDisponibile); ?>;

function getUrmatoareleZileDisponibile(psiholog) {
    const zileGasite = [];
    const locuriMaxime = 4;
    const azi = new Date();

    for (let i = 0; zileGasite.length < 3 && i < 30; i++) {
        const zi = new Date(azi);
        zi.setDate(azi.getDate() + i);
        const dataStr = zi.toISOString().split('T')[0];
        const key = dataStr + '_' + psiholog;
        const locuriRamase = locuriDisponibile[key] !== undefined ? locuriDisponibile[key] : locuriMaxime;
        if (locuriRamase > 0) {
            zileGasite.push({ data: dataStr, locuri: locuriRamase });
        }
    }

    return zileGasite;
}

function afiseazaLocuri(psiholog) {
    const zile = getUrmatoareleZileDisponibile(psiholog);

    if (zile.length === 0) {
        alert("Nu sunt locuri disponibile momentan pentru " + psiholog);
        return;
    }

    let mesaj = "Locuri rămase pentru " + psiholog + ":\n\n";
    zile.forEach(z => {
        mesaj += z.data + ": " + z.locuri + " locuri disponibile\n";
    });

    alert(mesaj);
}
</script>

<h3 align="center">Mulțumim, suflet cald!</h3>
</body>
</html>
