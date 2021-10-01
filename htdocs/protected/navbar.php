    <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">

    
    <div class="menuBar">
      <h1 class="logo"><?php  echo ($_SESSION["uid"]? 'Üdvözöljük, '.$_SESSION["felhasznalonev"].'' : 'Jelenetkezzen be!'); ?></h1>
      <ul>
        <?php if($_SESSION["uid"] == NULL): ?>
        <li><a href="index.php?P=login">Bejelentkezés</a></li>
        <li><a href="index.php?P=register">Regisztráció</a></li>
        <li><a href="index.php?P=betekinto">Betekintő</a></li>
        <?php else: ?>
        <li><a href="#">Órarend     <i class="fa fa-caret-down"></i></a>
            <div class="dropdownMenu">
                <ul>
                  <li><a href="index.php?P=addNewClass">Új tárgy</a></li>
                  <li><a href="index.php?P=addToTimeTable">Tárgy felvétel</a></li>
                  <li><a href="index.php?P=deleteFromTimeTable">Tárgy törlés</a></li>
                </ul>
              </div>
        </li>
        <li><a href="index.php?P=logout">Kijelentkezés</a></li>
        <?php endif; ?>
      </ul>
    </div>
        
    