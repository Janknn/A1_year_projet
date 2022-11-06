const progbar = document.querySelector("#progbar");
const element = document.documentElement;
const body = document.body;
let scrolltop = 'scrollTop';
let scrollheight = 'scrollHeight';
let progression = 0;

document.addEventListener("scroll",function(e){
    if(progression>1){
        progbar.style.opacity = "100%"
    }else{
        progbar.style.opacity = "0"
    }
    console.log(progbar,progression);
    progression = (element[scrolltop] || body[scrolltop]) / ((element[scrollheight] || body[scrollheight]) - element.clientHeight) * 100;
    progbar.style.width = `${progression}%`
});