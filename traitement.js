function verif(){

    //Verification Nom
    var nom = document.getElementById('nom');
    var verifnom = document.getElementById('verifnom');
    document.getElementById("verifdate").innerHTML=''; 
    document.getElementById("verifnom").innerHTML='';   
 
        if(!nom.value.startsWith(nom.value[0].toUpperCase())){
            document.getElementById("verifnom").innerHTML='le nom doit commencer par une lettre majuscule'  
        }
        else if(/^[a-z]+$/i.test(nom.value) && nom.value.startsWith(nom.value[0].toUpperCase())){
            document.getElementById("verifnom").innerHTML=''; 
        }

    //verification date
    var date = document.getElementById('date');
    var verifdate = document.getElementById('verifdate');
    
        var dateActuel = new Date;
        var dateFondation = new Date(date.value);

        if((dateFondation.getTime()-dateActuel.getTime())<=0){
            document.getElementById("verifdate").innerHTML='La date doit etre superieur a la date daujoudhui';
        }

        if(document.getElementById("verifdate").innerHTML!='' || document.getElementById("verifnom").innerHTML!=''){
            return false;
        }
        else{
            return true;
        }

}



var bouton=document.getElementById('send');
bouton.addEventListener("click",(event)=>{
    if(verif()==false){
    event.preventDefault();
    //verif();
    }
});