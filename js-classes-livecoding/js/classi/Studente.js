export class Studente {
    constructor(nome, cognome, eta){
        this.nome = nome;
        this.cognome = cognome;
        this.eta = eta;
    }

    generalita(){
        return this.nome + " " + this.cognome;
    }

    saluta(){
        console.log('Ti saluta '+this.nome);
    }

    isMaggiorenne(){
        return this.eta >= 18;
    }
}

