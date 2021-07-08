<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date">
        <br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date">

    <button type="submit">Go</button>
    </form>

    <?php 

        //fetch the starting date and ending date
        $start_date = new DateTime($_GET['start_date']?? null);
        $end_date = new DateTime($_GET['end_date']?? null);

        //using deff function helper to get the diffence by year, month and day format
        $interval = $start_date->diff($end_date);

        //Output
        echo "Out put:" . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
    
    ?>
</body>
</html>