import { Studente as student } from "./classi/Studente.js";
import { variabilina } from "./classi/Studente.js";

const array = [];

const studentino = new Studente('Cesco', "Cescarelli", 19);
const studentina = new Studente('Cesca', "Cescarelle", 17);

console.log(studentino, studentina);
console.log(studentino.isMaggiorenne(), studentina.isMaggiorenne());
console.warn(variabilina);