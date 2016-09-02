<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEWS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    
        html,body{
            background:url('https://hd.unsplash.com/photo-1468779065891-103dac4a7c48') repeat center;
            background-size:cover;
        }
        table ,h1{
                color:aliceblue;
        }
        
    </style>
</head>
<body>
   <div class="container">
      <h1>NEWS</h1>
       <div class="col-md-12">
           <div class="btn btn-success"><a href="create.php">CREATE</a></div>
            <table class="table table-bordered">
                <th>ID</th>
                <th>TITLE</th>
                <th>TEXT</th>
                <th>PHOTO</th>
                <th>INSERT TIME</th>
                <th>VIEW COUNT</th>
            <tbody>
                <?php 
                
                include "db.php"; 
                $insertNews = new Database('localhost','root','','blog');   
                
                $newQuery = $insertNews->select_news('news');
                
                while($row = mysqli_fetch_assoc($newQuery)){
                    ?> <tr> <?php 
                    foreach($row as $key => $value){
                        ?> <td><?= $value ?></td> <?php
                    } ?>
                      </tr> <?php
                }
                
                ?>
            </tbody>
           </table>
       </div>
        <button class="btn btn-default"><a href="../admin.php">BACK to ADMIN PANEL</a></button>
       </div>
    </div>
</body>
</html>