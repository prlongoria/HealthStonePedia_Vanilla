<html>
    <?php
    //echo "estoy en coderlist";
    require_once ("Components/layout.php");
    ?>
    <body>
        <?php
        require_once ("Components/header.php");
        ?>
        <main>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Attributes</th>
                    <th scope="col">Healing</th>
                    <th scope="col">Position</th>
                    <th scope="col">Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data["stone"] as $stone){ echo"
                            
                            <tr>
                                <th >{$stone->getId()}</th>
                                <td>{$stone->getName()}
                                <a href= '?action=delete&id={$stone->getId()}'>🗑️</a>
                                <a href= '?action=edit&id={$stone->getId()}'>📝</a>
                                </td>
                                <td>{$stone->getAttributes()}</td>
                                <td>{$stone->getHealing()}</td>
                                <td>{$stone->getPosition()}</td>
                                <td>{$stone->getColor()}</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </main>
        <?php
        require_once ("Components/footer.php");
        ?>
    </body>
</html>
    
