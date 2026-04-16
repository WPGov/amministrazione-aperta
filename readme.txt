=== Amministrazione Aperta ===
Contributors: Milmor
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F2JK36SCXKTE2
Tags: amministrazione, aperta, trasparenza, italia, pubblica amministrazione
Requires at least: 4.4
Tested up to: 7.0
Version: 3.9
Stable tag: 3.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Software per la pubblicazione di concessioni (sovvenzioni, contributi, sussidi e vantaggi economici) e incarichi, anche in formato open data, come richiesto dal D.Lgs 33/2013.

== Description ==

Amministrazione Aperta è un plugin nato per assolvere all’obbligo normativo per la gestione opendata di [Amministrazione Trasparente](http://wordpress.org/plugins/amministrazione-trasparente "Amministrazione Trasparente Plugin per Wordpress"), per i quali è richiesta la pubblicazione di sovvenzioni, contributi, sussidi, vantaggi economici, incarichi e consulenze.

Questo plugin permette un inserimento semplice di tutti i dati tramite l'interfaccia di amministrazione di WordPress e include shortcode personalizzabili per la visualizzazione in forma tabellare delle informazioni, nel rispetto dei requisiti di accessibilità:

* consultazione agevole;
* indicizzazione nei motori di ricerca;
* visualizzazione con funzioni di esportazione per trattamento e riutilizzo dei dati.

= Funzioni del Plugin =
Tramite questa estensione è possibile gestire in maniera semplice e veloce tutte le informazioni richieste per assolvere all'obbligo di legge.
In particolare, è possibile inserire direttamente dal pannello di amministrazione di WordPress tutti i dati necessari:

* Titolo
* Importo (previsto/erogato)
* Beneficiario
* Dati Fiscali
* Norma
* Modalità
* Responsabile
* Determina
* Data (inizio/fine)
* Eventuali file allegati tramite upload e testo a piacere (editor WYSIWYG)

L'utente finale potrà dunque:

* Visualizzare e navigare tutte le spese, cercare quella interessata o ordinarle per data e nome
* Esportare i dati in formato CSV e XLS (Excel)


> **Disclaimer** | This plugin is developed for **schools, universities, municipalities and local authorities** of **ITALY** and follows italian legislation.

== Installation ==

1. Carica il contenuto estratto nella cartella `/wp-content/plugins/`
2. Attiva il plugin dal menu 'Plugins' in WordPress

= Shortcode =
Per la visualizzazione dei dati in forma tabellare sono disponibili gli shortcode `[ammap]` e `[aa]` (alias equivalente).

Sintassi base:

`[ammap tipo="spesa" anno="all" grafico="0" incarico="0"]`

Esempio incarichi esterni nel 2013:

`[ammap tipo="incarico" grafico="0" anno="2013" incarico="3"]`

Parametri supportati:

* `tipo`: `spesa` (default) oppure `incarico`
* `anno`: `all` (default) oppure un anno numerico (es. `2013`)
* `incarico`: usato solo con `tipo="incarico"`
* `0` = tutti i tipi di incarico
* `1` = incarichi conferiti o autorizzati ai propri dipendenti
* `2` = incarichi conferiti a dipendenti di altra Amministrazione
* `3` = incarichi conferiti a soggetti estranei alla Pubblica Amministrazione
* `grafico`: parametro mantenuto per compatibilita; attualmente non modifica l'output della tabella

== Support ==
Per dubbi o richieste di funzionalita: m.milesi@wpgov.it
GitHub: https://github.com/WPGov/amministrazione-aperta

== Screenshots ==
1. Menù Laterale
2. Pagina "Nuova Spesa"
3. Esempio di tabella generata
4. Funzioni di ricerca/esportazione per l'utente finale

== Changelog ==
> Questa è la lista completa di tutti gli aggiornamenti, test e correzioni. Ogni volta che una nuova versione viene rilasciata assicuratevi di aggiornare il prima possibile per usufruire delle ultime migliorie!

= 3.9 2026-04-15 =
* [Miglioria] Aggiunta guida shortcode nel pannello impostazioni con esempi pratici
* [Miglioria] Documentati i parametri tipo, anno, incarico e grafico direttamente in admin
* [Miglioria] Aggiunti riferimenti di supporto (email e repository GitHub) in impostazioni e readme
* [Documentazione] Aggiornato il readme con sintassi ed esempi shortcode più chiari
* [Manutenzione] Pulizia editoriale e uniformazione dei testi di documentazione
* Testato con WP 7.0

= 3.8.2 20221013 =
* [Bugfix] Fixed shortcode problem causing wrong table generation in some configurations
* [Bugfix] Minor enhancements

= 3.8.1 20220613 =
* [Bugfix] Fixed shortcode problem causing wrong table generation in some configurations
* [Bugfix] Minor enhancements
* [Improvement] WP 6.0 compatibility check

= 3.8 20220323 =
* [Bugfix] **Security improvements**
* [Improvement] Table improvements
* [Improvement] WP 5.9 compatibility check
* [Improvement] Performance boost and code refactoring
* [Improvement] Clean up of old code

= 3.7.3 20201201 =
* WP 5.6 compatibility check
* Fixed minor warning (thanks Andrea Smith)

= Versione 3.7.2 21.09.2020 =
* Version and compatibility check
* Minor improvements

= Versione 3.7.1 18.09.2018 =
* **Corretto** problema con php 7.X

= Versione 3.7 27/03/2018 =
* **AGGIUNTO** campo "Numero di protocollo" per gli incarichi
* **AGGIUNTO** campo "Data incarico" per gli incarichi
* **Migliorata** visualizzazione tabellare degli incarichi
* **Migliorata** visualizzazione singola di incarichi e spese
* **Ottimizzate** visualizzazioni singole e impatto con performance del sito

= Versione 3.6 09/01/2017 =
* **Aggiunto** editor di WordPress per l'inserimento di note e allegati. Si invitano gli utilizzatori del vecchio campo a sistemare le vecchie voci spostando il contenuto nel nuovo editor.
* **Migliorate** le prestazioni
* **Corretti** alcuni warning
* **Testato** su WP 4.7

= Versione 3.5 23/11/2015 =
* Nuovo pannello impostazioni WPGov
* Miglioramenti minori
* Incremento performance

= Versione 3.4.1 11/03/2015 =
* Miglioramento velocità e stabilità

= Versione 3.4 14/02/2015 =
* Miglioramenti pannello wpgov

= Versione 3.3 01/02/2015 =
* Miglioramenti vari
* Migliorato pannello **wpgov**

= Versione 3.2 16/01/2015 =
* Corretti problemi di codifica UTF-8
* Rimosso DataTable a favore di tabelle più leggere, semplici e integrate con lo stile del sito
* Corretti piccoli refusi minori
* Aggiornato modulo WPGov

= Versione 3.1.5 10/10/2014 =
* Modifiche css

= Versione 3.1.4 10/10/2014 =
* Migliorato css pagina wpgov

= Versione 3.1.3 20/07/2014 =
* **Testato** su WordPress 4.0

= Versione 3.1.2 - 29.06.2014 =
* **Migliorato** pannello impostazioni condivise

= Versione 3.1.1 - 3.06.2014 =
* **Corretto** problema con il file single_hacks.php

= Versione 3.1 - 30.05.2014 =
* Corretti problemi con alcuni parametri query
* Aggiunta visualizzazione singola per le spese
* Ottimizzazioni

= Versione 3 #Gasw (Giornata Apera sul Web) - 26.05.2014 =
* Rebranding wpgov.it
* Introduzione supporto per incarichi e consulenze
* Ottimizzazioni e revisioni varie
* Introduzione di nuovi shortcode
* Molto altro...

= Versione 2.2.3 - 6.01.2014 =
* Corretta errata visualizzazione della data

= Versione 2.2.2 - 25.10.2013 =
* Corretto possibile conflitto nella funzione di cambio titolo della voce nell'editor di WP

= Versione 2.2.1 - 11.10.2013 =
* Ripristinata voce di menù 'Spese'
* Aggiunte nuove "Modalità Assegnazione": Cottimo Fiduciario / Mercato Elettronico / Convenzione CONSIP / Procedura aperta / Procedura negoziata / Procedura ristretta / Procedura selettiva | Grazie a Andrea Longhi & Igor Vita

= Versione 2.2 // Nuovo Nome: Amm. Aperta (Contributi & Concessioni PA) - 6.10.2013 =
* Nuovo nome
* **Aggiunta** possibilità di dividere le spese per anno (es. tag [ammap anno="2013"]
* **Aggiunta** possibilità di inserire testo libero
* **Aggiunta** opzione per disabilitare la visualizzazione automatica degli allegati (es. se si vuole inserirli manualmente nel testo o se si usa una soluzione come WP Attachments)
* **Rimosso** metabox 'Custom Fields'
* **Aggiunto** un disclaimer promemoria di esclusione di responsabilità nel file readme.txt (in accordo con la licenza GPL v.2 con cui questo software viene fornito)

= Versione 2.1.3 - 23.07.2013 (!) =
* Aggiunte info autore in readme.txt
* BugFix - Risolto problema che causava l'apparizione dello shortcode sempre in alto
* Aggiunto avviso Amm.Trasparente una volta installato il plugin
= Versione 2.1.2 - 30.06.2013 (!) =
* Aggiunta condizione reset_query che in alcuni casi mostrava gli articoli sotto la tabella
= Versione 2.1.1 - 28.06.2013 =
* Miglioramenti CSS
* Larghezza tabella automatica
* Date in formato gg/mm/anno
= Versione 2.1 - 5.05.2013 (!) =
* Impostazione rewrite=false (link più grezzi ma sempre funzionanti senza bisogno di riscrittura)
* Ottimizzazioni minori - Pulizia codice Php
* Rinnovata pagina Informazioni - Nuove stringhe per il menù
* Risolto bug funzione per visualizzare il peso degli allegati nella visualizzazione singola
= Versione 2.0 - 02.05.2013 =
* Possibilità di caricare file come allegati alla spesa
* Possibilità di visualizzazione singola per ogni spesa
* Breve introduzione alla tabella [front-end]
* Piccole ottimizzazioni css/php
* Integrazione PressTrend (I/O)
= Versione 1.2.2 - 16.04.2013 =
* Modifiche Css Minori - Ottimizzazione CSS
* Modifica grafica minore (nuova img background)
= Versione 1.2.1 - 3.04.2013 =
* Aggiunta variabile "bSort": true nella tabella per il riordino alfabetico dei dati
* Validazione XHTML
= Versione 1.2 - 3.04.2013 =
* BugFix - Tutte le spese sono ora visibili
* E' ora possibile per l'utente finale esportare i dati della tabella (PDF, CSV, EXCEL)
* Correzioni CSS (anche per la funzione di esportazione dati)
* Aggiunta barra di scorrimento orizzontale per avere una larghezza e leggibilità ottimale
* Corretti problemi di adattamento larghezza
= Versione 1.1.1 - 3.04.2013 =
* Bugfix - Riferimenti a file .js e .css corretti
* Bugfix - Altri fix minori
= Versione 1.1 - 2.04.2013 (!) =
* Bugfix - Errore fatale che impediva l'attivazione del plugin su alcuni server
= Versione 1.0 - 2.04.2013 =
* Pubblicazione su Wordpress.org
= Versione 0.2 14/12/2012 =
* Aggiunta Pagina "Credits"
* Aggiunte descrizioni metabox e normativa in pagina "Credits"
= Versione 0.1 10/12/2012 =
* Lancio del Progetto

(!) = Aggiornamento Importante (Sicurezza/Stabilità)