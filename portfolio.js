function reveal() {
    const sections = document.querySelectorAll("section");
    const reveals = document.querySelectorAll(".reveal");
    const navLi = document.querySelectorAll("nav .container ul li ");
    for (var i = 0; i <= sections.length; i++) {
        var pageyoffset = window.scrollY;
        const sectionTop = sections[i].offsetTop;
        const sectioncontactHeight = sections[i].offsetHeight;


        if ((pageyoffset > sectionTop - 85 && pageyoffset <= sectionTop - 85 + sectioncontactHeight)) {
            navLi[i].classList.add("active");
            reveals[i].classList.add("active");


        } else {
            navLi[i].classList.remove("active");
        }

        if ((pageyoffset >= 1373)) {
            navLi[2].classList.add("active");
            reveals[2].classList.add("active");
        } else {
            navLi[2].classList.remove("active");
        }


    };

};

function revealnav() {
    const nav = document.querySelectorAll(".nav_radius");
    var pageyoffset = window.scrollY;

    for (var i = 0; i <= nav.length; i++) {
        if (pageyoffset > 0) {
            nav[i].classList.add("active");

        } else {
            nav[i].classList.remove("active");
        }

    };
}


window.addEventListener("scroll", reveal);
window.addEventListener("scroll", revealnav);







/*https://alvarotrigo.com/blog/css-animations-scroll/*/