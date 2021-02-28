<?php
include_once 'header.php';
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

<div class="container">
    <div class="text">
        <h2>Dobrodošli na stranicu Canino</h2>
    </div>
</div>

<?php
include_once 'footer.php';
?>