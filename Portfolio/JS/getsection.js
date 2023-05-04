// GET EACH SECTION IN THE VIEWPORT

const sections = document.querySelectorAll('section');
const links = document.querySelectorAll('#maincard a');

links.forEach((link, index) => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        sections[index].scrollIntoView({ behavior: 'smooth' });
    });
});