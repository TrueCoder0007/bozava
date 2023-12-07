let iconMenu = document.querySelector('.icon-menu');
let menuDashboard = document.querySelector('.menu-dashboard');
let panelDashboard = document.querySelector('.panel-dashboard');
/*************************************************************************/

let btnRapport = document.querySelector('.btn-rapport');
let btnDetaille = document.querySelector('.btn-dataille');
let menuRapport = document.querySelector('.subMenu-rapport');
let iconRapport = document.querySelector('.icon-rapport');
/**************************************************************************/
let btnPaiement = document.querySelector('.btn-paiement');
let menuPaiement = document.querySelector('.subMenu-paiement');
let iconPaiement = document.querySelector('.icon-paiement');
/**************************************************************************/
let btnGestion = document.querySelector('.btn-gestion');
let menuGestion = document.querySelector('.subMenu-gestion');
let iconGestion = document.querySelector('.icon-gestion');
/**************************************************************************/
let btnAgent = document.querySelector('.btn-agent');
let menuAgent = document.querySelector('.subMenu-agent');
let iconAgent = document.querySelector('.icon-agent');
/**************************************************************************/
let btnResultat = document.querySelector('.btn-resultat');
let menuResultat = document.querySelector('.subMenu-resultat');
let iconResultat = document.querySelector('.icon-resultat');
/**************************************************************************/
let btnComptePrepaye = document.querySelector('.btn-comptePrepaye');
let menuComptePrepaye = document.querySelector('.subMenu-comptePrepaye');
let iconComptePrepaye = document.querySelector('.icon-comptePrepaye');
/*************************************************************************/
let btnTableauBord = document.querySelector('.btn-tableauBord');
let btnUtilisateur = document.querySelector('.btn-utilisateur');
/*************************************************************************/
let btnTicket = document.querySelector('.btn-ticket');
/***************************************************************************PAGES FOR BUTTON***************************************************/
//let panelTableauBord = document.querySelector('.panel-tableauBord');
/***************************************************************************PAGES FOR BUTTON***************************************************/
let panelTicket = document.querySelector('.panel-ticket');
let panelTableauBord = document.querySelector('.panel-tableauBord');
let panelUtilisateur = document.querySelector('.panel-utilisateur');
let panelRapportFinancier = document.querySelector('.panel-RapportFinancier');
/***************************************************************************PAGES FOR BUTTON***************************************************/
let deleteBtn = document.querySelectorAll('.delete-btn');


function myFunction() {
    panelTableauBord.style="background-color:white;z-index:100";
    /*panelUtilisateur.style="display:none;";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";*/
}

iconMenu.onclick=function(){
    if(menuDashboard.style.width=="310px"){
        menuDashboard.style="width:60px;transition:0.5s";
        panelDashboard.style="width:90%;transition:0.5s;left:90px;background-color:white";
        for (let i = 0; i < deleteBtn.length; i++) {
            deleteBtn[i].style.display = "none";
          }
        
    }else if(menuDashboard.style.width="60px"){
        menuDashboard.style="width:310px;transition:0.5s";
        panelDashboard.style="width:80%;left:320px;background-color:white";
        /*menuDashboard.style="width:5vw";
        panelTableauBord.style="width:85vw";*/
        for (let i = 0; i < deleteBtn.length; i++) {
            deleteBtn[i].style.display = "block";
          }
    }
}

btnRapport.onclick=function(){
    if (btnRapport.onclick=function(){
        menuRapport.style="display:block;transition:1s";
        iconRapport.style="transform:rotate(90deg)";
        menuPaiement.style="display:none";
        menuGestion.style="display:none";
        menuAgent.style="display:none";
        menuResultat.style="display:none";
        menuComptePrepaye.style="display:none";
        iconPaiement.style="transform:rotate(0deg)";
        iconGestion.style="transform:rotate(0deg)";
        iconAgent.style="transform:rotate(0deg)";
        iconResultat.style="transform:rotate(0deg)";
        iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:block";
    }){}else{
        menuRapport.style="display:none";
    }
}

/*************************************************************************/

btnPaiement.onclick=function(){
    if (btnPaiement.onclick=function(){
        menuPaiement.style="display:block;transition:5s";
        iconPaiement.style="transform:rotate(90deg)";
        menuRapport.style="display:none";
        menuGestion.style="display:none";
        menuAgent.style="display:none";
        menuResultat.style="display:none";
        menuComptePrepaye.style="display:none";
        iconRapport.style="transform:rotate(0deg)";
        iconGestion.style="transform:rotate(0deg)";
        iconAgent.style="transform:rotate(0deg)";
        iconResultat.style="transform:rotate(0deg)";
        iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:none";
    }){}else{
        menuPaiement.style="display:none";
    }
}

/*************************************************************************/

btnGestion.onclick=function(){
    if (btnGestion.onclick=function(){
        menuGestion.style="display:block;transition:5s";
        iconGestion.style="transform:rotate(90deg)";
        menuRapport.style="display:none";
        menuPaiement.style="display:none";
        menuAgent.style="display:none";
        menuResultat.style="display:none";
        menuComptePrepaye.style="display:none";
        iconRapport.style="transform:rotate(0deg)";
        iconPaiement.style="transform:rotate(0deg)";
        //iconGestion.style="transform:rotate(0deg)";
        iconAgent.style="transform:rotate(0deg)";
        iconResultat.style="transform:rotate(0deg)";
        iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:none";
    }){}else{
        menuGestion.style="display:none";
    }
}

/*************************************************************************/

btnAgent.onclick=function(){
    if (btnAgent.onclick=function(){
        menuAgent.style="display:block;transition:5s";
        iconAgent.style="transform:rotate(90deg)";
        menuRapport.style="display:none";
        menuPaiement.style="display:none";
        menuGestion.style="display:none";
        menuResultat.style="display:none";
        menuComptePrepaye.style="display:none";
        iconRapport.style="transform:rotate(0deg)";
        iconPaiement.style="transform:rotate(0deg)";
        iconGestion.style="transform:rotate(0deg)";
        //iconAgent.style="transform:rotate(0deg)";
        iconResultat.style="transform:rotate(0deg)";
        iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:none";
    }){}else{
        menuGestion.style="display:none";
    }
}

/*************************************************************************/

btnResultat.onclick=function(){
    if (btnResultat.onclick=function(){
        menuResultat.style="display:block;transition:5s";
        iconResultat.style="transform:rotate(90deg)";
        menuRapport.style="display:none";
        menuPaiement.style="display:none";
        menuGestion.style="display:none";
        menuAgent.style="display:none";
        menuComptePrepaye.style="display:none";
        iconRapport.style="transform:rotate(0deg)";
        iconPaiement.style="transform:rotate(0deg)";
        iconGestion.style="transform:rotate(0deg)";
        iconAgent.style="transform:rotate(0deg)";
        //iconResultat.style="transform:rotate(0deg)";
        iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:none";
    }){}else{
        menuGestion.style="display:none";
    }
}

/*************************************************************************/

btnComptePrepaye.onclick=function(){
    if (btnComptePrepaye.onclick=function(){
        menuComptePrepaye.style="display:block;transition:5s";
        iconComptePrepaye.style="transform:rotate(90deg)";
        menuRapport.style="display:none";
        menuPaiement.style="display:none";
        menuGestion.style="display:none";
        menuAgent.style="display:none";
        menuResultat.style="display:none";
        iconRapport.style="transform:rotate(0deg)";
        iconPaiement.style="transform:rotate(0deg)";
        iconGestion.style="transform:rotate(0deg)";
        iconAgent.style="transform:rotate(0deg)";
        iconResultat.style="transform:rotate(0deg)";
        //iconComptePrepaye.style="transform:rotate(0deg)";
        panelTableauBord.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelRapportFinancier.style="display:none";
    }){}else{
        menuGestion.style="display:none";
    }
}

/**********************************************************BTN-TABLEAU_DE_BORD********************************/

btnTableauBord.onclick=function(){
    //panelTableauBord.style="z-index:100";
    panelTableauBord.style="display:block";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    menuRapport.style="display:none;transition:1s";
    menuPaiement.style="display:none;transition:5s";
    menuGestion.style="display:none;transition:5s";
    menuAgent.style="display:none;transition:5s";
    menuResultat.style="display:none;transition:5s";
    menuComptePrepaye.style="display:none;transition:5s";
    panelRapportFinancier.style="display:none";
}

btnTicket.onclick=function(){
    //panelTicket.style="z-index:100";
    panelTicket.style="z-index:100";
    panelUtilisateur.style="z-index:10";
    /*panelTableauBord.style="display:none";
    panelUtilisateur.style="display:none";
    menuRapport.style="display:none;transition:1s";
    menuPaiement.style="display:none;transition:5s";
    menuGestion.style="display:none;transition:5s";
    menuAgent.style="display:none;transition:5s";
    menuResultat.style="display:none;transition:5s";
    menuComptePrepaye.style="display:none;transition:5s";
    panelRapportFinancier.style="display:none";*/
   
}

btnUtilisateur.onclick=function(){
    panelUtilisateur.style="z-index:110";
    /*panelTicket.style="display:none";
    panelTableauBord.style="display:none";
    menuRapport.style="display:none;transition:1s";
    menuPaiement.style="display:none;transition:5s";
    menuGestion.style="display:none;transition:5s";
    menuAgent.style="display:none;transition:5s";
    menuResultat.style="display:none;transition:5s";
    menuComptePrepaye.style="display:none;transition:5s";
    panelRapportFinancier.style="display:none";*/
}

/***************************************************************BTN-RAPPORT****************************************/
btnDetaille.onclick=function(){
    alert('oi')
}