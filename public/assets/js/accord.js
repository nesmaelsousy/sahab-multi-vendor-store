let phone = document.querySelector('input[type=number]');
let text =document.querySelector('input [type=text]');
let form = document.querySelector('form');
let iconi = document.querySelector('.iconup');
let boxphone = document.querySelector('.boxphone');
let boxname = document.querySelector('.boxname');
let boxboth = document.querySelector('.boxboth');
let close = document.querySelector('.close');
close.onclick = () =>{
    boxform.style.top ='-10rem';
}
// form.onsubmit = (e) =>{
//     if(phone.value == ''){
//         boxform.style.top = '3rem';
//     }else if (text.value == ''){
//         boxname.style.top ='3rem';
//     } else if(text.value =='' && phone.value ==''){
//         boxboth.style.top ='3rem';
//     }
// }
// console.log(phone,text,form);
// console.log(phone.value);
// let send = document.querySelector('#send');
// send.onclick =()=> {
//  console.log(phone.value);
// }



// form.onsubmit = (e) =>{
//     if(phone.value == ''){
//         boxform.style.top ='3rem';
//         e.preventDefault();

//     }
// }


// form.onsubmit=(e)=>{
//     // e.preventDefult();
//     alert ('تأكد من ');
// }
// console.log(iconi);
window.onscroll =(e)=>{
    // console.log(e);
    if(window.scrollY > 200){
        iconi.style.bottom = '20px';
    }else{
        iconi.style.bottom= '-100px';
    }
   
}
iconi.onclick =()=> {
    window.scrollTo({
        top:0,
        behavior:'smooth'

    });
}
