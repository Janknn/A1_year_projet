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