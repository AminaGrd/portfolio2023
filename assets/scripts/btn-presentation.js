const click1 = document.getElementById('clickCommunication');
const click2 = document.getElementById('clickWebDesign');
const textWebDesign = document.getElementsByClassName('content__div--webdesign--p')[0];
const textCommunication = document.getElementsByClassName('content__div--communication--p')[0];
const logo = document.getElementsByClassName('content__div--webdesign--logo')[0];
const partCom = document.getElementById('partCommunication');
const partWD = document.getElementById('partWebDesign');

click1.addEventListener('click', function() {
    showCommunication();
})

click2.addEventListener('click', function() {
    showWebDesign();
})

function showCommunication() {
    textWebDesign.style.display = "none";
    logo.style.display = "none";
    textCommunication.style.display = "block";
    partCom.className = "content__div--communication--h2 actived";
    partWD.className = "content__div--webdesign--h2 disactived";
    click1.className = "content__div--communication--text actived2";
    click2.className = "content__div--webdesign--text disactived2";
}

function showWebDesign() {
    textWebDesign.style.display = "block";
    logo.style.display = "flex";
    textCommunication.style.display = "none";
    partCom.className = "content__div--communication--h2 disactived";
    partWD.className = "content__div--webdesign--h2 actived";
    click1.className = "content__div--communication--text disactived2";
    click2.className = "content__div--webdesign--text actived2";
}