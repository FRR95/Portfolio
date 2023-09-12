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



    };

};

function revealfinal() {
    const sectionfinal = document.querySelectorAll("sectionfinal");
    const reveals = document.querySelectorAll(".revealfinal");
    const navLifinal = document.querySelectorAll(".contact ");




    for (var i = 0; i <= sectionfinal.length; i++) {
        var pageyoffset = window.scrollY;
        console.log(pageyoffset);

        if ((pageyoffset >= 1019)) {

            reveals[i].classList.add("active");
            navLifinal[i].classList.add("active");

        } else {
            navLifinal[i].classList.remove("active");
        }
    }

}


















window.addEventListener("scroll", reveal);
window.addEventListener("scroll", revealfinal);






/*https://alvarotrigo.com/blog/css-animations-scroll/*/