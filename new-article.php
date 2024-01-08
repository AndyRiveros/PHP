<?php

require 'includes/database.php';

$errors = [];
$title = '';
$content = '';
$published_at = '';

 // $sql = "INSERT INTO article (title, content, published_at)
    // VALUES ('" .mysqli_escape_string ($conn, $_POST ['title']) . "','"
    //            .mysqli_escape_string ($conn, $_POST ["content"]) . "','"
    //            .mysqli_escape_string ($conn, $_POST ["published_at"]) . "')";

// $sql = "INSERT INTO article (title, content, published_at)
//         VALUES ('" . $_POST ['title'] . "','"
//                    . $_POST ["content"] . "','"
//                    . $_POST ["published_at"] . "')";
        


if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $title= $_POST['title'];
        $content= $_POST['content'];
        $published_at= $_POST['published_at'];

        if ($title == ''){
            $errors[]='Title is required';
        }

        if ($content == ''){
            $errors[]='Content is required';
        }

        if (empty($errors)){
            
        $conn = getDB();

        $sql = "INSERT INTO article (title, content, published_at)    VALUES (?,?,?)";

        $stmt = mysqli_prepare($conn, $sql);

    //$results = mysqli_query($conn, $sql);

    if ($stmt === false) {

        echo mysqli_error($conn);

    }else {

        //var_dump($sql);

        mysqli_stmt_bind_param($stmt,"sss",$_POST ['title'], $_POST ["content"], $_POST ["published_at"] );

       if(mysqli_stmt_execute($stmt)){

        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";

       }else{

        echo mysqli_stmt_error($stmt);
       }

    }  
}
}

?>

<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<?php if (! empty($errors)) :?>
    
    <?php foreach ($errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
<?php endif; ?>

<form method="post">

<div>
    <label for="title">Title</label>
    <input name="title" id="title" placeholder = "Article title">
</div>
   
<div>
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="40" rows="4" placeholder="Article content"></textarea>
</div>

<div>
    <label for="published_at">Publication date and time</label>
    <input type="datetime-local" name="published_at" id="published_at">
</div>

<button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>