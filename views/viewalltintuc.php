      <script type="text/javascript">
            function getConfirmation(b){
               var a = confirm("Do you want to delete ?");
               if( a == true ){  
                  window.location = 'index.php?h=tintuc&action=deletetintuc&id='+b;
                
               }
               else{
                 return false;
                  }
        }
      </script>

    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Trang Tin Tức</h2>
                <div class="table-responsive">    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CATERGORY</th>
                                <th>TITLE</th>
                                <th>CONTENT</th>
                                <th>SỬA</th>
                                <th>XÓA</th>
                            </tr>
                            <?php foreach ($data as $value): ?>
                        </thead>
                                <tr>
                                <td width="50"><?php echo $value['id'];?></td>
                                <td width="150"><?php echo $value['catename'];?></td>
                                <td width="300"><?php echo $value['title'];?></td>
                                <td width="500"><?php echo $value['content'];?></td>
                                <td width="50"><a href="index.php?h=tintuc&action=edittintuc&id=<?php echo $value['id']?>">SỬA</a></td>
                                 <td width="50"><button type="submit" onclick="getConfirmation(<?php echo $value['id']?>)">XÓA</button></td>
                                <tr>
                            <?php endforeach; ?>
                    </table>
                </div>
                <div class="paging">
                    <ul>                    
                        <?php if (isset($page) && $page != 1): ?>                       
                        <li><a href="index.php?h=tintuc&action=allnews&page=1">FIRST</a></li>
                        <?php if ($page > 1): ?>
                        <li><a href="index.php?h=tintuc&action=allnews&page=<?php echo $page-1 ?>"><<</a></li>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php 
                        $pageStart = $page-2;
                        if ($pageStart < 1 )
                        {
                            $pageStart = 1;
                        }
                        
                        $pageEnd = $page+2;
                        if ($pageEnd > $pageNumbers )
                        {
                            $pageEnd = $pageNumbers;
                        }
                        if ($pageStart > 1 )
                        {
                            echo "<li>.....</li>";
                        }
                        
                        
                        for ($i = $pageStart; $i <= $pageEnd; $i++)
                        {
                            if ($i == $page)
                            {
                                echo "<li class=\"page-active\">$i</li>";
                            }
                            else
                            {
                                echo "<li><a href=\"index.php?h=tintuc&action=allnews&page=$i\">$i</a></li>";
                            }
                        }
                        
                        if ($pageEnd < $pageNumbers )
                        {
                            echo "<li>.....</li>";
                        }
                        ?>
                        
                        <?php if ($page != $pageNumbers): ?>
                        <?php if ($page < $pageNumbers): ?>
                        <li><a href="index.php?h=tintuc&action=allnews&page=<?php echo $page+1 ?>">>></a></li>
                        <?php endif; ?>
                        <li><a href="index.php?h=tintuc&action=allnews&page=<?php echo $pageNumbers?>">LAST</a></li>                 
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div>
                <a href="index.php?h=tintuc&action=addtintuc" class="btn btn-primary">THÊM TIN TỨC</a>
                <a href="index.php?h=tintuc&action=addca" class="btn btn-success">THÊM CATEGORY</a>
                <a href="index.php?h=tintuc&action=allcategory" class="btn btn-info">CATEGORY</a>
                <a href="index.php?h=user&action=destroy" class="btn btn-warning">ĐĂNG XUẤT</a>

            </div>
        </div>
 
    </div>




