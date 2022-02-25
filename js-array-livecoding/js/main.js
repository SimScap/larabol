
// // ! NON E' POSSIBILE RIASSEGNARE UNA VARIABILE CONST
// // ! QUESTO NON FUNZIONERA' => students = ["nuove", "info"];

// //  § Come facciamo ad aggiungere o rimuovere un elemento dall'array?
// students.push('Airowl', 'ciaons', 'francesco ha alzato la mano');
// console.log(students);

// creo un array chiamato students che ha un tot di studenti al suo interno, ovvero stringhe
const students = ['Giovanni', 'Lorenza', 'Antonino'];

// § primo ciclo i = 0, 0 < 3 ? si ==> eseguo il console.log(students[0]), incremento di 1 la i
// # secondo ciclo i = 1, 1 < 3 ? si ==> eseguo il console.log(students[1]), incremento di 1 la i
// | terzo ciclo i = 2, 2 < 3 ? si  ==> eseguo il console.log(students[2]), incremento di 1 la i
// ! quarto ciclo i = 3, 3 < 3 ? NO  ==> esco dal ciclo
for ( let i = 0 ; i < students.length ; i++){
    // stampo tutti gli elementi dell'array dal primo all'ultimo
    console.log(students[i]);
}

// § primo ciclo i = 2, 2 >= 0 ? si ==> eseguo il console.log(students[2]),decremento di 1 la i
// # secondo ciclo i = 1, 1 >= 0 ? si ==> eseguo il console.log(students[1]),decremento di 1 la i
// | terzo ciclo i = 0, 0 >= 0 ? si ==> eseguo il console.log(students[0]),decremento di 1 la i
// ! quarto ciclo i = -1, -1 >= 0 ? NO  ==> esco dal ciclo
for ( let i = students.length - 1 ; i >= 0 ; i--){
    // stampo tutti gli elementi dell'array dall'ultimo al primo
    console.log(students[i]);
}
