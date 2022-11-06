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



