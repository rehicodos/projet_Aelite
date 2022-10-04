
                    <?php
                        include_once('connexion.php');
                         
                        $re = "SELECT * FROM client ORDER BY id DESC";
                        $rows = mysqli_query($bdd,$re);
                        // $i = 1;
                        foreach($rows as $row) :
                    ?>
                        <tr class="tr_survol">
                            <!-- <td><input id="clic_radio" type="radio" name="check[]" value="<?php echo $row['id'] ; ?>"></td> -->
                            <td><?php echo utf8_encode($row['nom']);?></td>
                            <td><?php echo utf8_encode($row['tel']);?></td>
                            <td><?php echo utf8_encode($row['fax']);?></td>
                            <td><?php echo utf8_encode($row['adress_bp']);?></td>
                            <td><?php echo utf8_encode($row['email']);?></td>
                            <!-- <td><?php echo $row['site_web'];?></td> -->
                        </tr>

                        <?php endforeach; ?>
                                    