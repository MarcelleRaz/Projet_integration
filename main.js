const displayedImage = document.querySelector('.displayed-img');
const thumbBar = document.querySelector('.thumb-bar');
let conteneurimages=document.querySelector('.conteneurImage');
const pictures=document.querySelectorAll('.image img');
const breadcrumb=document.querySelector('.breadcrumb');
const breadcrumb2=document.querySelector('.breadcrumb2');
const numProduit=document.querySelectorAll('.image .numProduit');
const prix=document.querySelectorAll('.image .prix');
const details=document.querySelectorAll('.details');
const produit=document.getElementById('produit');
const numProduitSelect=document.querySelector('.description .numProduit');
const prixSelect=document.querySelector('.description .prix');
const detailSelect=document.querySelector('.description .detail');
const imagecarroussel = document.querySelectorAll('.thumb-bar img');
let z=0;

/* Looping through images */
pictures.forEach(picture=>{picture.addEventListener('click',displayimage);})
imagecarroussel.forEach(image=>{image.addEventListener('click',displayimage);})
function displayimage(e){
    displayedImage.src = e.target.src;    
    displayedImage.alt = e.target.alt; 
    for (i=0;i<pictures.length;i++){
        if(pictures[i].alt == displayedImage.alt){
            z=i;
        }
    }
    numProduitSelect.innerHTML=numProduit[z].textContent;
    prixSelect.innerHTML=prix[z].textContent;
    detailSelect.innerHTML=details[z].textContent;
    produit.setAttribute('style','display:grid');
    thumbBar.setAttribute('style','display:block');
    breadcrumb.setAttribute('style','display:none');
    breadcrumb2.setAttribute('style','display:block');
    // Hidden the categories of products 
    conteneurimages.setAttribute('style','display:none');
}





