/*BURGER*/

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n. addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

/*POPUP*/
if(document.querySelector("#show-login")!= null) {
    document.querySelector("#show-login").addEventListener("click", function() {
        document.querySelector(".popup").classList.add("activation");
    });
    
    document.getElementById('save_form').onclick = function() { 
        if(typeof localStorage!='undefined' && JSON) {
        var arguments = {
            name:document.getElementById('name').value,
            email:document.getElementById('email').value,
        };
        localStorage.setItem('arg',JSON.stringify(arguments));
        } else alert("localStorage non-supporté");
        };
    
        document.getElementById('show-login').onclick = function() { 
        if(typeof localStorage!='undefined' && JSON) {
        var arguments = JSON.parse(localStorage.getItem('arg'));
        document.getElementById('name').value = arguments['name'];
        document.getElementById('email').value = arguments['email'];
        console.log(arguments[name]);
        } else alert("localStorage ne marche pas");
        }; 
    
    
    
    
    document.querySelector(".popup .close-btn").addEventListener("click", function() {
        document.querySelector(".popup").classList.remove("activation");
    });
}


/*BOOST*/
if(document.querySelector('.checkbox')!= null) {
    const check = document.querySelector('.checkbox');
    const check2 = document.querySelector('.checkbox1');

    check.addEventListener('click', abonnement);
    check2.addEventListener('click', abonnement);
    function abonnement(){
    if(check.checked && check2.checked){
        document.querySelector('.subscription_price').innerHTML = "25€"
    }else if(check.checked && !check2.checked){
        document.querySelector('.subscription_price').innerHTML = "17€"
    }else if(!check.checked && check2.checked){
        document.querySelector('.subscription_price').innerHTML = "17€"
    }else{
        document.querySelector('.subscription_price').innerHTML = "10€"
    }
    } 
}


/*PROGRESSION BAR*/

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

/*TRI ARTCILES*/
filterObjects("all");

function filterObjects(c){
    var x, i;
    x = document.getElementsByClassName("article");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
        if(x[i].className.indexOf(c) > -1) addClass(x[i], "show")
    }
}

function addClass (element, name){
    var i, arr1, arr2;
    arr1 = element.className.split(" ")
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i]
        }
    }
}

function removeClass (element, name){
    var i, arr1, arr2;
    arr1 = element.className.split(" ")
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1)
        }
    }
    element.className = arr1.join(" ")
}