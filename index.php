<?php include "fetchtitle.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $allCat;?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container">
    <h1><?php echo $allCat;?></h1>
    <a href="addCat.php">
    <button class="cta">
        <span>Create Category</span>
        <svg width="15px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </button>
    </a>
    <div class="title-underline"></div>

    <table>
        <thead>
        <tr>
            <th>Category ID</th>
            <th>Category name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>The Godfather</td>
            <td>01/08/2019</td>
            <td class="action">

                <a href=""><i class="fa fa-edit"></i></a>
                <a href=""><i class="fa fa-trash"></i></a>
            </td>

        </tr>
        </tbody>
    </table>
</div>
</body>
</html>


