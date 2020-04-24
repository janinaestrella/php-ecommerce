<?php
   require_once './../partials/template.php';

  
   function get_content(){ 
?>
   <div class="container">
      <div class="row my-5">
         <div class="col-12 col-sm-10 col-md-8 mx-auto">
            <form action="./../controllers/process_category.php" method="post">
               <div class="form-group">
               <label for="catname">Category Name</label>
               <input type="text" name="catname" id="catname" class="form-control">
               </div>
               
               <button type="submit" class="btn btn-primary">Add Category</button>

            </form>
            
            <div>
               <ul>
                  <?php   
                  require './../controllers/connection.php';
                  
                  $sql_select = "SELECT * FROM categories";
                  $select = mysqli_query($conn,$sql_select); 

                  while ($row = mysqli_fetch_assoc($select)){ ?>
                                                            
                     <li><?php echo $row['name'] ?></li>
                  
                  <?php }; ?> 
              
               </ul>
            </div>
         
         </div>
      </div>
   </div>

      
<?php
   };
?>