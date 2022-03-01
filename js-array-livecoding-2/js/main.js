const students = ['Giovanni', 'Lorenza', 'Antonino', 'Arianna'];

// // console.log(students);

// // § modi classici "old-style"
// const firstName = students[0];
// console.log(firstName);

// const secondName = students.at(0);
// console.log(secondName);

// // ? metodo destrutturazione
// let [firstStudent, secondStudent, thirdStudent, fourthStudent] = students;
// // # che consiste in:
// // # const firstStudent = students[0]
// // # const secondStudent = students[1]
// // # const thirdStudent = students[2]
// // # const fourthStudent = students[3]

// // console.log(firstStudent, secondStudent, thirdStudent, fourthStudent);

// // * Utilizzo dell'operatore spread:

// // § old style, usiamo concat()
// const arrayOne = ["Cecilie", "Lone"];
// const arrayTwo = ["Emil", "Tobias", "Linus"];
// const mergedArrays = arrayOne.concat(arrayTwo);

// console.log(arrayOne);
// console.log(arrayTwo);
// console.log(mergedArrays);

// // | Tentativo di base di inserimento di un array in un altro

// // ! risultato = array in un alro array != da concatenare due array (ovvero i suoi elementi)
// const testArray = [ arrayOne , arrayTwo ];
// console.log(testArray);

// // ? funzionamento dell'operatore spread
// // # per ottenere una operazione di concatenazione o "unione ordinata" di due array
// const mergedSpreadArrays = [...arrayTwo, ...arrayOne];
// console.log(mergedSpreadArrays);
// console.log(...mergedSpreadArrays);

// // # per ottenere invece una rapida copia, ovvero "clonare" un array
// const clonedMergedArray = [...mergedSpreadArrays];
// console.log(clonedMergedArray);

/**
 * Creiamo un array con dieci numeri randomici
 * calcoliamo la somma di tutti gli elementi
 * e calcoliamo anche il valore medio
 */

const numbers = [];
let sum = 0;

for (let i = 0 ; i < 30 ; i++){
    // const randomInt ;
    numbers.push(Math.floor(Math.random() * 9999 ) );
    sum += numbers;
}

console.log(numbers);
console.log(sum);
console.log(sum / numbers.length);

/**
 *  Generatore di “nomi cognomi” casuali: prendendo una lista di nomi e una lista di cognomi, Gatsby vuole generare una falsa lista di 10 invitati.
 *
 * Ogni nome e cognome devono avere la prima lettera maiuscola
 * mini-bonus :  possiamo anche avere doppi nomi casuali
 *
 */

const nomi = ["reckless","rectangular","ready","real","realistic","reasonable","red","reflecting","regal","regular","reliable","relieved","remarkable","remorseful","remote","repentant","required","respectful","responsible","repulsive","revolving","rewarding","rich","rigid","right","ringed","ripe","roasted","robust","rosy","rotating","rotten","rough","round","rowdy","royal","rubbery","spectavid","voluminous","wan","warlike","warm","warmhearted","warped","wary","wasteful","watchful","waterlogged","watery","wavy","wealthy","weak","weary","webbed","wee","weekly","weepy","weighty","weird","welcome","well-documented","well-groomed","well-informed","well-lit","well-made","well-off","well-to-do","well-worn","wet","which","whimsical","whirlwind","whispered","white","whole","whopping","wicked","wide","wide-eyed","wiggly","wild","willing","wilted","winding","windy","winged","wiry","wise","witty","wobbly","woeful","wonderful","wooden","woozy","wordy","worldly","worn","worried","worrisome","worse","worst","worthless","worthwhile","worthy","wrathful","wretched","writhing","wrong","wry","yawning","yearly","yellow","yellowish","young","youthful","yummy","zany","zealous","zesty","zigzag","rocky"];

const cognomi = ["people","history","way","art","world","information","map","family","government","health","system","computer","meat","year","thanks","music","person","reading","method","data","food","understanding","theory","law","bird","literature","problem","software","control","knowledge","power","ability","economics","love","internet","television","science","library","nature","fact","product","idea","temperature","investment","area","society","activity","story","magazine","newspaper","relationship","teaching","cell","dealer","debate","finding","lake","member","message","phone","scene","appearance","association","concept","customer","death","discussion","housing","inflation","insurance","mood","woman","advice","blood","effort","expression","importance","opinion","payment","reality","responsibility","situation","skill","statement","wealth","application","city","county","depth"];

const guests = [];

// ! cosa mi serve che si ripeta e cosa invece devo mantenere anche fuori dal ciclo?
for (let i = 0 ; i < 10 ; i++){
    // suddividamo in elementi atomici
    const randomNameIndex = Math.floor(Math.random() * nomi.length);
    const randomLastNameIndex = Math.floor(Math.random() * cognomi.length);

    // ? guida a come scriversi un custom capitalize()
    // § recupero la stringa che mi serve nomi[ranomNameIndex]
    // # prendo il primo carattere di questa stringa e lo rendo maiuscolo toUpperCase
    // | infine aggiungo il resto della stringa (del nome) esattamente com'era prima
    // publication[0].toUpperCase() + publication.substring(1);
    const currentName = nomi.at(randomNameIndex).charAt(0).toUpperCase()
                        + nomi[randomNameIndex].substring(1);

    const currentLastName = cognomi[randomLastNameIndex].charAt(0).toUpperCase()
                            + cognomi[randomLastNameIndex].substring(1);

    // inserisco l'invitato nella lista degli invitati
    guests.push(currentName + " " + currentLastName);
}

console.log(guests);