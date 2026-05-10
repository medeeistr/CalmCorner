<html>

<head>
<title>Calm Corner</title>
</head>

<body bgcolor="#FFDAB9" background="fundal.jpg">

<center>
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
            <a href="Atestat.php" style="text-decoration: none; color: #D81B60; margin-right: 20px;">Acasă</a>
            <a href="camere.php" style="text-decoration: none; color: #D81B60; margin-right: 20px;">Cameră de relaxare</a>
            <a href="sesiune.php" style="text-decoration: none; color: #D81B60; margin-right: 20px;">Rezervă o sesiune</a>
            <a href="echilibru.php" style="text-decoration: none; color: #D81B60;">Resurse pentru echilibru</a>
        </td>
        <td align="right" style="padding-right: 20px;">
            <form action="search.php" method="GET" style="display: inline;">
                <input type="text" name="q" placeholder="Caută..." style="padding: 5px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px;">
                <input type="submit" value="&#128269" style="padding: 5px 10px; font-size: 16px; background-color: #D81B60; color: white; border: none; border-radius: 5px; cursor: pointer;">
            </form>
        </td>
</form>

        </td>
    </tr>
</table>

<table>
<tr>
    <td><img src="banner.jpg" width="100%" height="auto"></td>
</tr>
</table>

<h1>Bine ai venit, suflet blând și cald!</h1>

<h2> Despre Calm Corner </h2>
<p>Calm Corner este un loc dedicat celor care doresc să își îmbunătățească starea de bine mentală...</p>
<h2>Misiunea noastră:</h2>
<p>Ne dorim să contribuim la o lume mai calmă și mai echilibrată...</p>
<h2>Ce oferim:</h2>
<p>1.Meditații ghidate<br></p>
<p>2.Tehnici pentru anxietate<br></p>
<p>3.Consultanță personalizată<br></p>
<p>La Calm Corner, dorim să facem sănătatea mentală accesibilă...</p>
<br>

<h1>Hai să ne cunoaștem!</h1>

<form method="POST">
    <table>
        <tr>
            <td>SEX: <br>
                <input type="radio" name="r" value="f" id="rf">
                <label for="rf">Feminin</label><br>
                <input type="radio" name="r" value="m" id="rm">
                <label for="rm">Masculin</label><br>
            </td>
        </tr>
    </table>

    <h2>Test Simplu de Anxietate</h2>
    <p><strong>1. Cât de des te simți îngrijorat/ă?</strong></p>
    <input type="radio" name="q1" value="1" id="q1a1">
    <label for="q1a1">Foarte rar</label><br>
    <input type="radio" name="q1" value="2" id="q1a2">
    <label for="q1a2">Ocazional</label><br>
    <input type="radio" name="q1" value="3" id="q1a3">
    <label for="q1a3">Deseori</label><br>
    <input type="radio" name="q1" value="4" id="q1a4">
    <label for="q1a4">Foarte des</label><br>

    <p><strong>2. Ai dificultăți în a te relaxa?</strong></p>
    <input type="radio" name="q2" value="1" id="q2a1">
    <label for="q2a1">Niciodată</label><br>
    <input type="radio" name="q2" value="2" id="q2a2">
    <label for="q2a2">Rareori</label><br>
    <input type="radio" name="q2" value="3" id="q2a3">
    <label for="q2a3">Adesea</label><br>
    <input type="radio" name="q2" value="4" id="q2a4">
    <label for="q2a4">Tot timpul</label><br>

    <p><strong>3. Ai probleme cu somnul din cauza gândurilor?</strong></p>
    <input type="radio" name="q3" value="1" id="q3a1">
    <label for="q3a1">Niciodată</label><br>
    <input type="radio" name="q3" value="2" id="q3a2">
    <label for="q3a2">Rareori</label><br>
    <input type="radio" name="q3" value="3" id="q3a3">
    <label for="q3a3">Adesea</label><br>
    <input type="radio" name="q3" value="4" id="q3a4">
    <label for="q3a4">Tot timpul</label><br>

    <p><strong>4. Cât de des te simți copleșit/ă?</strong></p>
    <input type="radio" name="q4" value="1" id="q4a1">
    <label for="q4a1">Foarte rar</label><br>
    <input type="radio" name="q4" value="2" id="q4a2">
    <label for="q4a2">Ocazional</label><br>
    <input type="radio" name="q4" value="3" id="q4a3">
    <label for="q4a3">Deseori</label><br>
    <input type="radio" name="q4" value="4" id="q4a4">
    <label for="q4a4">Foarte des</label><br>

    <br>
    <input type="submit" name="rasp" value="Trimite Răspunsurile">
</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST["rasp"])){
	echo "<h2>Rezultatele tale</h2>";

    if (isset($_POST["r"])) {
        $sex = $_POST["r"];
        $sexText = ($sex === "f") ? "Feminin" : "Masculin";
        echo "<p><strong>Sex:</strong> $sexText</p>";
    } else {
        echo "<p><strong>Sex:</strong> Nespecificat</p>";
    }

    $totalScore = 0;

    for ($i = 1; $i <= 4; $i++) {
        $key = "q" . $i;
        if (isset($_POST[$key])) {
            $raspuns = $_POST[$key];
            $totalScore += $raspuns;
            echo "<p><strong>Întrebarea $i:</strong> Ai ales opțiunea $raspuns</p>";
        } else {
            echo "<p><strong>Întrebarea $i:</strong> Nu ai răspuns</p>";
        }
    }

    echo "<h1>Evaluarea ta:</h1>";
    if ($totalScore <= 6 && $totalScore >0) {
        echo "<h3><strong>Tipul tău este RELAXAT.</strong></h3>";
    } elseif ($totalScore <= 10 && $totalScore >0) {
        echo "<h3><strong>Tipul tău este MODERAT.</strong></h3>";
    } elseif ($totalScore <= 14 && $totalScore >0) {
        echo "<h3><strong>Tipul tău este UȘOR ANXIOS.</strong></h3>";
    } elseif($totalScore >0) {
        echo "<h3><strong>Tipul tău este ANXIOS.</strong></h3>";
    }}
}
?>

<br><br><br>

<table cellspacing="10">
    <tr>
        <td rowspan="4" style="vertical-align: top;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3413.5203284006966!2d25.625354426015555!3d45.65680936705391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b35c717c2d6417%3A0xfa3a36f146e9430f!2sAcademia%20de%20Informatic%C4%83%20Bra%C8%99ov!5e0!3m2!1sro!2sro!4v1659087269046!5m2!1sro!2sro" width="600" height="450" style="border:0;" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </td>
    </tr>
    <tr>
        <td>
            <h1>CONTACT</h1>
            <h4>TEL.: 0723-466-788</h4>
			<h4>SEDIU: Strada Rozelor nr. 48, Brașov 500381</h4>
            <h4>E-MAIL: calmcorner@yahoo.com</h4><br><br>
			<h2>Ce spun utilizatorii noștri?</h2>
<form method="POST">
		NUME:<input type="text" name="txt"><br>
		Opinie: <input type="text" name="op"><br>
		<input type="submit" name="BTN" value="Trimite opinie">
		<input type="submit" name="BTNOP" value="Vizualizare opinii clienti">
	</form>
<style>
    table.tabel-opinii {
        border-collapse: collapse;
        width: 60%;
        
        font-family: Arial, sans-serif;
    }

    table.tabel-opinii td {
        padding: 10px;
        border: none;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    table.tabel-opinii tr:hover {
        background-color: #f2f2f2;
    }

    table.tabel-opinii td:first-child {
        font-weight: bold;
        color: #333;
    }
</style>

<?php
		$conn=mysqli_connect("localhost","root","");
		if(!$conn)
			echo "conexiune nereusita";
		else
			{
				$conDB=mysqli_select_db($conn,"work");
				if(!$conDB)
					echo "conexiune nereusita";
				else
				{
					if(isset($_POST["BTN"]))
						if (!empty($_POST["txt"]) && !empty($_POST["op"]))
						{
							$nume=$_POST["txt"];
							$op=$_POST["op"];
							$sel="insert into opinii values ('".$nume."','".$op."')";
							mysqli_query($conn,$sel);
							//echo "inserare reusita";
						}
					if(isset($_POST["BTNOP"]))
					{
						$sel="select * from opinii";
						$exsel=mysqli_query($conn,$sel);
						echo "<table class='tabel-opinii'>";
						while($l=mysqli_fetch_array($exsel))
						{
							echo "<tr>";
							echo "<td>".$l[0]."<td>".$l[1];
						}
						echo "</table>";
					}
				}
			}
?>
        </td>
    </tr>
</table>

</center>

</body>

</html>
