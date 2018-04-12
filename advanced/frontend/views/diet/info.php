<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;

            width: 69%;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }
        tbody{
            width: 500px;
            border: 1px solid #5b64a069;
            border-radius: 10px;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        h1{
            width: 100%;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>
<body>




<div class="container">
    <table >

        <h1>Info Nutrizionale</h1>
        <tr>
            <th>Company</th>
            <th>white_food</th>
            <th>gray_food</th>
            <th>black_food</th>
        </tr>


        <?php foreach ($info as $inf) {  ?>

            <?php if(!(is_null($inf['good_food'])  && is_null($inf['normal_food'])  && is_null($inf['bad_food']))) { ?>

                <tr>
                    <td><?php echo($inf['text']); ?> </td>
                    <td><?php echo($inf['good_food']); ?> </td>
                    <td><?php echo($inf['normal_food']); ?> </td>
                    <td><?php echo($inf['bad_food']); ?> </td>
                </tr>

            <?php } ?>

        <?php }?>

    </table>
</div>


</body>
</html>