<?php
/*
Plugin Name: Own Plugin
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: Custom fields plugin.
Version: 1.0
Author: Artem
Author URI: http://страница_автора_плагина
*/

if ( is_admin() ) {
	function register_my_js() {
		wp_enqueue_script( 'my-script', get_bloginfo( 'template_directory' ).'/js/myscript.js', array( 'jquery' ), '1.0', true );
	}
	add_action('init', 'register_my_js');
}


/*мое творчество*/

// подключаем функцию активации мета блока (my_extra_fields)
add_action('admin_init', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Add JS and CSS files to post', 'extra_fields_box_func', 'post', 'normal', 'high'  );
	add_meta_box( 'extra_fields', 'Add JS and CSS files to page', 'extra_fields_box_page_func', 'page', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
		?>
			<p style="color:green">To delete CSS or JS file, just leave it field empty</p>
			<p style="color:green">Please put your CSS or JS file to the folder theme and set it name to the field</p>
		<?php 
	echo '<div id="css_block">';
if(get_post_meta(get_the_ID(), 'css_url', 1)){
	$css_result = get_post_meta(get_the_ID(), 'css_url', 1);
	$css_mass = explode(",", $css_result);
	$i=0;
	foreach ($css_mass as $item){
		?><p><label style="color:green"><input type="text" name="extra[css_url<?php echo $i;?>]" style="width:50%" value="<?php echo $item?>"  />CSS</label></p><?php
			$i++;
		}
	}		
	echo '</div><a id="add_css" href="#">ADD NEW CSS FILE</a><div id="js_block">';	
	if(get_post_meta(get_the_ID(), 'js_url', 1)){
		$js_result = get_post_meta(get_the_ID(), 'js_url', 1);
		$js_mass = explode(",", $js_result);
		$i=0;
		foreach ($js_mass as $item){
			?><p><label style="color:green"><input type="text" name="extra[js_url<?php echo $i;?>]" style="width:50%" value="<?php echo $item?>" />JS</label></p><?php			
			$i++;
		}
	}	
	echo '</div><a id="add_js" href="#">ADD NEW JS FILE</a>';	
		?><input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<p style="color:green">Or just upload your CSS or JS file</p>
	<input type="file" name="my_css_file" size="100" /><label style="color:green"> Upload your CSS file</label>
	<input type="file" name="my_js_file" size="100" /><label style="color:green"> Upload your JS file</label><?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
    if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false;  // если это автосохранение
	if ( !current_user_can('edit_post', get_the_ID()) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	$my_extra=$_POST['extra'];
	foreach ($my_extra as $value => $key){
		$action = '';
		if(strpos($value, 'css_url') !== false){
			$action = 'css';
		}elseif(strpos($value, 'js_url') !== false){
			$action = 'js';
		}
		if($new_extra[$action.'_url'] && $key){
			$new_extra[$action.'_url'] .= ','.$key;
		}
		elseif($key){
			$new_extra[$action.'_url'] = $key;
		}
	}
	if(empty($new_extra)){
		$new_extra['css_url'] = '';
		$new_extra['js_url'] = '';
	}	
	foreach( $new_extra as $key=>$value ){
		if( empty($value) )
			continue delete_post_meta(get_the_ID(), $key); // удаляем поле если значение пустое
		update_post_meta(get_the_ID(), $key, $value); // add_post_meta() работает автоматически
	}
	return get_the_ID();
}


// html код блока для типа записей page
function extra_fields_box_page_func(){
	?>
		<p style="color:green">To delete CSS or JS file, just leave it field empty</p>
		<p style="color:green">Please put your CSS or JS file to the folder theme and set it name to the field</p>
	<?php 
	echo '<div id="css_block">';
	if(get_post_meta(get_the_ID(), 'css_url', 1)){
		$css_result = get_post_meta(get_the_ID(), 'css_url', 1);
		$css_mass = explode(",", $css_result);
		$i=0;		
		foreach ($css_mass as $item){
			?><p><label style="color:green"><input type="text" name="extra[css_url<?php echo $i;?>]" style="width:50%" value="<?php echo $item?>"  />CSS</label></p><?php
			$i++;
		}
	}		
	echo '</div><a id="add_css" href="#">ADD NEW CSS FILE</a><div id="js_block">';	
	if(get_post_meta(get_the_ID(), 'js_url', 1)){
		$js_result = get_post_meta(get_the_ID(), 'js_url', 1);
		$js_mass = explode(",", $js_result);
		$i=0;
		foreach ($js_mass as $item){
			?><p><label style="color:green"><input type="text" name="extra[js_url<?php echo $i;?>]" style="width:50%" value="<?php echo $item?>" />JS</label></p><?php			
			$i++;
		}
	}	
	echo '</div><a id="add_js" href="#">ADD NEW JS FILE</a>';	
		?><input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<p style="color:green">Or just upload your CSS or JS file</p>
	<input type="file" name="my_css_file" size="100" /><label style="color:green"> Upload your CSS file</label>
	<input type="file" name="my_js_file" size="100" /><label style="color:green"> Upload your JS file</label><?php
}



/*Подключение необходимых стилей*/
function my_style_method(){	
	$url1 = get_post_meta(get_queried_object_id(), 'css_url');
	$my_out1 = explode(",", $url1[0]);
	foreach($my_out1 as $item){
		if(!empty($item)){
			wp_register_style(
			$item,
			get_template_directory_uri() . '/css/'.$item);
			wp_enqueue_style($item);
		}
	}
}
add_action('wp_enqueue_scripts', 'my_style_method');

/*Подключение необходимых скриптов*/
function my_scripts_method(){
	$url = get_post_meta(get_queried_object_id(), 'js_url');
	$my_out = explode(",", $url[0]);
	foreach($my_out as $item){
		if(!empty($url)){
			wp_enqueue_script(
			$item,
			get_template_directory_uri() . '/js/'.$item,
			array('jquery'),
			'2.0.5',
			false
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


function my_custom_field_document_update(){
	$files_mass = $_FILES;
	foreach($files_mass as $item => $key){
			$action = '';
		if($key['name']){
			if($item == 'my_css_file'){
				$action = 'css';
			}elseif($item == 'my_js_file'){
				$action = 'js';
			}
			$current_val = get_post_meta(get_the_ID(), $action.'_url', 1);			
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/memoranda/'.$action.'/';
			$uploadfile = $uploaddir.basename($key['name']);			
			if(empty($current_val)){
				$new_val = $key['name'];
				add_post_meta(get_the_ID(), $action.'_url', $new_val);
			}else{
				$new_val = $current_val.','.$key['name'];
				echo 'zaeblo suka';
				exit;
				//update_post_meta(get_the_ID(), $action.'_url', $new_val); // add_post_meta() работает автоматически
			}					
			move_uploaded_file($_FILES['my_'.$action.'_file']['tmp_name'], $uploadfile);			
		}
	}
}
add_action('save_post', 'my_custom_field_document_update');

function post_edit_form_tag() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'post_edit_form_tag');

?>
	