<?php
 
/**Chamando CSS e JavaScript**/
 
 
function my_scripts() {
 
  // script 02
  wp_enqueue_script(
    'metro_bootstrap',
    get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
    array('jquery')
  );
 
 wp_enqueue_script( 'jquery' );
 
  // script 05
  wp_enqueue_script(
    'metro_min',
    get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
    array('jquery')
  );
 
  // script 06
  wp_enqueue_script(
    'metro_estilo',
    get_stylesheet_directory_uri() . 'style.css',
    array('jquery')
  );
 
}

// Limite de Caracteres


function custom_excerpt_length( $length ) {
      return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Add imagens destacadas

  add_theme_support( 'post-thumbnails' ); 

// adicionamos uma acção que chama a nossa função
add_action( 'wp_enqueue_scripts', 'my_scripts' );


function my_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
  <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
  </div>
  </form>';

  return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

//PAGINATION
 
function pagination() {
    global $wp_query;
 
    $page_total = $wp_query->max_num_pages;
    $page_cur   = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $big        = 999999999;
 
    if( $page_total == 1 )
      return;
 
    $pagination = array(
      'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format'    => '?paged=%#%',
      'current'   => max( 1, $page_cur ),
      'total'     => $page_total,
      'prev_next' => true,
      'prev_text' => '<span class="glyphicon glyphicon-chevron-left cbr"></span>',
      'next_text' => '<span class="glyphicon glyphicon-chevron-right cbr"></span>',
      'end_size'  => 1,
      'mid_size'  => 2,
      'type'      => 'list'
    );
 
return paginate_links( $pagination );
  }    
 

 //ACIONANDO SINGLES PERSONALIZADOS

 add_filter('single_template', 'check_for_category_single_template');
 
function check_for_category_single_template( $t )
 
{
 
  foreach( (array) get_the_category() as $cat )
 
  {
 
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
 
    if($cat->parent)
 
    {
 
      $cat = get_the_category_by_ID( $cat->parent );
 
      if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
 
    }
 
  }
 
  return $t;
 
}


// Estização de página de login
function login_styles() { ?>
    <style type="text/css">
    body{background: #ffc905 url('<?php echo get_stylesheet_directory_uri(); ?>/images/login-bg.png') repeat scroll center center;  }
    .login h1 a {width: 420px;height:80px;display: inline-block;background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/solunor-logo.png') no-repeat; margin-left:-60px;}
    .login form {background: #eee;border-radius:4px;}
    .login label {font-size: 17px;color: #555;}
    .login form .input{background: #ffc905;box-shadow:none;border-radius: 4px;border: 1px solid #0B8E55;color: #fff;}
    .login form .input:hover, .login form .input:focus{background: #000;}
    .login .button-primary, .login .button-group.button-large .button, .login .button.button-large{height: 40px;padding: 0 20px;display: inline-block;box-shadow: none;border: none;background: #ffc905;}
    .login .button-primary:hover {background: #000;}
    .login .forgetmenot{margin-top: 10px;}
    .login #nav a, .login #backtoblog a {color: #fff;}
    .login #nav a:hover, .login #backtoblog a:hover{text-decoration: underline;color: #fff;}
    </style>
<?php }
add_action('login_enqueue_scripts', 'login_styles');
 
// Link logo login
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
// Mudar nome ao passar o mouse
function my_login_logo_url_title() {
    return 'Solunor Máquinas';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
 

 //RETIRANDO BARRA DE ADMIN
add_filter('show_admin_bar', '__return_false');


?>