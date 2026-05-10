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
<h1 align="center">Programe partenere</h1>
    <table border="1" cellspacing="10" cellpadding="10" style="width: 100%; text-align: center;">
        <tr>
            <td>
                <img src="s1.png" alt="Resurse Educaționale"><br>
                <strong>RESURSE EDUCAȚIONALE</strong><br>
                <p>Trezește speranța: îmbrățișează acceptarea și învinge boala.</p>
                <a href="https://ro.promehs.org/">Citește mai mult</a>
            </td>
            <td>
                <img src="s2.png" alt="Grupuri de Suport"><br>
                <strong>GRUPURI DE SUPORT</strong><br>
                <p>Împărtășește experiențele și obține sprijinul necesar.</p>
                <a href="https://mentalhealthforromania.org/">Citește mai mult</a>
            </td>
            <td>
                <img src="s3.png" alt="Consiliere și Îndrumare"><br>
                <strong>CONSILIERE ȘI ÎNDRUMARE</strong><br>
                <p>Cu răbdare și perseverență, revenirea este posibilă.</p>
                <a href="https://mindeducation.ro/">Citește mai mult</a>
            </td>
            <td>
                <img src="s4.png" alt="Terapie și Coaching"><br>
                <strong>TERAPIE ȘI COACHING</strong><br>
                <p>Redescoperă-te și găsește noi sensuri vieții tale.</p>
                <a href="https://deprehub.ro/">Citește mai mult</a>
            </td>
        </tr>
    </table>
<br><br>
<h1 align="center">Vă așteptăm cu bucurie!</h1><br>
<style>
.carousel-container {
    position: relative;
    width: 100%;
    max-width: 800px;
    margin: 40px auto;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    background-color: #fff;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-slide img {
    width: 100%;
    height: auto;
    flex: 0 0 100%;
    object-fit: cover;
}

.carousel-buttons {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    padding: 0 10px;
    box-sizing: border-box;
}

.carousel-buttons button {
    background-color: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 24px;
    border-radius: 50%;
    transition: background-color 0.3s;
}

.carousel-buttons button:hover {
    background-color: rgba(0,0,0,0.8);
}
</style>

<div class="carousel-container">
    <div class="carousel-slide" id="carouselSlide">
        <img src="g1.jpg" alt="">
        <img src="g3.jpg" alt="">
        <img src="g4.jpg" alt="">
        <img src="g5.jpg" alt="">
        <img src="g6.jpg" alt="">
        <img src="g7.jpg" alt="">
    </div>
    <div class="carousel-buttons">
        <button onclick="moveSlide(-1)">‹</button>
        <button onclick="moveSlide(1)">›</button>
    </div>
</div>

<script>
let currentIndex = 0;

function moveSlide(direction) {
    const slide = document.getElementById("carouselSlide");
    const images = slide.querySelectorAll("img");
    const totalImages = images.length;

    currentIndex = (currentIndex + direction + totalImages) % totalImages;

    slide.style.transform = `translateX(-${currentIndex * 100}%)`;
}
</script>

</body>
</html>