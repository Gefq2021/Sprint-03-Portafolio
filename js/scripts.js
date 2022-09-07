// Menu Mobile
((d) => {
    const menu = d.querySelector(".icon-menu"),
          verMenu = d.querySelector('.header__nav');
        //   itemsMenu = d.querySelectorAll(".header__nav-link");
    // console.log(itemsMenu); 

    menu.addEventListener("click", (e) => {
        verMenu.classList.toggle("nav-activo");
    });

    d.addEventListener("click", (e) => {
        if (!e.target.matches(".header__nav a")) return false;
        verMenu.classList.toggle("nav-activo");
    });

}) (document);

