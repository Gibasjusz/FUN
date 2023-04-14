<?php
    function rysuj_stopke() {
        echo
        '<tr class="stopka">
            <td colspan="2">&copy; 2023 Jakub Gibas sp z o o</td>
        </tr>';
    }

    function rysuj_menu() {
        $menu [1]['link'] = './index.php';
        $menu [1]['napis'] = 'Strona główna';
        $menu [2]['link'] = './galeria.php';
        $menu [2]['napis'] = 'Galeria';
        $menu [3]['link'] = './kontakt.php';
        $menu [3]['napis'] = 'Kontakt';
        $menu [4]['link'] = './kontakt.php';
        $menu [4]['napis'] = 'Kontakt';
        $menu [5]['link'] = './kontakt.php';
        $menu [5]['napis'] = 'Kontakt';
        $menu [6]['link'] = './kontakt.php';
        $menu [6]['napis'] = 'Kontakt';

        echo
        '<td id="menu">
            <h2>Menu</h2>
            <hr>
            <ul>';
        
        // echo
        //         '<li>
        //             <a href="./index.php">1.gdzieś</a>
        //         </li>
        //         <li>
        //             <a href="./galeria.php">2.gdzieś</a>
        //         </li>
        //         <li>
        //             <a href="./kontakt.php">3.gdzieś</a>
        //         </li>';
        for ($i=1; $i<=count($menu) ; $i++) { 
            if ($menu[$i]['link'] == './index.php') {
                echo '<li class = "lista"> <a href="'  . $menu[$i]['link']  . '" id = "zaz">'  . $menu[$i]['napis'] .  '</a></li>';
                echo '<br>';
            }
            else {
                echo '<li class = "lista"> <a href="'  . $menu[$i]['link']  . '">'  . $menu[$i]['napis'] .  '</a></li>';
                echo '<br>';
            }
            
        }
        
        echo
            '</ul>
        </td>';
    }
?>