/**
 *
 *
Viene fornito un file js in cui è definito un array di oggetti che rappresentano i membri del team. Ogni membro ha le informazioni necessarie per stampare le relative informazioni: Nome, Ruolo e Foto.

MILESTONE 1:
Stampare su console le informazioni di nome, ruolo e la stringa della foto

MILESTONE 2:
Stampare le stesse informazioni su DOM sottoforma di stringhe

BONUS 1:
Trasformare la stringa foto in una immagine effettiva

BONUS 2:
Organizzare i singoli membri in card/schede in modo creativo

A ) facciamo vedere in console il nome il ruolo e il link della foto
B ) vedi punto A, stessa cosa ma sul dom magari dentro un div, o magari dentro un p, o tre div o tre p
C ) bonus => facciamo vedere l'immagine come un'immagine effettiva
D ) bonusII => creiamo in maniera creativa le schede (se volete usare come riferimento l'immagine, fate pure)

 *
SUPERBONUS : Aggiungi in fondo all'esercizio un form con nome, ruolo e un link all'immagine che con un bottone consentano di aggiungere un team member per volta in più a quelli già presenti.

 */

//  ! Milestone 1

// Array di oggetti
const team = [
    {
        name: 'Wayne Barnett',
        role: 'Founder & CEO',
        image: 'wayne-barnett-founder-ceo.jpg',
    },
    {
        name: 'Angela Caroll',
        role: 'Chief Editor',
        image: 'angela-caroll-chief-editor.jpg',
    },
    {
        name: 'Walter Gordon',
        role: 'Office Manager',
        image: 'walter-gordon-office-manager.jpg',
    },
    {
        name: 'Angela Lopez',
        role: 'Social Media Manager',
        image: 'angela-lopez-social-media-manager.jpg',
    },
    {
        name: 'Scott Estrada',
        role: 'Developer',
        image: 'scott-estrada-developer.jpg',
    },
    {
        name: 'Barbara Ramos',
        role: 'Graphic Designer',
        image: 'barbara-ramos-graphic-designer.jpg',
    },
];


for (let i = 0 ; i< team.length ; i++){
    // const memberObject = team[i];
    // addTeamMember('output', memberObject.name, memberObject.role, memberObject.imageUrl);
    addTeamMember('output', team[i].name, team[i].role, "img/"+team[i].image);
}



// quando aggiungo un bottone con una funzione, inizieri dal collegare lo stato delle informazioni da passare con un console.log presente all'interno dell'eventListener del suddetto bottone

document.getElementById('add-team-member').addEventListener('click', function(){
    const inputElements = document.querySelectorAll('#new-member-input .input-group > input');

    const teamMemberInfo = [];
    for ( let i = 0 ; i < inputElements.length ; i++) {
        teamMemberInfo.push(inputElements[i].value);
        inputElements[i].value = "";
    }
    console.warn(teamMemberInfo);
    addTeamMember('output', teamMemberInfo[0], teamMemberInfo[1], teamMemberInfo[2] );
});

function addTeamMember(parentId, name, role, imageUrl){
       // console.log(team[i]);
    // § l'unico caso in cui possiamo usare un for (x in y) è quando y è un OGGETTO LETTERALE
    // for (chiave in team[i]){
    //     console.log(chiave, ":", team[i][chiave]);
    // }

    if (parentId != '' && name != '' && role!= '' && imageUrl != '')

    document.getElementById(parentId).innerHTML += `
    <div class="card team-member mb-5 p-3 text-center">
        <img src="${imageUrl}" class="card-img-top" alt="${name}">
        <div class="card-body">
            <h3 class="card-title">${name}</h3>
            <pre class="card-text fs-5">${role}</pre>
        </div>
    </div>
    `;
}
