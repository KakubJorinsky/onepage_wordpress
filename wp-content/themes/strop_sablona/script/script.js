const hamburger = document.querySelector(".wrapper-hamburger");
const nav = document.querySelector("nav");
 
let state = false;
hamburger.addEventListener("click", () => {
    if (state == true) {
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false; 
    } 
    
    else {
        hamburger.classList.add("is-active"); 
        nav.classList.add("is-open");
        state = true;
    }
})

function ControlWidth() {
    const sirka = window.innerWidth; 
    if (sirka > 768)
    {
        hamburger.classList.remove("is-active"); 
        nav.classList.remove("is-open");
        state = false; 
    }

}
window.addEventListener('resize', ControlWidth);

// Smooth scroll na kotvy
document.addEventListener('click', (e) => {
  const a = e.target.closest('a[href^="#"]');
  if (!a) return;
  const id = a.getAttribute('href').slice(1);
  const el = document.getElementById(id);
  if (!el) return;
  e.preventDefault();
  const y = el.getBoundingClientRect().top + window.pageYOffset - 80; // offset pod header
  window.scrollTo({ top: y, behavior: 'smooth' });
});

// Aktivní položka menu při scrollu
const sections = [...document.querySelectorAll('.section[id]')];
const menuLinks = [...document.querySelectorAll('.main-nav a[href^="#"]')];

const onScroll = () => {
  const pos = window.scrollY + 120;
  let active = null;
  for (const s of sections) {
    if (s.offsetTop <= pos) active = s.id;
  }
  menuLinks.forEach(a => {
    a.classList.toggle('is-active', a.getAttribute('href').slice(1) === active);
  });
};
document.addEventListener('scroll', onScroll);
window.addEventListener('load', onScroll);
