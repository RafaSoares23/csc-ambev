<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title><?php echo $pagina["title"]; ?></title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- == FONT AWESOME == -->
<script src="https://kit.fontawesome.com/a6b263083b.js" crossorigin="anonymous"></script>
<!-- == ESTILO == -->
<?php $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']; ?>
<?php $fullUrl = $url . $_SERVER["REQUEST_URI"]; ?>
<?php $facePath = (isset($facePath)) ? $facePath : '/images/capas/'; ?>

<!-- Facebook -->
<meta name="description" content="<?php echo $pagina["face_description"]; ?>">
<meta property="og:image" content="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $facePath . $pagina["face_image"]; ?>">
<meta property="og:image:secure_url" content="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $facePath . $pagina["face_image"]; ?>" />

