<?php

/**
 * Class for registering a new settings page under Settings.
 */
class AmministrazioneAperta_options {
 
    function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }
 
    /**
     * Registers a new settings page
     */
    function admin_menu() {
        add_options_page(
            'Amministrazione Aperta',
            'Amministrazione Aperta',
            'manage_options',
            'options_page_slug',
            array(
                $this,
                'settings_page'
            )
        );
    }
 
    /**
     * Settings page display callback.
     */
    function settings_page() {
        if (!(is_plugin_active( 'amministrazione-aperta/amministrazioneaperta.php' ))) { echo 'Plugin non installato!'; return;}
	
		if(isset($_POST['Submit'])) {

			if(isset($_POST['aa_disabilita_visauomatica_allegati_n'])){
				update_option( 'aa_disabilita_visauomatica_allegati', '1' );
			} else {
				update_option( 'aa_disabilita_visauomatica_allegati', '0' );
			}
		}
		
		echo '<h2>Amministrazione Aperta</h2>
		<form method="post" name="options" target="_self">';
		settings_fields( 'at_option_group' );
		
		echo '<table class="form-table"><tbody>';
		
		echo '<tr><td><input type="checkbox" name="aa_disabilita_visauomatica_allegati_n" ';
		$get_aa_disabilita_visauomatica_allegati = get_option('aa_disabilita_visauomatica_allegati');
		if ($get_aa_disabilita_visauomatica_allegati == '1') {
			echo 'checked=\'checked\'';
		}
		echo '/>&nbsp;Spunta questa casella per disabilitare la visualizzazione automatica degli allegati (es. se vuoi inserirli manualmente nel testo o usi un plugin per la loro visualizzazione come WP Attachments)</td></tr>';
        echo '<tr><td style="padding-top:20px;">';
        echo '<h3>Guida shortcode</h3>';
        echo '<p>Per mostrare automaticamente tabelle di spese o incarichi nelle pagine/articoli usa lo shortcode <code>[ammap]</code> (alias: <code>[aa]</code>).</p>';
        echo '<p><strong>Esempio:</strong><br><code>[ammap tipo="incarico" grafico="0" anno="2013" incarico="3"]</code></p>';
        echo '<p><strong>Come funziona:</strong> lo shortcode filtra i contenuti in base ai parametri passati e genera la tabella con i dati pubblicati nel plugin.</p>';
        echo '<ul style="list-style:disc; margin-left:20px;">';
        echo '<li><strong>tipo</strong>: <code>spesa</code> (default) oppure <code>incarico</code>.</li>';
        echo '<li><strong>anno</strong>: <code>all</code> (default) oppure un anno numerico (es. <code>2013</code>).</li>';
        echo '<li><strong>incarico</strong>: usato solo se <code>tipo="incarico"</code>. Valori: <code>0</code>=tutti, <code>1</code>=dipendenti propri, <code>2</code>=dipendenti altra PA, <code>3</code>=soggetti esterni.</li>';
        echo '<li><strong>grafico</strong>: parametro previsto per compatibilita; attualmente non modifica l\'output della tabella.</li>';
        echo '</ul>';
        echo '<p><em>Per dubbi o richieste di funzionalita contattare <a href="mailto:m.milesi@wpgov.it">m.milesi@wpgov.it</a><br>GitHub: <a href="https://github.com/WPGov/amministrazione-aperta" target="_blank" rel="noopener noreferrer">github.com/WPGov/amministrazione-aperta</a></em></p>';
        echo '</td></tr>';
		echo '</tbody></table>';
		
		echo '<p class="submit"><input type="submit"  class="button-primary" name="Submit" value="Aggiorna Impostazioni" /></p>
		</form>';
    }
}
 
new AmministrazioneAperta_options();