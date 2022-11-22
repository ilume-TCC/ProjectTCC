const menuBtn = document.querySelectorAll('.side-header');
const menu = document.querySelector('.side-header-inner');
const links = document.querySelectorAll('.side-header-inner li');

    // js para ativar o cabeçalho lateral interno
    menuBtn.forEach(btn => {
        btn.addEventListener('click', sideNavToggle);
    });

    function sideNavToggle() {
    let delay = 100;
        menu.classList.toggle('side-header-inner-open');

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
    }}

    // js para identificar apenas letras
    function letters(e, t) {
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

    // js para máscara do cep
    $(document).ready(function(){
        $("#cep").mask("99999-999");
    });