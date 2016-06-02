


      <script type="text/javascript">
            function getConfirmation(b){
               var a = confirm("Do you want to delete ?");
               if( a == true ){  
                  window.location = 'index.php?h=tintuc&action=deletecategory&id='+b;
               }
               else{
                 return false;
              }
        }
      </script>
<table class="table table-bordered">
  <tr>
    <th>categoryname</th>
    <th>SỬA</th>
    <th>XÓA</th>
  </tr>
 <?php foreach($data as $row): ?>
  <tr>
    <th><?php echo $row['catename'] ?></th>
    <th><a href="index.php?h=tintuc&action=editcategory&id=<?php echo $row['cateid']?>">SỬA</a></th>
    <th><button onClick="getConfirmation(<?php echo $row['cateid'];?>)" type="submit">XÓA</button></th>
  </tr>
  <?php endforeach; ?>
</table>
<a href="index.php?h=tintuc&action=allnews" class="btn btn-primary">Trang Tin Tức<a>
