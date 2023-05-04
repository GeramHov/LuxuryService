// THE FRENCH LANGUAGE SELECT

const dropdownRu = document.querySelector('.dropdown');

const homeLinkRu = document.querySelector('#homelink');
const projectLinkRu = document.querySelector('#projectslink');
const aboutLinkRu = document.querySelector('#aboutlink');
const contactLinkRu = document.querySelector('#contactlink');

const mainFlagRu = document.querySelector('#mainflag');

const secondFlagRu = document.querySelector('#flag2');
const secondFlagLinkRu = document.querySelector('#chooseflag2');

const helloRu = document.querySelector('#hello');
const myPortfolioRu = document.querySelector('#myportfolio');
const talkRu = document.querySelector('#talk');
const cvRu = document.querySelector('#cv');
const introRu = document.querySelector('#intro');

const myNameRu = document.querySelector('.myname');

const headerProjectRu = document.querySelector('#section-project');

const appDescriptRu = document.querySelectorAll('#app-descript');
const appDescriptRuText = ['Мини-чат приложение', 'Квиз по основам программирования','Сравнитель цен на авиабилеты','Мини-приложение для воспроизведения музыки','Игра про зоопарк','Идеальная копия веб-сайта одной страницы','Приложение для просмотра фильмов с использованием данных JSON'];

const headerAboutRu = document.querySelector('#section-about');

const textAboutRu = document.querySelector('#text-about');
const headerContactRu = document.querySelector('#section-contact');
const writeMeRu = document.querySelector('#writeme');
const contactInfoRu = document.querySelector('#contact-info');

const addressRu = document.querySelector('#address');
const phoneRu = document.querySelector('#phone');
const myEmailRu = document.querySelector('#e-mail');
const sendBntRu = document.querySelector('#sendbtn');
const footerInfoRu = document.querySelector('#footer-info');

// THE FUNCTION

secondFlagLinkRu.addEventListener('click', function(event){

    event.preventDefault();

    dropdownRu.innerHTML = '<a id="language" class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img id="mainflag" class="flagicon mb-1" src="./ICONS/flag_russia.png" alt="actlangflag"></a><ul class="dropdown-menu"><li><a id="chooseflag1" class="dropdown-item" href=""><img id="flag1" class="flagicon mb-1 me-1" src="./ICONS/flag_france.png" alt="langflag">Français</a></li><li><a id="chooseflag2" class="dropdown-item" href="index.php"><img id="flag2" class="flagicon mb-1 me-1" src="./ICONS/flag_usa.png" alt="langflag">English</a></li><li><a id="chooseflag3" class="dropdown-item" href=""><img id="flag3" class="flagicon mb-1 me-1" src="./ICONS/flag_armenia.png" alt="langflag">Հայերեն</a></li></ul>';

    homeLinkRu.innerText = 'В Главную'.toUpperCase();
    projectLinkRu.innerText = 'Мои проекты'.toUpperCase();
    aboutLinkRu.innerText = 'Обо мне'.toUpperCase();
    contactLinkRu.innerText = 'Связь'.toUpperCase();

    helloRu.innerText = 'Привет!';
    myPortfolioRu.innerHTML = '&nbsp;&nbsp;Πредставляю <br> мое портфолио';
    talkRu.innerText = 'До скорого!';

    myNameRu.innerText = 'Гегам Оганнисян';

    cvRu.innerText = 'Смотреть мое резюме';

    introRu.innerText = "В настоящее время я изучаю веб-разработку и работаю над развитием навыков в HTML, CSS, JavaScript, PHP и других языках программирования.";

    headerProjectRu.innerText = 'проекты'.toUpperCase();

    appDescriptRu.forEach((element, index) => {
        element.innerText = appDescriptRuText[index];
      });

    headerAboutRu.innerText = 'обо мне'.toUpperCase();
    textAboutRu.innerHTML = "Давайте познакомимся! Меня зовут <u>Гегам Оганнисян</u>, мне 30 лет, я джуниор веб-разработчик, в настоящее время учусь в <u>Garage 404</u> в Роане, Франция. Мне очень нравится программировать, и я работаю над собой, чтобы стать опытным программистом, чтобы внести свой вклад в захватывающие технологические достижения, которые происходят каждый день. Я бывший автомеханик и автоэлектрик, перешедший в веб-разработку в конце 2022 года. Будучи армянином, я живу и работаю во Франции с 2010 года. Я люблю <u>путешествовать</u> и много слушать музыку. Смотреть и играть в футбол — одно из моих любимых занятий в свободное время.";

    headerContactRu.innerText = 'связь'.toUpperCase();
    writeMeRu.innerText = "Написать";
    contactInfoRu.innerText = 'Информация для связи';

    addressRu.innerText = 'Адрес';
    phoneRu.innerText = 'Телефон';
    sendBntRu.innerText = 'Отправить';

    myEmailRu.innerHTML = ' <p><span>е-мейл</span> <a href="mailto:gueram.hov@proton.me">gueram.hov@proton.me</a></p>';


    footerInfoRu.innerHTML = "Гегам Оганнисян © 2023 <br> Все права защищены";

})



