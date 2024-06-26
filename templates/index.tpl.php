<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
    <script type="text/javascript" src="./scripts/checktest.js"></script>
</head>
<body>
	<header>
        <img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>" width = "60" height = "60">
        <h1><a id="fejlec" href="./"><?= $fejlec['cim'] ?></h1></a>
        <nav id="nav">
            <ul>
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                <?= $oldal['szoveg'] ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <label>
                    <?php if(isset($_SESSION['login'])) { ?>Bejelentkezett: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
                </label>
            </ul>
        </nav>
	</header>
    <div id="wrapper">
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
</body>
</html>
