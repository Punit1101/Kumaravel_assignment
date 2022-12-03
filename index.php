<?php
    include "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <style>
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: 0;
    }

    .text_justify{
        text-align: justify;
        text-justify: inter-word;
    }

    .icon_color{
      color: rgb(15, 190, 38);
    }
  </style>
  <body>
    <div class="container-fluid bg-light" data-aos="flip-left">
        <div class="text-center py-4 "><h1><label class="text-white bg-dark px-5" >EMPLOYEE DASHBOARD</label></h1></div>
        <div class="row bg-white justify-content-start mx-5" id="" >
        <?php
          $sql= mysqli_query($conn, "SELECT * FROM emp_table");
          $year = date("Y");
          while($result= mysqli_fetch_array($sql) ){
        ?>
          <div class="col-12 col-md-6 col-lg-4 text-center"  data-aos="fade-in">
            <div class="my-3 py-3 mx-3  text-center shadow">
              <div class="image_img mx-auto" style="width: 180px; height: 180px;">
                  <img src="image/<?php echo $result["image"]; ?>" class="border rounded-circle" alt="" srcset="" style="height: 180px; width: 180px;">
              </div>
              <div class="pt-2" >
                  <h3 class="text-center">
                    <?php
                        if($year - ((int)$result["join_date"])>=5){
                    ?>
                    <i class="fa fa-flag mx-1 pt-2 icon_color" style="font-size: 20px;" aria-hidden="true"></i> 
                    <?php
                        }
                    ?>
                    <?php echo $result["name"]; ?></h3>
                  <p class="text_justify ps-4 mb-0"><b>ID:</b> <?php echo $result["id"]; ?></p>
                  <p class="text_justify ps-4 mb-0"><b>Joining date:</b> <?php echo $result["join_date"]; ?></p>
                  <p class="text_justify ps-4 mb-0"><b>Salary:</b> <?php echo $result["salary"]; ?></p>
                  <p class="text_justify ps-4 mb-0"><b>Designation:</b> <?php echo $result["designation"]; ?></p>
              </div>
            </div> 
          </div>
        <?php
          }
        ?>   
        </div>
          
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>