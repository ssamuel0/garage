let bloc_vue = document.querySelector('.bloc-vue');
let bloc_view = document.getElementById('bloc_view');
let btn_view = document.querySelector('.btn_view');
let exitBtn = document.getElementById('exitBtn');
let sectionID = document.querySelector('.sectionID');

btn_view.addEventListener('click', function(e) {
    bloc_vue.style.display = 'flex';
});
exitBtn.addEventListener('click', function(e) {
    bloc_vue.style.display = 'flex';
    sectionID.style.visibility = 'hidden';
})