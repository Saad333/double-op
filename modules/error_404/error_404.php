<?php
	class error_404 {
		function error_404() {
			display_html( 'headers/header_main' );

			echo "Hello donkey! You've lost your way.";

			display_html( 'footers/footer_main' );
		}
	}
?>