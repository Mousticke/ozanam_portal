var libChoixGenre = "Recherche par :";
var listeGenres = new Array ()
listeGenres [0] = new GenreRessource ("grClasse","CLASSES");
listeGenres [1] = new GenreRessource ("grSalle","SALLES");

function GenreRessource (aGenre, aLibelle) {
  this.genre   = aGenre;
  this.libelle = aLibelle;
}
