<?php
/*	  


 $$$$$$\  $$\           $$\                 $$\                  $$\            $$$$$$\                                
$$  __$$\ $$ |          $$ |                $$ |                 $$ |          $$  __$$\                               
$$ /  $$ |$$ | $$$$$$\  $$$$$$$\   $$$$$$\  $$$$$$$\   $$$$$$\ $$$$$$\         $$ /  \__| $$$$$$\  $$\   $$\  $$$$$$\  
$$$$$$$$ |$$ |$$  __$$\ $$  __$$\  \____$$\ $$  __$$\ $$  __$$\\_$$  _|        \$$$$$$\  $$  __$$\ $$ |  $$ |$$  __$$\ 
$$  __$$ |$$ |$$ /  $$ |$$ |  $$ | $$$$$$$ |$$ |  $$ |$$$$$$$$ | $$ |           \____$$\ $$ /  $$ |$$ |  $$ |$$ /  $$ |
$$ |  $$ |$$ |$$ |  $$ |$$ |  $$ |$$  __$$ |$$ |  $$ |$$   ____| $$ |$$\       $$\   $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |
$$ |  $$ |$$ |$$$$$$$  |$$ |  $$ |\$$$$$$$ |$$$$$$$  |\$$$$$$$\  \$$$$  |      \$$$$$$  |\$$$$$$  |\$$$$$$  |$$$$$$$  |
\__|  \__|\__|$$  ____/ \__|  \__| \_______|\_______/  \_______|  \____/        \______/  \______/  \______/ $$  ____/ 
              $$ |                                                                                           $$ |      
              $$ |                                                                                           $$ |      
              \__|                                                                                           \__| 
			  
			  
Plugin Name: Alphabet Soup
Plugin URI: https://github.com/barnabycarter/alphabet-soup
Description: This wordpress plugin will display post on the main blog roll in alphabetical order instead of the default chronological order. 
Version: 1.0
License: GPLv2
Author: Barnaby Carter
Author URI: https://github.com/barnabycarter
*/

function alphabet_soup( $query ) {
	
    	if ( $query->is_home() && $query->is_main_query() ) 
		
			{
				$query->set( 'orderby', 'title' );
				$query->set( 'order', 'ASC' );
			}
			
		}
		
add_action( 'pre_get_posts', 'alphabet_soup' );

?>