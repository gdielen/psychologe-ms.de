<?PHP

define( DEBUG, false );

if ( DEBUG ) {
   error_reporting( E_ALL | E_STRICT );
   ini_set('display_errors', true);
   
   if ( $_SERVER['argc'] > 0 ) {
      ini_set('html_errors', false);
   }
} else {	
	// Error Reporting komplett abschalten
	error_reporting(0);
}

?>
