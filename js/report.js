// JS da página do home

// Configurações do sistema de cabeçalho lateral
const menuBtn = document.querySelectorAll('.menu-btn');
const menu = document.querySelector('.menu');
const links = document.querySelectorAll('.menu li');

menuBtn.forEach(btn => {
    btn.addEventListener('click', sideNavToggle);
});

function sideNavToggle() {
    let delay = 100;
    menu.classList.toggle('menu-open');

    setTimeout(() => {
        resetAnimations();
        }, delay * (links.length + 1));

        links.forEach(link => {
            
            link.style.opacity = "0";
            link.style.animation = "slideIn 400ms ease-in-out forwards";
            link.style.animationDelay = delay + "ms";

            delay += 100;
        });

        function resetAnimations() {
            links.forEach(link => {

                link.style.animation = "none";
                link.style.opacity = "1";
            });
        }
}

$(document).ready(function(){
	$("#cep").mask("99999-999");
});

function ApenasLetras(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}