var header=document.querySelector(".header"),dropdownsHeader=document.querySelectorAll(".header__dropdown"),itensMenu=document.querySelectorAll(".header__nav--ul .item-menu");function activeItem(e){itensMenu.forEach(function(e){e.classList.remove("active")}),e.classList.add("active");var t=e.id?e.id:null;dropdownsHeader.forEach(function(e){e.classList.add("d-none"),t&&document.querySelector("."+t).classList.remove("d-none")})}itensMenu.forEach(function(e){e.addEventListener("click",function(){activeItem(e)})}),window.addEventListener("scroll",function(){this.scrollY>=101?(window.outerWidth>=992&&(header.classList.remove("p-relative"),header.classList.add("fixed-top"),header.querySelector(".banner--super").classList.add("active","w-100")),window.outerWidth>=1320&&(header.querySelector(".header__nav--midias-sociais").classList.remove("d-none"),header.querySelector(".header__nav--assine").classList.remove("d-none"))):(header.classList.remove("fixed-top"),header.classList.add("p-relative"),header.querySelector(".banner--super").classList.remove("active","w-100"),header.querySelector(".header__nav--midias-sociais").classList.add("d-none"),header.querySelector(".header__nav--assine").classList.add("d-none"))}),document.querySelector(".header__btn-menu").addEventListener("click",function(){this.classList.toggle("active"),document.querySelector(".header__nav--menu").classList.toggle("d-none"),document.querySelector("main").classList.toggle("active")}),document.querySelector(".header__btn-busca").addEventListener("click",function(){document.querySelector(".header__nav--busca").classList.toggle("d-none")});