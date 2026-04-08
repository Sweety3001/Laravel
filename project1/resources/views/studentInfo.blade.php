<h1>student info</h1>
<table>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>city</th>
    </tr>

    <?php
    foreach ($students as $student)
    {   
        if ($student['name'] == $name) {
            echo "<tr>
                    <td>{$student['name']}</td>
                    <td>{$student['age']}</td>
                    <td>{$student['city']}</td>
                  </tr>";
        }
    }
    ?>
</table>