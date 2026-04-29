<?php include("resources/header.php"); ?>
<?php include("resources/db.php"); ?>

<h2>Lista geral dos alunos registrados</h2>
<a href="form.php">Registrar um novo aluno</a>

<br><br>

<table border="1">
        <tr>
            <td>Id</td>
            <td>first_name</td>
            <td>last_name</td>
            <td>nif</td>
            <td>email</td>
            <td>birthdate</td>
            <td>created_at</td>
        </tr>

    <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['nif']}</td>
                <td>{$row['email']}</td>
                <td>{$row['birthdate']}</td>
                <td>{$row['created_at']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>edit</a>
                    <a href='delete.php?id={$row['id']}'>delete</a>
                </td>
            </tr>";
        }
    ?>

</table>

<?php include("resources/footer.php"); ?>