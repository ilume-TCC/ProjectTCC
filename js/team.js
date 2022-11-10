// JS da página do team

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
const subTitle = document.querySelectorAll('.sub-title');
const triTitle = document.querySelectorAll('.tri-title');
const images = document.querySelector('.img');
const icons = document.querySelector('.icone');
const progress = document.querySelector('.progress div');
const description = document.querySelectorAll('.js-profession-desc');
const descriptiones = document.querySelectorAll('.js-profession');

let id = 0;

const tit1 = [
    'Podemos classificar como a parte visual de um site, aquilo que conseguimos interagir. Quem trabalha com Front End é responsável por desenvolver por meio do código uma interface gráfica e, normalmente, com as tecnologias base da Web, que irá rodar num navegador Web como o Chrome, Firefox ou Safari.',
    'Como o próprio nome sugere, vem da ideia daquilo que tem por trás de uma aplicação. O Back End trabalha em boa parte dos casos fazendo a ponte entre os dados que vem do navegador rumo ao banco de dados e vice-versa, sempre aplicando as devidas regras de negócio, validações e garantias num ambiente restrito ao usuário final.',
    'As mídias sociais se tornaram veículos de comunicação muito relevantes por causa da proximidade com os usuários. O Social Media Analyst é responsável por entender as particularidades de cada ambiente digital e avaliar como eles podem agregar no crescimento de uma marca.',
    'Aquele que desenvolve e monitora o banco de dados de uma empresa. O DBA é responsável pela criação, instalação, monitoramento, reparos e análise de estruturas de um banco de dados. Que armazenam informações sobre coisas de uma forma organizada e relacionada entre si, para que seja mais fácil encontrar elemntos de uma pesquisa.',
    'Aquele que desenvolve e monitora o banco de dados de uma empresa. O DBA é responsável pela criação, instalação, monitoramento, reparos e análise de estruturas de um banco de dados. Que armazenam informações sobre coisas de uma forma organizada e relacionada entre si, para que seja mais fácil encontrar elemntos de uma pesquisa.',
];

const tit2 = [
    'Front End Developer',
    'Back End Developer',
    'Social Media Analyst',
    'Database Administrator',
    'Database Administrator',
];

const img = [
    './../img/g1.png',
    './../img/g2.png',
    './../img/g3.png',
    './../img/g4.png',
    './../img/g5.png',
];

const icones = [
    './../img/i1.png',
    './../img/i2.png',
    './../img/i3.png',
    './../img/i4.png',
    './../img/i5.png',
];

const progressWidth = [
    '20%',
    '40%',
    '60%',
    '80%',
    '100%',
];

const text = [
    'Bruno Matheus',
    'Vitor Gabriel',
    'Gabrielly Rufino',
    'Emanuelly Ferreira',
    'Nathally Lorelay',
];

const email = [
    'bruno.pires0422@gmail.com',
    'vitorgabrielvasconcellos5@gmail.com',
    'gabrielyrufino710@gmail.com',
    'emanuellydacunhaferreira51@gmail.com',
    'nathallylorelay13@gmail.com',
];

const iiiii = [
    'front end developer',
    'back end developer',
    'social media analyst',
    'database administrator',
    'database administrator',
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
    icons.src = icones[i];

    progress.style.width = progressWidth[i];
    
    title.innerText = text[i] + " ";

    subTitle.forEach(sub => {
        sub.innerText = email[i] + " "
    });

    triTitle.forEach(sub => {
        sub.innerText = iiiii[i] + " "
    });

    description.forEach(sub => {
        sub.innerText = tit1[i] + " "
    });

    descriptiones.forEach(sub => {
        sub.innerText = tit2[i] + " "
    });

}