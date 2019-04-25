// changement du theme de la page principale

var colorBackground;
var colorJumbotron;
var colorButton;
var titleFont;
var btnFont;

//Récupération des id
colorBackground = document.getElementById('bg');
colorJumbotron = document.getElementById('jumbotron');
colorButton = document.getElementById('btn');
titleFont = document.getElementById('font');
btnFont = document.getElementById('btn');

//Function changer thème
function changeTheme() {

    colorBackground.classList.toggle('bg-green');
    colorJumbotron.classList.toggle('green');
    colorButton.classList.toggle('btn-green');
    titleFont.classList.toggle('font-change');
    btnFont.classList.toggle('font-change');
};



change.addEventListener('click', changeTheme);
