    <?php
        $fullname = 'Thomas Niaux';
        echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !';
    ?>
    </br>
    <?php
        $number = 2 + 4; // $number prend la valeur 6
        $number = 5 - 1; // $number prend la valeur 4
        $number = 3 * 5; // $number prend la valeur 15
        $number = 10 / 2; // $number prend la valeur 5

        // Allez on rajoute un peu de difficulté
        $number = 3 * 5 + 1; // $number prend la valeur 16
        $number = (1 + 2) * 2; // $number prend la valeur 6
        echo ' combien font (1+2)*2 ? ' . $number = (1 + 2) * 2 . ' ? ok merci ! ^^ ';
    ?>
    <?php
        $number = ((1 + 2) * 2 + 5);
        echo $result = ($number = ((1 + 2) * 2 + 5)) * $number;    
    ?>
    <?php
        echo $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
        echo $number = 10 % 3; // $number prend la valeur 1 car il reste 1
    ?>
    </br>
    <?php
        $uCanGoIn = true; // La condition d'accès

        if ($uCanGoIn == true) {
            echo "Vous êtes autorisé(e) à accéder au site ✅";
        }

        else {
            echo "Accès refusé ❌ ";
        }
    ?>
    <?php
        $uCanGoIn = "Oui";

        // SI on a l'autorisation d'entrer
        if ($uCanGoIn == "Oui") {
            echo "Tu peux entrer";
            // instructions à exécuter quand on est autorisé à entrer
        } // SINON SI on n'a pas l'autorisation d'entrer
        elseif ($uCanGoIn == "Non") {
            echo "Try again";
            // instructions à exécuter quand on n'est pas autorisé à entrer
        } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        else {
            echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
        }
    ?>
    </br>
    <?php
        $isAllowedToEnter = "";

        if ($isAllowedToEnter) {
            echo "Bienvenue petit nouveau. :o)";
        }
        else {
            echo "T'as pas le droit d'entrer !";
    }
    ?>
    </br>
    <?php
        $pseudo = true;
        $password = true;
        $admin = false;

        if (($pseudo && $password) || $admin) {
            echo 'Accès à la recette validé ✅';
        } 
        else {
            echo 'Accès à la recette interdit ! ❌';
        }
    ?>
    </br>
    <?php
        $grade = 0;

        if ($grade == 0) {
            echo "Tu es vraiment un gros nul !!!";
        }

        else if ($grade == 5) {
            echo "Tu es très mauvais";
        }

        else if ($grade == 7) {
            echo "Tu es mauvais";
        }

        else if ($grade == 10) {
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
        }

        else if ($grade == 12) {
            echo "Tu es assez bon";
        }

        else if ($grade == 16) {
            echo "Tu te débrouilles très bien !";
        }

        else if ($grade == 20) {
            echo "Excellent travail, c'est parfait !";
        }

        else if ($grade == 21) {
            echo "C'est pas possible TRICHEUR !!!";
        }
        else {
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
    ?>
    </br>
    <?php
    $grade = 10;

        switch ($grade) // on indique sur quelle variable on travaille
        { 
            case 0: // dans le cas où $grade vaut 0
                echo "Tu es vraiment un gros nul !!!";
            exit;
            
            case 5: // dans le cas où $grade vaut 5
                echo "Tu es très mauvais";
            exit;
            
            case 7: // dans le cas où $grade vaut 7
                echo "Tu es mauvais";
            exit;
      
            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne, c'est un peu juste…";
            exit;
            
            case 12:
                echo "Tu es assez bon";
            exit;
            
            case 16:
                echo "Tu te débrouilles très bien !";
            exit;
            
            case 20:
                echo "Excellent travail, c'est parfait !";
            exit;
            
            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
    ?>
    </br>
    <?php
        $userAge = 24;

        if ($userAge >= 18) {
            $isAdult = true;
        }
        // Ou mieux, dans ce cas précis
        else {$isAdult = false; 
        }
    ?>