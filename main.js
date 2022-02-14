const displayedImage = document.querySelector('.displayed-img');
const thumbBar = document.querySelector('.thumb-bar');
const conteneurimages=document.querySelectorAll('.images');
const pictures=document.querySelectorAll('.image img');
const breadcrumb=document.querySelector('.breadcrumb');
const breadcrumb2=document.querySelector('.breadcrumb2');
const fullImg=document.querySelector('.full-img');
const numProduit=document.querySelectorAll('.image .numProduit');
const prix=document.querySelectorAll('.image .prix');
const details=document.querySelectorAll('.image .details');
const description=document.querySelector('.description');
const numProduitSelect=document.querySelector('.description .numProduit');
const prixSelect=document.querySelector('.description .prix');
const detailSelect=document.querySelector('.description .detail');

/* Declaring the array of image filenames */
// const images = ['husky.jpg', 'machine-ecrire.jpg', 'montagne.jpg', 'panne.jpg', 'pont.jpg','rive.jpg'];
    
/* Looping through images */
 for (const picture of pictures) {
    picture.addEventListener('click', displayimage);
    /*let z=pictures.indexOf(picture);
    description.setAttribute('style','display:block');

    for (i=0;i<details.length;i++){
        if (details[i]===z){
        numProduitSelect.textContent=numProduit[i];
        prixSelect.textContent=prix[i];
        detailSelect.textContent=details[i];}
    }*/
}

function displayimage(e){
    displayedImage.src = e.target.src;
    fullImg.setAttribute('style','display:block');
    thumbBar.setAttribute('style','display:flex');
    breadcrumb.setAttribute('style','display:none');
    breadcrumb2.setAttribute('style','display:block');

    /* Hidden the categories of products */
    for (const div_image of conteneurimages){
        div_image.setAttribute('style','display:none');
    }
    
}

