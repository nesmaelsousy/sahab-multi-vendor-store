let iconi_prodect = document.querySelector('.iconup_pageprodect');
let eye = document.querySelector('.fa-eye');
let boxeye = document.querySelector('.boxeye');
let close = document.querySelector('.close');
eye.onclick =()=>{
    boxeye.style.top ='10rem';
}

close.onclick = () =>{
    boxeye.style.top ='-10rem';
}
window.onscroll =(e)=>{
    // console.log(e);
    if(window.scrollY > 100){
        iconi_prodect.style.bottom = '20px';
    }else{
        iconi_prodect.style.bottom= '-100px';
    }}
iconi_prodect.onclick =()=> {
    window.scrollTo({
        top:0,
        behavior:'smooth'

    });
}


