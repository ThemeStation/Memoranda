<?php
if (!empty($_FILES["us_avatar"]) and $_FILES["us_avatar"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_avatar_path', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_avatar"]["tmp_name"];
	$name = $_FILES["us_avatar"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_avatar_path', $user_photo_path);

}

if (!empty($_FILES["us_avatar_hover"]) and $_FILES["us_avatar_hover"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_avatar_hover_path', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_avatar_hover"]["tmp_name"];
	$name = $_FILES["us_avatar_hover"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_avatar_hover_path', $user_photo_path);

}

if (!empty($_FILES["us_img1"]) and $_FILES["us_img1"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_img1', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_img1"]["tmp_name"];
	$name = $_FILES["us_img1"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_img1', $user_photo_path);

}
if (!empty($_FILES["us_img2"]) and $_FILES["us_img2"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_img2', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_img2"]["tmp_name"];
	$name = $_FILES["us_img2"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_img2', $user_photo_path);

}
if (!empty($_FILES["us_img3"]) and $_FILES["us_img3"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_img3', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_img3"]["tmp_name"];
	$name = $_FILES["us_img3"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_img3', $user_photo_path);

}
if (!empty($_FILES["us_img4"]) and $_FILES["us_img4"]['name'] != '') {
	$old_file = $_SERVER['DOCUMENT_ROOT'] . get_user_meta($user_id, 'user_img4', true);
	unlink($old_file);

	//var_dump($_FILES);
	$uploads_dir = WP_CONTENT_DIR . '/uploads/us_avatars/';
	$tmp_name = $_FILES["us_img4"]["tmp_name"];
	$name = $_FILES["us_img4"]["name"];
	$name = preg_replace('/[^a-zA-Z0-9\-\_.]/is', null, $name);
	move_uploaded_file($tmp_name, "$uploads_dir/$name");
	$user_photo_path = "/wp-content/uploads/us_avatars/$name";
	chmod($uploads_dir . '/' . $name, 0777);
	update_user_meta($user_id, 'user_img4', $user_photo_path);

}