// THE FRENCH LANGUAGE SELECT

const dropdownFR = document.querySelector('.dropdown');

const homeLinkFr = document.querySelector('#homelink');
const projectLinkFr = document.querySelector('#projectslink');
const aboutLinkFr = document.querySelector('#aboutlink');
const contactLinkFr = document.querySelector('#contactlink');

const mainFlagFr = document.querySelector('#mainflag');
const firstFlagFr = document.querySelector('#flag1');
const firstFlagLinkFr = document.querySelector('#chooseflag1');

const helloFr = document.querySelector('#hello');
const myPortfolioFr = document.querySelector('#myportfolio');
const talkFr = document.querySelector('#talk');
const cvFr = document.querySelector('#cv');
const resumeFr = document.querySelector('#resume');
const introFr = document.querySelector('#intro');

const headerProjectFr = document.querySelector('#section-project');

const appDescriptFr = document.querySelectorAll('#app-descript');
const appDescriptFrText = ['Application de Mini-Chat', 'Quiz sur les bases de programmation','Comparateur des prix de vols','Mini-application de streaming musical','Un jeu de Zoo','Copie parfaite d\'un site web d\'une page','Application de visualisation de films utilisant des données JSON'];

const headerAboutFr = document.querySelector('#section-about');

const textAboutFr = document.querySelector('#text-about');
const headerContactFr = document.querySelector('#section-contact');
const writeMeFr = document.querySelector('#writeme');
const contactInfoFr = document.querySelector('#contact-info');
const sendBtn = document.querySelector('#sendbtn');

const addressFr = document.querySelector('#address');
const phoneFr = document.querySelector('#phone');
const footerInfoFr = document.querySelector('#footer-info');

// THE FUNCTION

let isChoosen = false;

firstFlagLinkFr.addEventListener('click', function(event){

    isChoosen = true;

    event.preventDefault();

    dropdownFR.innerHTML = '<a id="language" class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img id="mainflag" class="flagicon mb-1" src="./ICONS/flag_france.png" alt="actlangflag"></a><ul class="dropdown-menu"><li><a id="chooseflag1" class="dropdown-item" href="index.php"><img id="flag1" class="flagicon mb-1 me-1" src="./ICONS/flag_usa.png" alt="langflag">English</a></li><li><a id="chooseflag2" class="dropdown-item" href=""><img id="flag2" class="flagicon mb-1 me-1" src="./ICONS/flag_russia.png" alt="langflag">Русский</a></li><li><a id="chooseflag3" class="dropdown-item" href=""><img id="flag3" class="flagicon mb-1 me-1" src="./ICONS/flag_armenia.png" alt="langflag">Հայերեն</a></li></ul>';

    homeLinkFr.innerText = 'ACCUEIL';
    projectLinkFr.innerText = 'PROJETS';
    aboutLinkFr.innerText = 'À PROPOS';
    contactLinkFr.innerText = 'CONTACT';

    helloFr.innerText = 'Bonjour!';
    myPortfolioFr.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenue <br> à mon portfolio';
    talkFr.innerText = 'A bientôt!';

    cvFr.innerText = ' Voir mon CV';
    resumeFr.href = './CV/gueram hovhannisyan.pdf';

    introFr.innerText = "Actuellement en formation de développement web et travaillant sur le développement de mes compétences en HTML, CSS, JavaScript, PHP et d'autres langages de programmation";

    headerProjectFr.innerText = 'PROJETS';

    appDescriptFr.forEach((element, index) => {
        element.innerText = appDescriptFrText[index];
      });

    headerAboutFr.innerText = 'À PROPOS';
    textAboutFr.innerHTML = "Faisons connaissance! Je m'appelle <u>Gueram Hovhannisyan</u> , J'ai 30 ans. Je suis Développeur Web actuellement étudiant au <u>Garage 404</u> à Roanne en France.  J'ai un goût prononcé pour la programmation et je travaille sur moi-même pour devenir programmeur accompli afin de mettre mes compétences au service des avancées technologiques qui se produisent chaque jour. Je suis ancien mécanicien et électricien automobile, converti au développement Web en fin 2022. Étant d'origine arménienne, je vis et travaille en France depuis 2010. J'aime beaucoup <u>voyager</u> et écouter de la musique. Regarder et jouer au football est l'un de mes loisirs préférés";

    headerContactFr.innerText = 'CONTACT';
    writeMeFr.innerText = "M'écrire";
    contactInfoFr.innerText = 'Informations de contacte';

    addressFr.innerText = 'Adresse';
    phoneFr.innerText = 'Téléphone';
    sendBtn.innerText = 'Envoyer';

    footerInfoFr.innerHTML = "Geram Hovhannisyan © 2023 <br> Tous droits réservés";

})