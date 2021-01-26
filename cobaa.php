<html>

<body>
    <center>

        <head>
            <h1>
                <font face="forte">Simple Calorie Calculator</font>
            </h1>
        </head>
        <form method="post">
            Gender:
            <Select name="gender"><br>
                <option>Male</option>
                <option>Female</option>
            </select><br><br>
            Age:
            <input name="age" type="text"> yrs.<br><br>
            Weight:
            <input name="weight" type="text">kgs.<br><br>
            Height:
            <input name="height" type="text">cm.<br><br>
            <br><input type="Submit" value="Calculate">

            <?php
            $age = $_POST['age'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $calories = "0.0215183";
            $gender = $_POST['gender'];
            switch ($gender) {
                case 'Female':
                    $gender = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
                    echo "<p>Your estimated daily metabolic rate is $gender </p>";
                    echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";

                    break;
                case 'Male':
                    $gender = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
                    echo "<p>Your estimated daily metabolic rate is $gender </p>";
                    echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
            }


            ?>

        </form>
    </center>
</body>

</html>
