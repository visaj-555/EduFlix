<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'eduflix';

$con = mysqli_connect($host, $user, $password, $database);

if (isset($_POST["submit"])) {
    $book_id = $_POST['book_ID'];
    $book_name = $_POST['pdf_name'];
    $fName = $_FILES['file']['name'];
    $author_name = $_POST['Author_name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $upload_dir = './solution/' . $fName;
    move_uploaded_file($tmp_name, $upload_dir);
    $sql = "insert into reference_book values ('$book_id','$book_name','$author_name','$fName')";
    if (mysqli_query($con, $sql)) {
        echo "file uploaded successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section>
        <form action="upload.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="formgroup container-fluid">
                <label for="book_ID">Book ID</label>
                <input type="number" name="book_ID" />
            </div>
            <div class="formgroup container-fluid">
                <label for="pdf_name">Book Name</label>
                <input type="text" name="pdf_name" />
            </div>
            <div class="formgroup container-fluid">
                <label for="Author_name">Author name</label>
                <input type="text" name="Author_name" />
            </div>
            <div class="formgroup container-fluid">
                <input type="file" name="file"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="67108864" /> <!--64 MB's worth in bytes-->
            </div>
            <div class="formgroup container-fluid">
                <input type="submit" name="submit" />
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>