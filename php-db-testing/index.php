<?php
    //
    $pokemons_raw = '[
            {
              "Name": "bulbasaur",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "ivysaur",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "venusaur",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "charmander",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "charmeleon",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "charizard",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "squirtle",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "wartortle",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "blastoise",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "caterpie",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "metapod",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "butterfree",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "weedle",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "kakuna",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "beedrill",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "pidgey",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "pidgeotto",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "pidgeot",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "rattata",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "raticate",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "spearow",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "fearow",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "ekans",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "arbok",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "pikachu",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "raichu",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "sandshrew",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "sandslash",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "nidoran-f",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "nidorina",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "nidoqueen",
              "Type1": "Poison",
              "Type2": "Ground"
            },
            {
              "Name": "nidoran-m",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "nidorino",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "nidoking",
              "Type1": "Poison",
              "Type2": "Ground"
            },
            {
              "Name": "clefairy",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "clefable",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "vulpix",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "ninetales",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "jigglypuff",
              "Type1": "Normal",
              "Type2": "Fairy"
            },
            {
              "Name": "wigglytuff",
              "Type1": "Normal",
              "Type2": "Fairy"
            },
            {
              "Name": "zubat",
              "Type1": "Poison",
              "Type2": "Flying"
            },
            {
              "Name": "golbat",
              "Type1": "Poison",
              "Type2": "Flying"
            },
            {
              "Name": "oddish",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "gloom",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "vileplume",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "paras",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "parasect",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "venonat",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "venomoth",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "diglett",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "dugtrio",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "meowth",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "persian",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "psyduck",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "golduck",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "mankey",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "primeape",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "growlithe",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "arcanine",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "poliwag",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "poliwhirl",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "poliwrath",
              "Type1": "Water",
              "Type2": "Fighting"
            },
            {
              "Name": "abra",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "kadabra",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "alakazam",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "machop",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "machoke",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "machamp",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "bellsprout",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "weepinbell",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "victreebel",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "tentacool",
              "Type1": "Water",
              "Type2": "Poison"
            },
            {
              "Name": "tentacruel",
              "Type1": "Water",
              "Type2": "Poison"
            },
            {
              "Name": "geodude",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "graveler",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "golem",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "ponyta",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "rapidash",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "slowpoke",
              "Type1": "Water",
              "Type2": "Psychic"
            },
            {
              "Name": "slowbro",
              "Type1": "Water",
              "Type2": "Psychic"
            },
            {
              "Name": "magnemite",
              "Type1": "Electric",
              "Type2": "Steel"
            },
            {
              "Name": "magneton",
              "Type1": "Electric",
              "Type2": "Steel"
            },
            {
              "Name": "farfetchd",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "doduo",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "dodrio",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "seel",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "dewgong",
              "Type1": "Water",
              "Type2": "Ice"
            },
            {
              "Name": "grimer",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "muk",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "shellder",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "cloyster",
              "Type1": "Water",
              "Type2": "Ice"
            },
            {
              "Name": "gastly",
              "Type1": "Ghost",
              "Type2": "Poison"
            },
            {
              "Name": "haunter",
              "Type1": "Ghost",
              "Type2": "Poison"
            },
            {
              "Name": "gengar",
              "Type1": "Ghost",
              "Type2": "Poison"
            },
            {
              "Name": "onix",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "drowzee",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "hypno",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "krabby",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "kingler",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "voltorb",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "electrode",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "exeggcute",
              "Type1": "Grass",
              "Type2": "Psychic"
            },
            {
              "Name": "exeggutor",
              "Type1": "Grass",
              "Type2": "Psychic"
            },
            {
              "Name": "cubone",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "marowak",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "hitmonlee",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "hitmonchan",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "lickitung",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "koffing",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "weezing",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "rhyhorn",
              "Type1": "Ground",
              "Type2": "Rock"
            },
            {
              "Name": "rhydon",
              "Type1": "Ground",
              "Type2": "Rock"
            },
            {
              "Name": "chansey",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "tangela",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "kangaskhan",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "horsea",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "seadra",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "goldeen",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "seaking",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "staryu",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "starmie",
              "Type1": "Water",
              "Type2": "Psychic"
            },
            {
              "Name": "mr-mime",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "scyther",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "jynx",
              "Type1": "Ice",
              "Type2": "Psychic"
            },
            {
              "Name": "electabuzz",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "magmar",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "pinsir",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "tauros",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "magikarp",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "gyarados",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "lapras",
              "Type1": "Water",
              "Type2": "Ice"
            },
            {
              "Name": "ditto",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "eevee",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "vaporeon",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "jolteon",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "flareon",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "porygon",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "omanyte",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "omastar",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "kabuto",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "kabutops",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "aerodactyl",
              "Type1": "Rock",
              "Type2": "Flying"
            },
            {
              "Name": "snorlax",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "articuno",
              "Type1": "Ice",
              "Type2": "Flying"
            },
            {
              "Name": "zapdos",
              "Type1": "Electric",
              "Type2": "Flying"
            },
            {
              "Name": "moltres",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "dratini",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "dragonair",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "dragonite",
              "Type1": "Dragon",
              "Type2": "Flying"
            },
            {
              "Name": "mewtwo",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "mew",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "chikorita",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "bayleef",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "meganium",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "cyndaquil",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "quilava",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "typhlosion",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "totodile",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "croconaw",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "feraligatr",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "sentret",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "furret",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "hoothoot",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "noctowl",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "ledyba",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "ledian",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "spinarak",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "ariados",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "crobat",
              "Type1": "Poison",
              "Type2": "Flying"
            },
            {
              "Name": "chinchou",
              "Type1": "Water",
              "Type2": "Electric"
            },
            {
              "Name": "lanturn",
              "Type1": "Water",
              "Type2": "Electric"
            },
            {
              "Name": "pichu",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "cleffa",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "igglybuff",
              "Type1": "Normal",
              "Type2": "Fairy"
            },
            {
              "Name": "togepi",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "togetic",
              "Type1": "Fairy",
              "Type2": "Flying"
            },
            {
              "Name": "natu",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "xatu",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "mareep",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "flaaffy",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "ampharos",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "bellossom",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "marill",
              "Type1": "Water",
              "Type2": "Fairy"
            },
            {
              "Name": "azumarill",
              "Type1": "Water",
              "Type2": "Fairy"
            },
            {
              "Name": "sudowoodo",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "politoed",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "hoppip",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "skiploom",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "jumpluff",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "aipom",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "sunkern",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "sunflora",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "yanma",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "wooper",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "quagsire",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "espeon",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "umbreon",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "murkrow",
              "Type1": "Dark",
              "Type2": "Flying"
            },
            {
              "Name": "slowking",
              "Type1": "Water",
              "Type2": "Psychic"
            },
            {
              "Name": "misdreavus",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "unown",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "wobbuffet",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "girafarig",
              "Type1": "Normal",
              "Type2": "Psychic"
            },
            {
              "Name": "pineco",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "forretress",
              "Type1": "Bug",
              "Type2": "Steel"
            },
            {
              "Name": "dunsparce",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "gligar",
              "Type1": "Ground",
              "Type2": "Flying"
            },
            {
              "Name": "steelix",
              "Type1": "Steel",
              "Type2": "Ground"
            },
            {
              "Name": "snubbull",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "granbull",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "qwilfish",
              "Type1": "Water",
              "Type2": "Poison"
            },
            {
              "Name": "scizor",
              "Type1": "Bug",
              "Type2": "Steel"
            },
            {
              "Name": "shuckle",
              "Type1": "Bug",
              "Type2": "Rock"
            },
            {
              "Name": "heracross",
              "Type1": "Bug",
              "Type2": "Fighting"
            },
            {
              "Name": "sneasel",
              "Type1": "Dark",
              "Type2": "Ice"
            },
            {
              "Name": "teddiursa",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "ursaring",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "slugma",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "magcargo",
              "Type1": "Fire",
              "Type2": "Rock"
            },
            {
              "Name": "swinub",
              "Type1": "Ice",
              "Type2": "Ground"
            },
            {
              "Name": "piloswine",
              "Type1": "Ice",
              "Type2": "Ground"
            },
            {
              "Name": "corsola",
              "Type1": "Water",
              "Type2": "Rock"
            },
            {
              "Name": "remoraid",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "octillery",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "delibird",
              "Type1": "Ice",
              "Type2": "Flying"
            },
            {
              "Name": "mantine",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "skarmory",
              "Type1": "Steel",
              "Type2": "Flying"
            },
            {
              "Name": "houndour",
              "Type1": "Dark",
              "Type2": "Fire"
            },
            {
              "Name": "houndoom",
              "Type1": "Dark",
              "Type2": "Fire"
            },
            {
              "Name": "kingdra",
              "Type1": "Water",
              "Type2": "Dragon"
            },
            {
              "Name": "phanpy",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "donphan",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "porygon2",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "stantler",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "smeargle",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "tyrogue",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "hitmontop",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "smoochum",
              "Type1": "Ice",
              "Type2": "Psychic"
            },
            {
              "Name": "elekid",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "magby",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "miltank",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "blissey",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "raikou",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "entei",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "suicune",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "larvitar",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "pupitar",
              "Type1": "Rock",
              "Type2": "Ground"
            },
            {
              "Name": "tyranitar",
              "Type1": "Rock",
              "Type2": "Dark"
            },
            {
              "Name": "lugia",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "ho-oh",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "celebi",
              "Type1": "Psychic",
              "Type2": "Grass"
            },
            {
              "Name": "treecko",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "grovyle",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "sceptile",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "torchic",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "combusken",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "blaziken",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "mudkip",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "marshtomp",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "swampert",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "poochyena",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "mightyena",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "zigzagoon",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "linoone",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "wurmple",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "silcoon",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "beautifly",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "cascoon",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "dustox",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "lotad",
              "Type1": "Water",
              "Type2": "Grass"
            },
            {
              "Name": "lombre",
              "Type1": "Water",
              "Type2": "Grass"
            },
            {
              "Name": "ludicolo",
              "Type1": "Water",
              "Type2": "Grass"
            },
            {
              "Name": "seedot",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "nuzleaf",
              "Type1": "Grass",
              "Type2": "Dark"
            },
            {
              "Name": "shiftry",
              "Type1": "Grass",
              "Type2": "Dark"
            },
            {
              "Name": "taillow",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "swellow",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "wingull",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "pelipper",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "ralts",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "kirlia",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "gardevoir",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "surskit",
              "Type1": "Bug",
              "Type2": "Water"
            },
            {
              "Name": "masquerain",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "shroomish",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "breloom",
              "Type1": "Grass",
              "Type2": "Fighting"
            },
            {
              "Name": "slakoth",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "vigoroth",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "slaking",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "nincada",
              "Type1": "Bug",
              "Type2": "Ground"
            },
            {
              "Name": "ninjask",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "shedinja",
              "Type1": "Bug",
              "Type2": "Ghost"
            },
            {
              "Name": "whismur",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "loudred",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "exploud",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "makuhita",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "hariyama",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "azurill",
              "Type1": "Normal",
              "Type2": "Fairy"
            },
            {
              "Name": "nosepass",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "skitty",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "delcatty",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "sableye",
              "Type1": "Dark",
              "Type2": "Ghost"
            },
            {
              "Name": "mawile",
              "Type1": "Steel",
              "Type2": "Fairy"
            },
            {
              "Name": "aron",
              "Type1": "Steel",
              "Type2": "Rock"
            },
            {
              "Name": "lairon",
              "Type1": "Steel",
              "Type2": "Rock"
            },
            {
              "Name": "aggron",
              "Type1": "Steel",
              "Type2": "Rock"
            },
            {
              "Name": "meditite",
              "Type1": "Fighting",
              "Type2": "Psychic"
            },
            {
              "Name": "medicham",
              "Type1": "Fighting",
              "Type2": "Psychic"
            },
            {
              "Name": "electrike",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "manectric",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "plusle",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "minun",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "volbeat",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "illumise",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "roselia",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "gulpin",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "swalot",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "carvanha",
              "Type1": "Water",
              "Type2": "Dark"
            },
            {
              "Name": "sharpedo",
              "Type1": "Water",
              "Type2": "Dark"
            },
            {
              "Name": "wailmer",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "wailord",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "numel",
              "Type1": "Fire",
              "Type2": "Ground"
            },
            {
              "Name": "camerupt",
              "Type1": "Fire",
              "Type2": "Ground"
            },
            {
              "Name": "torkoal",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "spoink",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "grumpig",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "spinda",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "trapinch",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "vibrava",
              "Type1": "Ground",
              "Type2": "Dragon"
            },
            {
              "Name": "flygon",
              "Type1": "Ground",
              "Type2": "Dragon"
            },
            {
              "Name": "cacnea",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "cacturne",
              "Type1": "Grass",
              "Type2": "Dark"
            },
            {
              "Name": "swablu",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "altaria",
              "Type1": "Dragon",
              "Type2": "Flying"
            },
            {
              "Name": "zangoose",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "seviper",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "lunatone",
              "Type1": "Rock",
              "Type2": "Psychic"
            },
            {
              "Name": "solrock",
              "Type1": "Rock",
              "Type2": "Psychic"
            },
            {
              "Name": "barboach",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "whiscash",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "corphish",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "crawdaunt",
              "Type1": "Water",
              "Type2": "Dark"
            },
            {
              "Name": "baltoy",
              "Type1": "Ground",
              "Type2": "Psychic"
            },
            {
              "Name": "claydol",
              "Type1": "Ground",
              "Type2": "Psychic"
            },
            {
              "Name": "lileep",
              "Type1": "Rock",
              "Type2": "Grass"
            },
            {
              "Name": "cradily",
              "Type1": "Rock",
              "Type2": "Grass"
            },
            {
              "Name": "anorith",
              "Type1": "Rock",
              "Type2": "Bug"
            },
            {
              "Name": "armaldo",
              "Type1": "Rock",
              "Type2": "Bug"
            },
            {
              "Name": "feebas",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "milotic",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "castform",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "kecleon",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "shuppet",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "banette",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "duskull",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "dusclops",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "tropius",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "chimecho",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "absol",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "wynaut",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "snorunt",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "glalie",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "spheal",
              "Type1": "Ice",
              "Type2": "Water"
            },
            {
              "Name": "sealeo",
              "Type1": "Ice",
              "Type2": "Water"
            },
            {
              "Name": "walrein",
              "Type1": "Ice",
              "Type2": "Water"
            },
            {
              "Name": "clamperl",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "huntail",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "gorebyss",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "relicanth",
              "Type1": "Water",
              "Type2": "Rock"
            },
            {
              "Name": "luvdisc",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "bagon",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "shelgon",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "salamence",
              "Type1": "Dragon",
              "Type2": "Flying"
            },
            {
              "Name": "beldum",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "metang",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "metagross",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "regirock",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "regice",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "registeel",
              "Type1": "Steel",
              "Type2": ""
            },
            {
              "Name": "latias",
              "Type1": "Dragon",
              "Type2": "Psychic"
            },
            {
              "Name": "latios",
              "Type1": "Dragon",
              "Type2": "Psychic"
            },
            {
              "Name": "kyogre",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "groudon",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "rayquaza",
              "Type1": "Dragon",
              "Type2": "Flying"
            },
            {
              "Name": "jirachi",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "deoxys-normal",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "turtwig",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "grotle",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "torterra",
              "Type1": "Grass",
              "Type2": "Ground"
            },
            {
              "Name": "chimchar",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "monferno",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "infernape",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "piplup",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "prinplup",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "empoleon",
              "Type1": "Water",
              "Type2": "Steel"
            },
            {
              "Name": "starly",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "staravia",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "staraptor",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "bidoof",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "bibarel",
              "Type1": "Normal",
              "Type2": "Water"
            },
            {
              "Name": "kricketot",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "kricketune",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "shinx",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "luxio",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "luxray",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "budew",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "roserade",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "cranidos",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "rampardos",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "shieldon",
              "Type1": "Rock",
              "Type2": "Steel"
            },
            {
              "Name": "bastiodon",
              "Type1": "Rock",
              "Type2": "Steel"
            },
            {
              "Name": "burmy",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "wormadam-plant",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "mothim",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "combee",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "vespiquen",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "pachirisu",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "buizel",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "floatzel",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "cherubi",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "cherrim",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "shellos",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "gastrodon",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "ambipom",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "drifloon",
              "Type1": "Ghost",
              "Type2": "Flying"
            },
            {
              "Name": "drifblim",
              "Type1": "Ghost",
              "Type2": "Flying"
            },
            {
              "Name": "buneary",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "lopunny",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "mismagius",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "honchkrow",
              "Type1": "Dark",
              "Type2": "Flying"
            },
            {
              "Name": "glameow",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "purugly",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "chingling",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "stunky",
              "Type1": "Poison",
              "Type2": "Dark"
            },
            {
              "Name": "skuntank",
              "Type1": "Poison",
              "Type2": "Dark"
            },
            {
              "Name": "bronzor",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "bronzong",
              "Type1": "Steel",
              "Type2": "Psychic"
            },
            {
              "Name": "bonsly",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "mime-jr",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "happiny",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "chatot",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "spiritomb",
              "Type1": "Ghost",
              "Type2": "Dark"
            },
            {
              "Name": "gible",
              "Type1": "Dragon",
              "Type2": "Ground"
            },
            {
              "Name": "gabite",
              "Type1": "Dragon",
              "Type2": "Ground"
            },
            {
              "Name": "garchomp",
              "Type1": "Dragon",
              "Type2": "Ground"
            },
            {
              "Name": "munchlax",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "riolu",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "lucario",
              "Type1": "Fighting",
              "Type2": "Steel"
            },
            {
              "Name": "hippopotas",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "hippowdon",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "skorupi",
              "Type1": "Poison",
              "Type2": "Bug"
            },
            {
              "Name": "drapion",
              "Type1": "Poison",
              "Type2": "Dark"
            },
            {
              "Name": "croagunk",
              "Type1": "Poison",
              "Type2": "Fighting"
            },
            {
              "Name": "toxicroak",
              "Type1": "Poison",
              "Type2": "Fighting"
            },
            {
              "Name": "carnivine",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "finneon",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "lumineon",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "mantyke",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "snover",
              "Type1": "Grass",
              "Type2": "Ice"
            },
            {
              "Name": "abomasnow",
              "Type1": "Grass",
              "Type2": "Ice"
            },
            {
              "Name": "weavile",
              "Type1": "Dark",
              "Type2": "Ice"
            },
            {
              "Name": "magnezone",
              "Type1": "Electric",
              "Type2": "Steel"
            },
            {
              "Name": "lickilicky",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "rhyperior",
              "Type1": "Ground",
              "Type2": "Rock"
            },
            {
              "Name": "tangrowth",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "electivire",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "magmortar",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "togekiss",
              "Type1": "Fairy",
              "Type2": "Flying"
            },
            {
              "Name": "yanmega",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "leafeon",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "glaceon",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "gliscor",
              "Type1": "Ground",
              "Type2": "Flying"
            },
            {
              "Name": "mamoswine",
              "Type1": "Ice",
              "Type2": "Ground"
            },
            {
              "Name": "porygon-z",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "gallade",
              "Type1": "Psychic",
              "Type2": "Fighting"
            },
            {
              "Name": "probopass",
              "Type1": "Rock",
              "Type2": "Steel"
            },
            {
              "Name": "dusknoir",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "froslass",
              "Type1": "Ice",
              "Type2": "Ghost"
            },
            {
              "Name": "rotom",
              "Type1": "Electric",
              "Type2": "Ghost"
            },
            {
              "Name": "uxie",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "mesprit",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "azelf",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "dialga",
              "Type1": "Steel",
              "Type2": "Dragon"
            },
            {
              "Name": "palkia",
              "Type1": "Water",
              "Type2": "Dragon"
            },
            {
              "Name": "heatran",
              "Type1": "Fire",
              "Type2": "Steel"
            },
            {
              "Name": "regigigas",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "giratina-altered",
              "Type1": "Ghost",
              "Type2": "Dragon"
            },
            {
              "Name": "cresselia",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "phione",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "manaphy",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "darkrai",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "shaymin-land",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "arceus",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "victini",
              "Type1": "Psychic",
              "Type2": "Fire"
            },
            {
              "Name": "snivy",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "servine",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "serperior",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "tepig",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "pignite",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "emboar",
              "Type1": "Fire",
              "Type2": "Fighting"
            },
            {
              "Name": "oshawott",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "dewott",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "samurott",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "patrat",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "watchog",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "lillipup",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "herdier",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "stoutland",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "purrloin",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "liepard",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "pansage",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "simisage",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "pansear",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "simisear",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "panpour",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "simipour",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "munna",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "musharna",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "pidove",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "tranquill",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "unfezant",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "blitzle",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "zebstrika",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "roggenrola",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "boldore",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "gigalith",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "woobat",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "swoobat",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "drilbur",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "excadrill",
              "Type1": "Ground",
              "Type2": "Steel"
            },
            {
              "Name": "audino",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "timburr",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "gurdurr",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "conkeldurr",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "tympole",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "palpitoad",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "seismitoad",
              "Type1": "Water",
              "Type2": "Ground"
            },
            {
              "Name": "throh",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "sawk",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "sewaddle",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "swadloon",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "leavanny",
              "Type1": "Bug",
              "Type2": "Grass"
            },
            {
              "Name": "venipede",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "whirlipede",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "scolipede",
              "Type1": "Bug",
              "Type2": "Poison"
            },
            {
              "Name": "cottonee",
              "Type1": "Grass",
              "Type2": "Fairy"
            },
            {
              "Name": "whimsicott",
              "Type1": "Grass",
              "Type2": "Fairy"
            },
            {
              "Name": "petilil",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "lilligant",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "basculin-red-striped",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "sandile",
              "Type1": "Ground",
              "Type2": "Dark"
            },
            {
              "Name": "krokorok",
              "Type1": "Ground",
              "Type2": "Dark"
            },
            {
              "Name": "krookodile",
              "Type1": "Ground",
              "Type2": "Dark"
            },
            {
              "Name": "darumaka",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "darmanitan-standard",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "maractus",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "dwebble",
              "Type1": "Bug",
              "Type2": "Rock"
            },
            {
              "Name": "crustle",
              "Type1": "Bug",
              "Type2": "Rock"
            },
            {
              "Name": "scraggy",
              "Type1": "Dark",
              "Type2": "Fighting"
            },
            {
              "Name": "scrafty",
              "Type1": "Dark",
              "Type2": "Fighting"
            },
            {
              "Name": "sigilyph",
              "Type1": "Psychic",
              "Type2": "Flying"
            },
            {
              "Name": "yamask",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "cofagrigus",
              "Type1": "Ghost",
              "Type2": ""
            },
            {
              "Name": "tirtouga",
              "Type1": "Water",
              "Type2": "Rock"
            },
            {
              "Name": "carracosta",
              "Type1": "Water",
              "Type2": "Rock"
            },
            {
              "Name": "archen",
              "Type1": "Rock",
              "Type2": "Flying"
            },
            {
              "Name": "archeops",
              "Type1": "Rock",
              "Type2": "Flying"
            },
            {
              "Name": "trubbish",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "garbodor",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "zorua",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "zoroark",
              "Type1": "Dark",
              "Type2": ""
            },
            {
              "Name": "minccino",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "cinccino",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "gothita",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "gothorita",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "gothitelle",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "solosis",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "duosion",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "reuniclus",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "ducklett",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "swanna",
              "Type1": "Water",
              "Type2": "Flying"
            },
            {
              "Name": "vanillite",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "vanillish",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "vanilluxe",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "deerling",
              "Type1": "Normal",
              "Type2": "Grass"
            },
            {
              "Name": "sawsbuck",
              "Type1": "Normal",
              "Type2": "Grass"
            },
            {
              "Name": "emolga",
              "Type1": "Electric",
              "Type2": "Flying"
            },
            {
              "Name": "karrablast",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "escavalier",
              "Type1": "Bug",
              "Type2": "Steel"
            },
            {
              "Name": "foongus",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "amoonguss",
              "Type1": "Grass",
              "Type2": "Poison"
            },
            {
              "Name": "frillish",
              "Type1": "Water",
              "Type2": "Ghost"
            },
            {
              "Name": "jellicent",
              "Type1": "Water",
              "Type2": "Ghost"
            },
            {
              "Name": "alomomola",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "joltik",
              "Type1": "Bug",
              "Type2": "Electric"
            },
            {
              "Name": "galvantula",
              "Type1": "Bug",
              "Type2": "Electric"
            },
            {
              "Name": "ferroseed",
              "Type1": "Grass",
              "Type2": "Steel"
            },
            {
              "Name": "ferrothorn",
              "Type1": "Grass",
              "Type2": "Steel"
            },
            {
              "Name": "klink",
              "Type1": "Steel",
              "Type2": ""
            },
            {
              "Name": "klang",
              "Type1": "Steel",
              "Type2": ""
            },
            {
              "Name": "klinklang",
              "Type1": "Steel",
              "Type2": ""
            },
            {
              "Name": "tynamo",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "eelektrik",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "eelektross",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "elgyem",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "beheeyem",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "litwick",
              "Type1": "Ghost",
              "Type2": "Fire"
            },
            {
              "Name": "lampent",
              "Type1": "Ghost",
              "Type2": "Fire"
            },
            {
              "Name": "chandelure",
              "Type1": "Ghost",
              "Type2": "Fire"
            },
            {
              "Name": "axew",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "fraxure",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "haxorus",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "cubchoo",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "beartic",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "cryogonal",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "shelmet",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "accelgor",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "stunfisk",
              "Type1": "Ground",
              "Type2": "Electric"
            },
            {
              "Name": "mienfoo",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "mienshao",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "druddigon",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "golett",
              "Type1": "Ground",
              "Type2": "Ghost"
            },
            {
              "Name": "golurk",
              "Type1": "Ground",
              "Type2": "Ghost"
            },
            {
              "Name": "pawniard",
              "Type1": "Dark",
              "Type2": "Steel"
            },
            {
              "Name": "bisharp",
              "Type1": "Dark",
              "Type2": "Steel"
            },
            {
              "Name": "bouffalant",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "rufflet",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "braviary",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "vullaby",
              "Type1": "Dark",
              "Type2": "Flying"
            },
            {
              "Name": "mandibuzz",
              "Type1": "Dark",
              "Type2": "Flying"
            },
            {
              "Name": "heatmor",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "durant",
              "Type1": "Bug",
              "Type2": "Steel"
            },
            {
              "Name": "deino",
              "Type1": "Dark",
              "Type2": "Dragon"
            },
            {
              "Name": "zweilous",
              "Type1": "Dark",
              "Type2": "Dragon"
            },
            {
              "Name": "hydreigon",
              "Type1": "Dark",
              "Type2": "Dragon"
            },
            {
              "Name": "larvesta",
              "Type1": "Bug",
              "Type2": "Fire"
            },
            {
              "Name": "volcarona",
              "Type1": "Bug",
              "Type2": "Fire"
            },
            {
              "Name": "cobalion",
              "Type1": "Steel",
              "Type2": "Fighting"
            },
            {
              "Name": "terrakion",
              "Type1": "Rock",
              "Type2": "Fighting"
            },
            {
              "Name": "virizion",
              "Type1": "Grass",
              "Type2": "Fighting"
            },
            {
              "Name": "tornadus-incarnate",
              "Type1": "Flying",
              "Type2": ""
            },
            {
              "Name": "thundurus-incarnate",
              "Type1": "Electric",
              "Type2": "Flying"
            },
            {
              "Name": "reshiram",
              "Type1": "Dragon",
              "Type2": "Fire"
            },
            {
              "Name": "zekrom",
              "Type1": "Dragon",
              "Type2": "Electric"
            },
            {
              "Name": "landorus-incarnate",
              "Type1": "Ground",
              "Type2": "Flying"
            },
            {
              "Name": "kyurem",
              "Type1": "Dragon",
              "Type2": "Ice"
            },
            {
              "Name": "keldeo-ordinary",
              "Type1": "Water",
              "Type2": "Fighting"
            },
            {
              "Name": "meloetta-aria",
              "Type1": "Normal",
              "Type2": "Psychic"
            },
            {
              "Name": "genesect",
              "Type1": "Bug",
              "Type2": "Steel"
            },
            {
              "Name": "chespin",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "quilladin",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "chesnaught",
              "Type1": "Grass",
              "Type2": "Fighting"
            },
            {
              "Name": "fennekin",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "braixen",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "delphox",
              "Type1": "Fire",
              "Type2": "Psychic"
            },
            {
              "Name": "froakie",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "frogadier",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "greninja",
              "Type1": "Water",
              "Type2": "Dark"
            },
            {
              "Name": "bunnelby",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "diggersby",
              "Type1": "Normal",
              "Type2": "Ground"
            },
            {
              "Name": "fletchling",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "fletchinder",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "talonflame",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "scatterbug",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "spewpa",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "vivillon",
              "Type1": "Bug",
              "Type2": "Flying"
            },
            {
              "Name": "litleo",
              "Type1": "Fire",
              "Type2": "Normal"
            },
            {
              "Name": "pyroar",
              "Type1": "Fire",
              "Type2": "Normal"
            },
            {
              "Name": "flabebe",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "floette",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "florges",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "skiddo",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "gogoat",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "pancham",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "pangoro",
              "Type1": "Fighting",
              "Type2": "Dark"
            },
            {
              "Name": "furfrou",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "espurr",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "meowstic-male",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "honedge",
              "Type1": "Steel",
              "Type2": "Ghost"
            },
            {
              "Name": "doublade",
              "Type1": "Steel",
              "Type2": "Ghost"
            },
            {
              "Name": "aegislash-blade",
              "Type1": "Steel",
              "Type2": "Ghost"
            },
            {
              "Name": "spritzee",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "aromatisse",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "swirlix",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "slurpuff",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "inkay",
              "Type1": "Dark",
              "Type2": "Psychic"
            },
            {
              "Name": "malamar",
              "Type1": "Dark",
              "Type2": "Psychic"
            },
            {
              "Name": "binacle",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "barbaracle",
              "Type1": "Rock",
              "Type2": "Water"
            },
            {
              "Name": "skrelp",
              "Type1": "Poison",
              "Type2": "Water"
            },
            {
              "Name": "dragalge",
              "Type1": "Poison",
              "Type2": "Dragon"
            },
            {
              "Name": "clauncher",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "clawitzer",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "helioptile",
              "Type1": "Electric",
              "Type2": "Normal"
            },
            {
              "Name": "heliolisk",
              "Type1": "Electric",
              "Type2": "Normal"
            },
            {
              "Name": "tyrunt",
              "Type1": "Rock",
              "Type2": "Dragon"
            },
            {
              "Name": "tyrantrum",
              "Type1": "Rock",
              "Type2": "Dragon"
            },
            {
              "Name": "amaura",
              "Type1": "Rock",
              "Type2": "Ice"
            },
            {
              "Name": "aurorus",
              "Type1": "Rock",
              "Type2": "Ice"
            },
            {
              "Name": "sylveon",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "hawlucha",
              "Type1": "Fighting",
              "Type2": "Flying"
            },
            {
              "Name": "dedenne",
              "Type1": "Electric",
              "Type2": "Fairy"
            },
            {
              "Name": "carbink",
              "Type1": "Rock",
              "Type2": "Fairy"
            },
            {
              "Name": "goomy",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "sliggoo",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "goodra",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "klefki",
              "Type1": "Steel",
              "Type2": "Fairy"
            },
            {
              "Name": "phantump",
              "Type1": "Ghost",
              "Type2": "Grass"
            },
            {
              "Name": "trevenant",
              "Type1": "Ghost",
              "Type2": "Grass"
            },
            {
              "Name": "pumpkaboo-average",
              "Type1": "Ghost",
              "Type2": "Grass"
            },
            {
              "Name": "gourgeist-average",
              "Type1": "Ghost",
              "Type2": "Grass"
            },
            {
              "Name": "bergmite",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "avalugg",
              "Type1": "Ice",
              "Type2": ""
            },
            {
              "Name": "noibat",
              "Type1": "Flying",
              "Type2": "Dragon"
            },
            {
              "Name": "noivern",
              "Type1": "Flying",
              "Type2": "Dragon"
            },
            {
              "Name": "xerneas",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "yveltal",
              "Type1": "Dark",
              "Type2": "Flying"
            },
            {
              "Name": "zygarde-50",
              "Type1": "Dragon",
              "Type2": "Ground"
            },
            {
              "Name": "diancie",
              "Type1": "Rock",
              "Type2": "Fairy"
            },
            {
              "Name": "hoopa-confined",
              "Type1": "Psychic",
              "Type2": "Ghost"
            },
            {
              "Name": "volcanion",
              "Type1": "Fire",
              "Type2": "Water"
            },
            {
              "Name": "rowlet",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "dartrix",
              "Type1": "Grass",
              "Type2": "Flying"
            },
            {
              "Name": "decidueye",
              "Type1": "Grass",
              "Type2": "Ghost"
            },
            {
              "Name": "litten",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "torracat",
              "Type1": "Fire",
              "Type2": ""
            },
            {
              "Name": "incineroar",
              "Type1": "Fire",
              "Type2": "Dark"
            },
            {
              "Name": "popplio",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "brionne",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "primarina",
              "Type1": "Water",
              "Type2": "Fairy"
            },
            {
              "Name": "pikipek",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "trumbeak",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "toucannon",
              "Type1": "Normal",
              "Type2": "Flying"
            },
            {
              "Name": "yungoos",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "gumshoos",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "grubbin",
              "Type1": "Bug",
              "Type2": ""
            },
            {
              "Name": "charjabug",
              "Type1": "Bug",
              "Type2": "Electric"
            },
            {
              "Name": "vikavolt",
              "Type1": "Bug",
              "Type2": "Electric"
            },
            {
              "Name": "crabrawler",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "crabominable",
              "Type1": "Fighting",
              "Type2": "Ice"
            },
            {
              "Name": "oricorio-baile",
              "Type1": "Fire",
              "Type2": "Flying"
            },
            {
              "Name": "cutiefly",
              "Type1": "Bug",
              "Type2": "Fairy"
            },
            {
              "Name": "ribombee",
              "Type1": "Bug",
              "Type2": "Fairy"
            },
            {
              "Name": "rockruff",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "lycanroc-midday",
              "Type1": "Rock",
              "Type2": ""
            },
            {
              "Name": "wishiwashi-solo",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "mareanie",
              "Type1": "Poison",
              "Type2": "Water"
            },
            {
              "Name": "toxapex",
              "Type1": "Poison",
              "Type2": "Water"
            },
            {
              "Name": "mudbray",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "mudsdale",
              "Type1": "Ground",
              "Type2": ""
            },
            {
              "Name": "dewpider",
              "Type1": "Water",
              "Type2": "Bug"
            },
            {
              "Name": "araquanid",
              "Type1": "Water",
              "Type2": "Bug"
            },
            {
              "Name": "fomantis",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "lurantis",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "morelull",
              "Type1": "Grass",
              "Type2": "Fairy"
            },
            {
              "Name": "shiinotic",
              "Type1": "Grass",
              "Type2": "Fairy"
            },
            {
              "Name": "salandit",
              "Type1": "Poison",
              "Type2": "Fire"
            },
            {
              "Name": "salazzle",
              "Type1": "Poison",
              "Type2": "Fire"
            },
            {
              "Name": "stufful",
              "Type1": "Normal",
              "Type2": "Fighting"
            },
            {
              "Name": "bewear",
              "Type1": "Normal",
              "Type2": "Fighting"
            },
            {
              "Name": "bounsweet",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "steenee",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "tsareena",
              "Type1": "Grass",
              "Type2": ""
            },
            {
              "Name": "comfey",
              "Type1": "Fairy",
              "Type2": ""
            },
            {
              "Name": "oranguru",
              "Type1": "Normal",
              "Type2": "Psychic"
            },
            {
              "Name": "passimian",
              "Type1": "Fighting",
              "Type2": ""
            },
            {
              "Name": "wimpod",
              "Type1": "Bug",
              "Type2": "Water"
            },
            {
              "Name": "golisopod",
              "Type1": "Bug",
              "Type2": "Water"
            },
            {
              "Name": "sandygast",
              "Type1": "Ghost",
              "Type2": "Ground"
            },
            {
              "Name": "palossand",
              "Type1": "Ghost",
              "Type2": "Ground"
            },
            {
              "Name": "pyukumuku",
              "Type1": "Water",
              "Type2": ""
            },
            {
              "Name": "type-null",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "silvally",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "minior-meteor",
              "Type1": "Rock",
              "Type2": "Flying"
            },
            {
              "Name": "komala",
              "Type1": "Normal",
              "Type2": ""
            },
            {
              "Name": "turtonator",
              "Type1": "Fire",
              "Type2": "Dragon"
            },
            {
              "Name": "togedemaru",
              "Type1": "Electric",
              "Type2": "Steel"
            },
            {
              "Name": "mimikyu",
              "Type1": "Ghost",
              "Type2": "Fairy"
            },
            {
              "Name": "bruxish",
              "Type1": "Water",
              "Type2": "Psychic"
            },
            {
              "Name": "drampa",
              "Type1": "Normal",
              "Type2": "Dragon"
            },
            {
              "Name": "dhelmise",
              "Type1": "Ghost",
              "Type2": "Grass"
            },
            {
              "Name": "jangmo-o",
              "Type1": "Dragon",
              "Type2": ""
            },
            {
              "Name": "hakamo-o",
              "Type1": "Dragon",
              "Type2": "Fighting"
            },
            {
              "Name": "kommo-o",
              "Type1": "Dragon",
              "Type2": "Fighting"
            },
            {
              "Name": "tapu-koko",
              "Type1": "Electric",
              "Type2": "Fairy"
            },
            {
              "Name": "tapu-lele",
              "Type1": "Psychic",
              "Type2": "Fairy"
            },
            {
              "Name": "tapu-bulu",
              "Type1": "Grass",
              "Type2": "Fairy"
            },
            {
              "Name": "tapu-fini",
              "Type1": "Water",
              "Type2": "Fairy"
            },
            {
              "Name": "cosmog",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "cosmoem",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "solgaleo",
              "Type1": "Psychic",
              "Type2": "Steel"
            },
            {
              "Name": "lunala",
              "Type1": "Psychic",
              "Type2": "Ghost"
            },
            {
              "Name": "nihilego",
              "Type1": "Rock",
              "Type2": "Poison"
            },
            {
              "Name": "buzzwole",
              "Type1": "Bug",
              "Type2": "Fighting"
            },
            {
              "Name": "pheromosa",
              "Type1": "Bug",
              "Type2": "Fighting"
            },
            {
              "Name": "xurkitree",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "celesteela",
              "Type1": "Steel",
              "Type2": "Flying"
            },
            {
              "Name": "kartana",
              "Type1": "Grass",
              "Type2": "Steel"
            },
            {
              "Name": "guzzlord",
              "Type1": "Dark",
              "Type2": "Dragon"
            },
            {
              "Name": "necrozma",
              "Type1": "Psychic",
              "Type2": ""
            },
            {
              "Name": "magearna",
              "Type1": "Steel",
              "Type2": "Fairy"
            },
            {
              "Name": "marshadow",
              "Type1": "Fighting",
              "Type2": "Ghost"
            },
            {
              "Name": "poipole",
              "Type1": "Poison",
              "Type2": ""
            },
            {
              "Name": "naganadel",
              "Type1": "Poison",
              "Type2": "Dragon"
            },
            {
              "Name": "stakataka",
              "Type1": "Rock",
              "Type2": "Steel"
            },
            {
              "Name": "blacephalon",
              "Type1": "Fire",
              "Type2": "Ghost"
            },
            {
              "Name": "zeraora",
              "Type1": "Electric",
              "Type2": ""
            },
            {
              "Name": "meltan",
              "Type1": "Steel",
              "Type2": ""
            },
            {
              "Name": "melmetal",
              "Type1": "Steel",
              "Type2": ""
            }
    ]';

    /**
     *  {
   "Name": "blastoise",
   "Type1": "Water",
   "Type2": ""
 },
 {
   "Name": "caterpie",
   "Type1": "Bug",
   "Type2": ""
 },
     *
     */
    $pokemonList = json_decode($pokemons_raw);

/**
 *   "Name": "bulbasaur",
      "Type1": "Grass",
      "Type2": "Poison"
 */

foreach( $pokemonList as $pokemon){
    var_dump($pokemon->Name);
}

// var_dump($pokemonList);