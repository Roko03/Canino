<?php
include_once 'header-sadrzaj.php';
?>

<?php
if (isset($_SESSION["useremail"])) {
} else {
    echo '<div class="popup1" id="modal">
    <div class="box">
        <div class="close1"><i class="fas fa-times"></i></div>
        <div class="form login" id="login">
            <h2>Prijavi se sa svojim Canino računom</h2>
            <form action="includes/login.inc.php" method="post" class="formm">
                <div class="input">
                    <input type="text" name="email" placeholder="Email">
                    <img class="icon" src="img/email-white.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwd" placeholder="Lozinka">
                    <img class="icon" src="img/padlock-white.svg">
                </div>
                <button type="submit" name="submit">Prijava</button>
                <p>Nemaš korisički račun? <a onclick="register()">Registracija</a></p>
            </form>
        </div>
        <div class="form register" id="register">
            <h2>Napravi Canino korisnički račun</h2>
            <form action="includes/signup.inc.php" method="post" class="formm">
                <div class="name">
                    <div class="input">
                        <input type="text" name="name" placeholder="Ime">
                        <img class="icon" src="img/user.svg">
                    </div>
                    <div class="input">
                        <input type="text" name="surname" placeholder="Prezime">
                        <img class="icon" src="img/user.svg">
                    </div>
                </div>
                <div class="input">
                    <input type="text" name="email" placeholder="Email">
                    <img class="icon" src="img/Path 28.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwd" placeholder="Lozinka">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwdrepeat" placeholder="Ponovi lozinku">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="gender">
                    <div class="input">
                        <input type="number" name="year" placeholder="Godine">
                        <img class="icon" src="img/age-group.svg">
                    </div>
                    <div class="input">
                        <select name="gender">
                            <option value="">Spol</option>
                            <option value="Muško">Muško</option>
                            <option value="Žensko">Žensko</option>
                        </select>
                        <img class="icon" src="img/sex.svg">
                    </div>
                </div>
                <button type="submit" name="submit">Registracija</button>
                <p>Imaš korisnički račun! <a onclick="login()">Prijavi se</a></p>
            </form>
        </div>
    </div>
</div>

<div class="popup">
    <div class="box">
        <div class="close"><i class="fas fa-times"></i></div>
        <div class="login-form">
            <h2>Prijavi se sa svojim Canino računom</h2>
            <form action="includes/login.inc.php" method="post" class="form">
                <div class="input">
                    <input type="text" name="email" placeholder="Email">
                    <img class="icon" src="img/email-white.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwd" placeholder="Lozinka">
                    <img class="icon" src="img/padlock-white.svg">
                </div>
                <button type="submit" name="submit">Prijava</button>
            </form>
        </div>
        <div class="signup-form">
            <h2>Napravi Canino korisnički račun</h2>
            <form action="includes/signup.inc.php" method="post" class="form">
                <div class="name">
                    <div class="input">
                        <input type="text" name="name" placeholder="Ime">
                        <img class="icon" src="img/user.svg">
                    </div>
                    <div class="input">
                        <input type="text" name="surname" placeholder="Prezime">
                        <img class="icon" src="img/user.svg">
                    </div>
                </div>
                <div class="input">
                    <input type="text" name="email" placeholder="Email">
                    <img class="icon" src="img/Path 28.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwd" placeholder="Lozinka">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwdrepeat" placeholder="Ponovi lozinku">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="gender">
                    <div class="input">
                        <input type="number" name="year" placeholder="Godine">
                        <img class="icon" src="img/age-group.svg">
                    </div>
                    <div class="input">
                        <select name="gender">
                            <option value="">Spol</option>
                            <option value="Muško">Muško</option>
                            <option value="Žensko">Žensko</option>
                        </select>
                        <img class="icon" src="img/sex.svg">
                    </div>
                </div>
                <button type="submit" name="submit">Registracija</button>

            </form>
        </div>
    </div>
</div>';
}
?>

<?php

if (isset($_SESSION["useremail"])) {

    echo '<div class="popup-form" id="popupform">
    <div class="objave-upload">
        <a class="zatvori" onclick="popupform()"><i class="fas fa-times"></i></a>
        <form action="includes/objave-upload.inc.php" method="POST" enctype="multipart/form-data">
            <input type="number" name="fileprice" placeholder="Cijena" required>
            <div class="vrijeme">
                <h3>Od</h3>
                <select name="filetimefrom" required>
                    <option value="">-</option>
                    <option value="00:00">00:00</option>
                    <option value="01:00">01:00</option>
                    <option value="02:00">02:00</option>
                    <option value="03:00">03:00</option>
                    <option value="04:00">04:00</option>
                    <option value="05:00">05:00</option>
                    <option value="06:00">06:00</option>
                    <option value="07:00">07:00</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>
                <h3>Do</h3>
                <select name="filetimeto" required>
                    <option value="">-</option>
                    <option value="00:00">00:00</option>
                    <option value="01:00">01:00</option>
                    <option value="02:00">02:00</option>
                    <option value="03:00">03:00</option>
                    <option value="04:00">04:00</option>
                    <option value="05:00">05:00</option>
                    <option value="06:00">06:00</option>
                    <option value="07:00">07:00</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>
            </div>
            <div class="service">
                <h3>Vrsta usluge</h3>
                <select name="fileservice" required>
                    <option value="">-</option>
                    <option value="Šetanja">Šetanja</option>
                    <option value="Čuvanje">Čuvanje</option>
                    <option value="Šetanje/Čuvanje">Šetanje/Čuvanje</option>
                </select>
            </div>
            <input class="desc" type="text" name="filedesc" placeholder="Napiši nešto o sebi">
            <div class="slika">
                <h3>Objavi sliku</h3>
                <input type="file" name="file" class="file">
            </div>
            <div class="butom">
                <button type="submit" name="submit">Objavi</button>
            </div>
        </form>
    </div>
</div>';
}

?>


<div class="content">
    <?php
    if (isset($_SESSION["useremail"])) {
        echo "<a class='button-objava' onclick='popupform()'> <img src='img/Group 83.png'> Objavi</a>";
    } else {
        echo "<div class='menu-mobile'>
        <a class='button-objavi' onclick='showpopupmobile()'> <img src='img/Group 83.png'>Objavi</a>
        </div>
        <div class='menu-desktop'>
        <a class='button-objavi' onclick='showpopup()'><img src='img/Group 83.png'>Objavi</a>
        </div>";
    }
    ?>

    <div class="objave">

        <?php
        include_once 'includes/dbh.inc.php';

        $sql = "SELECT * FROM objave";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Greška!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                    <div style="background-image: url(img/gallery/' . $row["imgFullNameObjave"] . ');"></div>
                    <h3>Cijena: <b>' . $row["priceObjave"] . '</b> kn/h</h3>
                    <h3>Vrijeme: <b>' . $row["fromObjave"] . " - " . $row["toObjave"] . '</b></h3>
                    <h3>Usluga:  <b>' . $row["serviceObjave"] . '</b></h3>
                    <p>' . $row["descObjave"] . '</p>
                    </a>';
            }
        }
        ?>
    </div>
</div>



<?php
include_once 'footer-sadrzaj.php';
?>