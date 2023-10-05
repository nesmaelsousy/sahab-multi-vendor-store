let iconi = document.querySelector('.iconup');
window.onscroll =(e)=>{
    // console.log(e);
    if(window.scrollY > 50){
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