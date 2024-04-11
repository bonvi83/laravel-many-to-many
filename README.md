## Consegna

Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   creare la migration per la tabella `technologies`
-   creare il model `Technology`
-   creare la migration per la tabella pivot `project_technology`
-   aggiungere ai model Technology e Project i metodi per definire la relazione many to many
-   visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
-   permettere all'utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
-   gestire il salvataggio dell'associazione progetto-tecnologie con opportune regole di validazione

### Seconda parte

Continuiamo a lavorare nella repo dei giorni scorsi e aggiungiamo un'immagine ai nostri progetti.
Ricordiamoci di creare il symlink con l'apposito comando artisan e di aggiungere l'attributo enctype="multipart/form-data" ai form di creazione e di modifica!

**Bonus 1:**
Creare il seeder per il model Technology.

**Bonus 2:**
Aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.

**Bonus 3:**
Inviare una email quando viene creato un nuovo post

**Bonus 4:**
Permettere l'eliminazione dell'immagine del post dal form di modifica
