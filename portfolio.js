function reveal() {
    const sections = document.querySelectorAll("section");
    const reveals = document.querySelectorAll(".reveal");
    const navLi = document.querySelectorAll("nav .container ul li");
    for (var i = 0; i <= sections.length; i++) {
        var pageyoffset = window.scrollY;
        var windowHeight = window.innerHeight;

        const sectionTop = sections[i].offsetTop;
        var sectioncontactHeight = sections[i].offsetHeight;


        if ((pageyoffset > sectionTop - 50 && pageyoffset <= sectionTop - 50 + sectioncontactHeight)) {
            navLi[i].classList.add("active");
            reveals[i].classList.add("active");


        } else {
            navLi[i].classList.remove("active");
        }



    };

};

function revealfinal() {

    const revealsfinal = document.querySelectorAll(".revealfinal");
    var pageyoffset = window.scrollY;
    for (var i = 0; i <= 1; i++) {
        if ((pageyoffset > 1165)) {

            revealsfinal[i].classList.add('active');



        }


    }


};







window.addEventListener("scroll", reveal);
window.addEventListener("scroll", revealfinal);
window.addEventListener("load", reveal5);





/*https://alvarotrigo.com/blog/css-animations-scroll/*/