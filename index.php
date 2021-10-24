<?php include "fetchtitle.php";?>
<?php include "server.php";?>
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
            <th>Category Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $fetchData = "SELECT * FROM  categories";
        $querywork = mysqli_query($connection,$fetchData);
        while ($getData = mysqli_fetch_array($querywork)){


        ?>
        <tr>
            <td><?php echo  $getData['id'];?></td>
            <td><?php echo $getData['catname'];?></td>
            <td><?php echo $getData['cat_desc'];?></td>
            <td class="action">
                <a href="category_edit.php?cat_id=<?php echo $row['id']; ?>"onclick="return confirm('Are you sure you want to edit this data?')"><img class="edit" src="images/edit.png" alt=""></a>
                <a href="category_delete.php?cat_id=<?php echo $getData['id']; ?>" onclick="return confirm('Are you sure you want to delete this ?')"><img class="delete" src="images/delete.png" alt=""></a>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>


