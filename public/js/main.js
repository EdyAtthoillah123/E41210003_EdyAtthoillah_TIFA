const hambur = document.querySelector('.hamburger');

hambur.addEventListener('click', function(){
    this.classList.toggle('aktif');
});