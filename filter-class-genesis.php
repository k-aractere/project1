<?php


// AJOUT DE CLASS BEM DANS GENESIS FRAMEWORK POUR WORDPRESS de façon conditionnelle.

add_filter( 'genesis_attr_entry', 'cp_genesis_attr_entry' );


function cp_genesis_attr_entry( $attributes ) {
//Ajout d'une classe spécifique dans la les pages archives, les archives des cutoms post type et page de résultats de recherches.

if (is_archive()|| is_post_type_archive() || is_search()){
 // add original plus extra CSS classes
 $attributes['class'] .= 'Block__Element--Modifier';
 
 // retournes les attributs existant + les nouveaux
   return $attributes;
 

} 
//sinon retourner les attributs existants
else{
  $attributes['class'];
  return $attributes;
}

}



