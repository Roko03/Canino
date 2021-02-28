//Side nav
function show() {
    document.getElementById("navbar").style.width = "100%";
}
function hide() {
    document.getElementById("navbar").style.width = "0%";
}


//Popup-desktop
const loginPopup = document.querySelector(".popup");
const close = document.querySelector(".close");

function showpopup() {
    loginPopup.classList.add("show");
}

close.addEventListener("click", function () {
    loginPopup.classList.remove("show");
});


//Popup-mobile
const loginPopup1 = document.querySelector(".popup1");
const close1 = document.querySelector(".close1");

function showpopupmobile() {
    loginPopup1.classList.add("show");
}

close1.addEventListener("click", function () {
    loginPopup1.classList.remove("show");
});

window.addEventListener("load", function () {

    showPopup1();
    // setTimeout(function(){
    //   loginPopup.classList.add("show");
    // },5000)

})

function showPopup1() {
    const timeLimit = 2 // seconds;
    let i = 0;
    const timer = setInterval(function () {
        i++;
        if (i == timeLimit) {
            clearInterval(timer);
            loginPopup1.classList.add("show");
        }
        console.log(i)
    }, 1000);
}

close1.addEventListener("click", function () {
    loginPopup1.classList.remove("show");
});


//Popup form

function popupform() {
    document.getElementById("popupform").classList.toggle("active");
}


//Links
let x = document.getElementById("login");
let y = document.getElementById("register");

function register() {
    x.style.left = "-150%";
    y.style.left = "0";
}

function login() {
    x.style.left = "0%";
    y.style.left = "150%";
}







