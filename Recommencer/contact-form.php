<html>
    <body>
        <p>
            <?php
            $nom="user_name";
            $mess_elec= "user_mail";
            $suggestion= "user_message";
            ?>

            <?php
            echo "Nom et Prénom : ";
            echo $_POST[$nom] . "<br/>";
            echo "E-mail : ";
            echo $_POST[$mess_elec] . "<br/>";
            echo "Message : ";
            echo $_POST[$suggestion];
            ?>
        </p>
    </body>
</html>