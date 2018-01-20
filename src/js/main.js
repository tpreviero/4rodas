var header = document.querySelector('.header');
var dropdownsHeader = document.querySelectorAll('.header__dropdown');
var itensMenu = document.querySelectorAll('.header__nav--ul .item-menu');

itensMenu.forEach(function (element) {
    element.addEventListener('click', function () {
        activeItem(element);
    });
});

function activeItem(el) {
    itensMenu.forEach(function (element) {
        element.classList.remove('active');
    });
    el.classList.add('active');
    var elId = el.id ? el.id : null;
    dropdownsHeader.forEach(function (el) {
        el.classList.add('d-none');
        if (elId) {
            document.querySelector('.' + elId).classList.remove('d-none');
        }
    });
}

window.addEventListener('scroll', function () {
    if (this.scrollY >= 101) {
        if(window.outerWidth >= 992) {
            header.classList.remove('p-relative');
            header.classList.add('fixed-top');
            header.querySelector('.banner--super').classList.add('active', 'w-100');
        }
        if (window.outerWidth >= 1320) {
            header.querySelector('.header__nav--midias-sociais').classList.remove('d-none');
            header.querySelector('.header__nav--assine').classList.remove('d-none');
        }
    } else {
        header.classList.remove('fixed-top');
        header.classList.add('p-relative');
        header.querySelector('.banner--super').classList.remove('active', 'w-100');
        header.querySelector('.header__nav--midias-sociais').classList.add('d-none');
        header.querySelector('.header__nav--assine').classList.add('d-none');
    }
});


document.querySelector('.header__btn-menu').addEventListener('click', function(){
    this.classList.toggle('active');
    document.querySelector('.header__nav--menu').classList.toggle('d-none');
    document.querySelector('main').classList.toggle('active');
});

document.querySelector('.header__btn-busca').addEventListener('click', function(){
    document.querySelector('.header__nav--busca').classList.toggle('d-none');
});
