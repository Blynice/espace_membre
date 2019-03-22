// changement du theme de la page principale 

var colorBackground;
var colorJumbotron;
var colorButton;
var titleFont;

colorBackground = document.getElementById('bg');
colorJumbotron = document.getElementById('jumbotron');
colorButton = document.getElementById('btn');
titleFont = document.getElementById('font');


function changeTheme() {

    colorBackground.classList.toggle('bg-green');
    colorJumbotron.classList.toggle('green');
    colorButton.classList.toggle('btn-green');
    titleFont.classList.toggle('font-title');
};



change.addEventListener('click', changeTheme);