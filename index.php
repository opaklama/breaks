<!DOCTYPE html>
<html lang="id">
<?php include('includes/header.php'); ?>

<div class="slider">
    <div class="slides">
    <img src="assets/img/mockup-1.jpg" alt="mockup-1 1">
    <img src="assets/img/mockup-2.jpg"alt="mockup-1 2">
    <img src="assets/img/mockup-3.jpg"alt="mockup-1 3">
    </div>
</div>
<h1 id="angka">4.342.944</h1>
<script>
    //mulai dari 4.342.944
    let angka = 4.342.944;
    //setiap 1 detik, angka bertambah 454.523
    setInterval(function() => {
        angka++;
        document.getElementbyId('angka').innerText = angka;
    }, 1000);
    </script>
<section class="games">
    <h2>Game Terpopuler 🔥</h2>
    <div class="game-list">
        <div class="game-item">🎰 The Great Safari</div>
        <div class="game-item">🀄 Mahjong Princess</div>
        <div class="game-item">🐉 Dragon's Treasure</div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
</html>
