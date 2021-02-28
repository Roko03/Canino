<?php
include_once 'header-info.php';
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
    <h1>O APLIKACIJI</h1>
    <p>Canino je aplikacija koja Vam daje mogućnost da pronađete nekoga tko bi Vam mogao pričuvati Vašega ljubimca dok ste na poslu ili poslovnom putu. Također i Vi možete činiti tu uslugu da pričuvate nekom njegovog ljubimca.</p>
    <div class="container-box">
        <h2>Zabranjeno je</h2>
        <ul>
            <li>- ikakvo oglašavanje lažnih objava ili reklamiranje i prodaju proizvoda </li>
            <li>- postavljanje lažnih objava koje bi mogle štetiti korisniku</li>
            <li>- koristit se vulgarnim izrazima
            </li>
            <li>- lažno se predstavljati i lažno iz zabave netočno ocjenjivati korisnike</li>
        </ul>
        <p>Za bilo kakvu prijavu o prijevari, osoba se uklanja sa Canina i ne smije više koristiti ovu aplikaciju sa tog korisničkog računa.</p>
        <p>KONTAKT: mail@gmail.com</p>
        <p>TELEFON: 098/584-723</p>
    </div>
    <h1>CREDITS:</h1>
    <div class="container-box">
        <p>Zahvale www.flaticon.com web stranici i korisnicima koji su pravili sličice i ikonice za našu web stranicu: Icongeek26, Tomas Knop, Pixel perfect, Freepik, Pixel Budha, iconixar, Good Ware, srip. </p>
        <h5></h5>
    </div>
</div>

<?php
include_once 'footer-sadrzaj.php';
?>