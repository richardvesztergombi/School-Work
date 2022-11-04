function show(obj){
    console.log(obj.value);
    document.getElementById('pontErtek').innerHTML=obj.value;
}

let pers={}


function kuldes(){
    let hibak=[]
    document.querySelector('.msg').innerHTML=""
    console.log("adatok ellenőrzése");
    let nev= document.getElementById('nev').value;
    console.log(nev);
    if(nev.length>2){
        pers.nev=nev
    }else{
        hibak.push("A név kitöltése kötelező!")
    }

    let szev=document.getElementById('szev').value
    if(szev>1930){
        pers.szev=szev
    }else{
        hibak.push("Helytelen évszám!")
    }

    if(hibak.length==0){
        document.querySelector('.msg').innerHTML="Az adatok ellenőrzése sikeres"
    }else{
        console.log(hibak);
    }
}

function errors(arr){
    let strUl="<ul>"
    for(let txt of arr){
        strUl += `<li>${txt}</li>`
    }
    strUl += "</ul>"
    document.querySelector('.msg').innerHTML=strUl
}