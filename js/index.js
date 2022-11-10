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

// Configurações do sistema de trocas
const cntrl = document.querySelectorAll('.slider-cntrl');
const title = document.querySelector('.title');
const images = document.querySelector('.img');
const progress = document.querySelector('.progresss div');

let id = 0;

const img = [
    'img/Gone.png',
    'img/UOL.png',
    'img/R7.png',
    'img/CNN.png',
    'img/Copel.png',
];

const progressWidth = [
    '20%',
    '40%',
    '60%',
    '80%',
    '100%',
];

const text = [
    'g1 – Últimas notícias do Brasil e do mundo, sobre política, economia, emprego, educação, saúde, meio ambiente, tecnologia, ciência, cultura e carros.',
    'UOL – a maior empresa brasileira de conteúdo, serviços digitais e tecnologia com vários canais de jornalismo e diversas soluções para você ou seu negócio.',
    'R7 – Acompanhe as últimas notícias e vídeos do Brasil e do mundo sobre política, esportes, entretenimento e muito mais no portal da Record TV.',
    'CNN Brasil – Você por dentro de tudo - Notícias ao vivo, fatos da política nacional e internacional no maior canal de notícias do mundo.',
    'Copel – Companhia Paranaense de Energia: gera, transmite, distribui e comercializa energia. A empresa é uma das maiores companhias elétricas do Brasil.',
];


for(let i = 0; i < cntrl.length; i++) {

    cntrl[i].addEventListener('click', () => {
        slider(i);
        id = i;
        stopAutoSlide();
    });
}

function slider(i) {
    images.src = img[i];
    

    progress.style.width = progressWidth[i];
    
    title.innerText = text[i] + " ";

    

}