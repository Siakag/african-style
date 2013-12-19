<!DOCTYPE html>

<?php $pagename = ( isset($_GET['pagename']) ) ? ($_GET['pagename']) : $pages['default']; ?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="african, gambian, clothes, fashion, african-style" />
    <meta name="description" content="African style fashion and clothing" />
    <meta name="revised" content="03/03/2013" />
    <title>African Style - Official Website - <?php echo ucwords($pagename); ?></title>

    <link type="text/css" rel="stylesheet" href= "<?php echo FOUNDATION_JS_PATH.'/css/foundation.min.css' ?>" />
    <link type="text/css" rel="stylesheet" href= "<?php echo FOUNDATION_JS_PATH.'/css/normalize.css' ?>" />
    <link type="text/css" rel="stylesheet" href= "<?php echo CSS_PATH.'/main.css' ?>" />
    <link type="text/css" rel="stylesheet" href= "<?php echo CSS_PATH.'/colorbox.css' ?>" />
    <link type="text/css" rel="stylesheet" href= "<?php echo CSS_PATH.'/styles.css' ?>" />
  </head>

  <body id='<?php echo $pagename."-body" ?>' >

    <div id='site_name' class='row'>
        <div class='small-4 large-4 small-centered large-centered columns' >
          african styles
        </div>
    </div>

    <div class='row'>
      <header class='large-3 columns' >
        <?php include(INC_PATH.'/_navigation.php'); ?>
      </header>
      <div class='content large-9 columns'>
        <?php include(LAYOUT_PATH.'/'.$pagename.'.php'); ?>
      </div>
    </div>

    <div class='row twelve columns'>
      <footer>
        <?php include(INC_PATH.'/_footer.php'); ?>
      </footer>
    </div>

    <script type="text/javascript" src="<?php echo VENDOR_JS_PATH.'/jquery-1.8.3.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo FOUNDATION_JS_PATH.'/js/foundation.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo JS_PATH.'/vendor/jquery.colorbox-min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo JS_PATH.'/main.js' ?>"></script>

  </body>
</html>