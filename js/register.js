

const home=document.getElementById("home");
const profile=document.getElementById("prof");
const edbtn=document.getElementById("edbtn");
const agedit=document.getElementById("agedit");
const logout=document.getElementById("logout");

const homepg=document.querySelector("#homepg");
const edpro=document.querySelector("#insertData");
const dispro=document.querySelector("#editDataUser");

home.addEventListener('click',event =>{
    homepg.style.display='block';
    edpro.style.display='none';
    dispro.style.display='none';
    
})

profile.addEventListener('click',event =>{
    homepg.style.display='none';
    edpro.style.display='block';
    dispro.style.display='none';
    
})

edbtn.addEventListener('click',event =>{
    homepg.style.display='none';
    edpro.style.display='none';
    const fname = document.querySelector('#fname').value 
    const lname = document.querySelector('#lname').value 
    const title = document.querySelector('#title').value 
    const emailId = document.querySelector('#emailId').value 
    const bio = document.querySelector('#bio').value 
    const username = document.querySelector("#username").value
    const mobileno = document.querySelector("#mobileno").value

    document.getElementById("name").innerHTML = fname;
    document.getElementById("laname").innerHTML = lname;
    document.getElementById("tit").innerHTML = title;
    document.getElementById("emaild").innerHTML = emailId;
    document.getElementById("biod").innerHTML = bio;
    document.getElementById("usernamed").innerHTML = username;
    document.getElementById("mobilenod").innerHTML = mobileno;


    dispro.style.display='block';
    
})

agedit.addEventListener('click',event =>{
    homepg.style.display='none';
    edpro.style.display='block';
    dispro.style.display='none';
    
})

logout.addEventListener('click',event =>{
    window.location.href = 'index.html';
   
})