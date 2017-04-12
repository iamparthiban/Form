<?php 
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Applicant's List</h2>
        <?php        
            if(isset($_GET['delapplicant'])){
                $delid=$_GET['delapplicant'];
                $delquery = "DELETE FROM tbl_applicant where applicant_id='$delid'";
                $deldata = $db->delete($delquery);
                if($deldata){
                   echo "<span class='color:green;font-size:18px;'>Applicant Data Deleted Successfully..!!</span>";
                }else{
                    echo "<span class='color:red;font-size:18px;'>Applicant Data Not Deleted..!!</span>";
                }
            }
        ?>
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Applicant Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Father's Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "select * from tbl_applicant order by applicant_id desc";
                    $applicant=$db->select($query);
                    if($applicant){
                        $i=0;
                        while($result = $applicant->fetch_assoc()){
                            $i++;
                ?>
                <tr class="odd gradeX">
                    <td><?php echo $i;?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['mobile'];?></td>
                    <td><?php echo $result['email'];?></td>
                    <td><?php echo $result['father_name'];?></td>
                    <td>                        
                        <a onclick="return confirm('Are you sure to Delete!?')" href="?delapplicant=<?php echo $result['applicant_id'];?>">Delete</a>
                    </td>
                </tr>   
                <?php }} ?>             
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php 
include 'inc/footer.php';
?>    

