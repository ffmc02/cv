<?php
require('../model/showtypes.php');
require('../controler/showtypesListCtrl.php');
?> 
<table>
                                        <?php
                                        foreach ($listShowtypes as $display) {
                                            //a chaque ligne de mon tableau je fait une boucle
                                            ?>
                                            <tr>
                                                <td><?= $display->id ?></td>
                                                <td><?= $display->type ?></td>
                                            </tr>     
                                            <?php
                                        }
                                        ?>
                                    </table>