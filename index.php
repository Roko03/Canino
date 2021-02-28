<?php
include_once 'header.php';
?>

<div class="popup1" id="modal">
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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Popuni sva polja!</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Unesi valjane podatke!</p>";
                }
            }
            ?>
        </div>
        <div class="form register" id="register">
            <h2>Napravi Canino korisnički račun</h2>
            <form action="includes/signup.inc.php" method="post" class="formm">
                <div class="name">
                    <div class="input">
                        <input type="text" name="name" placeholder="Ime" id="ime">
                        <img class="icon" src="img/user.svg">
                    </div>
                    <div class="input">
                        <input type="text" name="surname" placeholder="Prezime" id="prezime">
                        <img class="icon" src="img/user.svg">
                    </div>
                </div>
                <div class="input">
                    <input type="text" name="email" placeholder="Email" id="email">
                    <img class="icon" src="img/Path 28.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwd" placeholder="Lozinka" id="lozinka">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="input">
                    <input type="password" name="pwdrepeat" placeholder="Ponovi lozinku" id="plozinka">
                    <img class="icon" src="img/padlock.svg">
                </div>
                <div class="gender">
                    <div class="input">
                        <input type="number" name="year" placeholder="Godine" id="godine">
                        <img class="icon" src="img/age-group.svg">
                    </div>
                    <div class="input">
                        <select name="gender" id="spol">
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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Popuni sva polja!</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Unesi ispravan email!</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Šifre se ne podudaraju!</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Nešto nije uredu, pokušaj ponovo!</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>Registrirao si se!</p>";
                }
            }
            ?>
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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information!</p>";
                }
            }
            ?>
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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Password doesn't match!</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again!</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="text">
        <h2>Pronađi nekoga da ti pričuva ljubimca ili ga prošeta dok si na poslu</h2>
    </div>
</div>

<?php
include_once 'footer.php';
?>