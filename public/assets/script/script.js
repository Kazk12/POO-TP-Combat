const attackButton = document.getElementById('lancer');
const continuerForm = document.getElementById('continuer-form');
const continuerButton = document.getElementById('continuer');
const herosPvHTML = document.getElementById('hero-pv');
const monstrePvHTML = document.getElementById('monster-pv');
const derouleCombat = document.querySelector('div.mt-8 p');

let herosPv = parseInt(herosPvHTML.textContent.split(' : ')[1]);
let monstrePv = parseInt(monstrePvHTML.textContent.split(' : ')[1]);
let statAttaqueHeros = parseInt(document.getElementById('hero-attaque').textContent.split(' : ')[1]);
let statAttaqueMonstre = parseInt(document.getElementById('monster-attaque').textContent.split(' : ')[1]);





let pvActuelHeros = herosPv;
let pvDuMonstre = monstrePv;

function faireApparaitreContinuer() {
    console.log('Affichage du bouton Continuer');
    continuerForm.style.display = 'block';
}

function herosAttaque() {
    pvDuMonstre -= statAttaqueHeros;
    if (pvDuMonstre < 0) {
        attackButton.disabled = true;
         pvDuMonstre = 0;
        faireApparaitreContinuer();

    }
    monstrePvHTML.textContent = `PV : ${pvDuMonstre}`;
    derouleCombat.innerHTML += `<p class="text-blue-500">Le héros attaque ! PV du monstre : ${pvDuMonstre}</p>`;
}

function monstreAttaque() {
    if (pvDuMonstre > 0) {
        pvActuelHeros -= statAttaqueMonstre;
        if (pvActuelHeros < 0) pvActuelHeros = 0;
        herosPvHTML.textContent = `PV : ${pvActuelHeros}`;
        derouleCombat.innerHTML += `<p class="text-red-500">Le monstre attaque ! PV du héros : ${pvActuelHeros}</p>`;
    } else {
        derouleCombat.innerHTML += `<p class="text-green-500">Le monstre est vaincu ! Le héros gagne !</p>`;

    }
}

function checkHerosKO() {
    if (pvActuelHeros <= 0) {
        derouleCombat.innerHTML += `<p class="text-red-500">Le héros est vaincu ! Le monstre gagne !</p>`;
        attackButton.disabled = true;
        faireApparaitreContinuer();
    }
}

attackButton.addEventListener('click', () => {
    herosAttaque();

    if (pvDuMonstre > 0) {
        monstreAttaque();
    } else {
        derouleCombat.innerHTML += `<p class="text-green-500">Le héros a vaincu le monstre !</p>`;
    }

    checkHerosKO();
});





// let continuer = document.getElementById('continuer');

// continuer.addEventListener('click', recupererHpHeros);

// // Fonction pour récupérer les HP du héros
// function recupererHpHeros() {
//     console.log(hpHeros);
//     fetch('./process/setHpHeros.php')
//         .then(response => response.json())  // Convertir la réponse en JSON
//         .then(data => {
            
//             let hpHeros = pvActuelHeros;
          
//             console.log('HP du héros :', hpHeros);
//             pvActuelHeros = hpHeros; 



//         })
//         .catch(error => {
//             console.error('Erreur lors de la récupération des HP du héros:', error);
//         });
//         return hpHeros;

        

//     }



    










