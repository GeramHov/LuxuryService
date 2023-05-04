// THE FRENCH LANGUAGE SELECT

const dropdownHy = document.querySelector('.dropdown');

const homeLinkHy = document.querySelector('#homelink');
const projectLinkHy = document.querySelector('#projectslink');
const aboutLinkHy = document.querySelector('#aboutlink');
const contactLinkHy = document.querySelector('#contactlink');

const mainFlagHy = document.querySelector('#mainflag');
const thirdFlagHy = document.querySelector('#flag3');
const thirdFlagLinkHy = document.querySelector('#chooseflag3');

const helloHy = document.querySelector('#hello');
const myPortfolioHy = document.querySelector('#myportfolio');
const talkHy = document.querySelector('#talk');
const cvHy = document.querySelector('#cv');
const introHy = document.querySelector('#intro');

const myNameHy = document.querySelector('.myname');

const headerProjectHy = document.querySelector('#section-project');

const appDescriptHy = document.querySelectorAll('#app-descript');
const appDescriptHyText = ['Մինի-չատ հավելված', 'Ծրագրավորման հիմունքների վիկտորինա','Ավիատոմսի գների համեմատության հավելված','Երաժշտության նվագարկման վիդջեթ','Կենդանաբանական այգու խաղ','Մեկ էջանոց կայքի կատարյալ պատճեն','Ֆիլմերի հավելված՝ օգտագործելով JSON տիպի տվյալները'];

const headerAboutHy = document.querySelector('#section-about');

const textAboutHy = document.querySelector('#text-about');
const headerContactHy = document.querySelector('#section-contact');
const writeMeHy = document.querySelector('#writeme');
const contactInfoHy = document.querySelector('#contact-info');
const sendBtnHy = document.querySelector('#sendbtn');

const addressHy = document.querySelector('#address');
const phoneHy = document.querySelector('#phone');
const myEmailHy = document.querySelector('#e-mail');
const footerInfoHy = document.querySelector('#footer-info');

// THE FUNCTION

thirdFlagLinkHy.addEventListener('click', function(event){

    event.preventDefault();

    dropdownHy.innerHTML = '<a id="language" class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img id="mainflag" class="flagicon mb-1" src="./ICONS/flag_armenia.png" alt="actlangflag"></a><ul class="dropdown-menu"><li><a id="chooseflag1" class="dropdown-item" href=""><img id="flag1" class="flagicon mb-1 me-1" src="./ICONS/flag_france.png" alt="langflag">Français</a></li><li><a id="chooseflag2" class="dropdown-item" href="index.php"><img id="flag2" class="flagicon mb-1 me-1" src="./ICONS/flag_russia.png" alt="langflag">Русский</a></li><li><a id="chooseflag3" class="dropdown-item" href="index.php"><img id="flag3" class="flagicon mb-1 me-1" src="./ICONS/flag_usa.png" alt="langflag">English</a></li></ul>';

    homeLinkHy.innerText = 'Գլխավոր էջ'.toUpperCase();
    projectLinkHy.innerText = 'Նախագծեր'.toUpperCase();
    aboutLinkHy.innerText = 'Իմ մասին'.toUpperCase();
    contactLinkHy.innerText = 'Կապ'.toUpperCase();

    helloHy.innerText = 'Բարև';
    myPortfolioHy.innerHTML = 'Բարի գալուստ իմ<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;պորտֆոլիո';
    talkHy.innerText = 'Ցտեսություն';

    myNameHy.innerText = 'Գեղամ Հովհաննիսյան';

    cvHy.innerText = 'Նայել իմ ռեզյումեն';

    introHy.innerText = "Ես ներկայումս սովորում եմ վեբ ծրագրավորում և աշխատում եմ կատարելագործվել HTML, CSS, JavaScript, PHP և այլ ծրագրավորման լեզուների մեջ։";

    headerProjectHy.innerText = 'նախագծեր'.toUpperCase();

    appDescriptHy.forEach((element, index) => {
        element.innerText = appDescriptHyText[index];
      });

    headerAboutHy.innerText = 'իմ մասին'.toUpperCase();
    textAboutHy.innerHTML = "Եկեք ծանոթանանք! Ես <u>Գեղամ Հովհաննիսյանն եմ </u>, 30 տարեկան: Ես կրտսեր ծրագրավորող եմ և այժմ սովորում եմՖրանսիայի Ռոան քաղաքում՝ <u>Garage 404</u> -ում:Ինձ շատ է դուր գալիս ծրագրավորումը և ես աշխատում եմ ինքս ինձ վրա, որպեսզի դառնամ կայացած ծրագրավորող, որ իմ հմտությունները կարողանամ ներդնեմ տեխնոլոգիական առաջընթացներում, որոնք տեղի են ունենում ամեն օր. Նախկին մասնագիտությամբ եղել եմ ավտոմեխանիկ և ավտոէլեկտրիկ, փոխակերպվել եմ որպես Վեբ ծրագրավորող 2022 թվականի վերջին։ Լինելով հայկական ծագումով՝ ապրում և աշխատում եմ Ֆրանսիայում 2010 թվականից: Շատ եմ սիրում <u>ճանապարհորդել</u> և երաժշտություն լսել: Ֆուտբոլ դիտելն ու խաղալը իմ ազատ ժամանակվա սիրելի զբաղմունքներից է";

    headerContactHy.innerText = 'կապ'.toUpperCase();
    writeMeHy.innerText = "Գրել ինձ";
    contactInfoHy.innerText = 'Կոնտակտային տվյալներ';
    sendBtnHy.innerText = 'Ուղարկել';

    addressHy.innerText = 'Հասցե';
    phoneHy.innerText = 'Հեռախոս';
    myEmailHy.innerHTML = ' <p><span>Էլ-փոստ</span> <a href="mailto:gueram.hov@proton.me">gueram.hov@proton.me</a></p>';

    footerInfoHy.innerHTML = "Գեղամ Հովհաննիսյան © 2023 <br> Բոլոր իրավունքները պաշտպանված են";

})



