<?php
session_start();
include("headers.php");
include("dbconnection.php");
if(isset($_POST[submit]))
{
		if(isset($_GET[editid]))
		{
			$sql ="UPDATE appointment SET patientid='$_POST[select4]',appointmentdate='$_POST[appointmentdate]',appointmenttime='$_POST[time]',status='$_POST[select]' WHERE appointmentid='$_GET[editid]'";
			if($qsql = mysqli_query($con,$sql))
			{
				echo "<script>alert('appointment record updated successfully...');</script>";
			}
			else
			{
				echo mysqli_error($con);
			}	
		}
		else
		{
			$sql ="UPDATE patient SET status='Active' WHERE patientid='$_POST[select4]'";
			$qsql=mysqli_query($con,$sql);
			
			$sql ="INSERT INTO appointment(patientid, appointmentdate, appointmenttime, status, app_reason) values('$_POST[select4]','$_POST[appointmentdate]','$_POST[time]','$_POST[select]','$_POST[appreason]')";
			if($qsql = mysqli_query($con,$sql))
			{
				
					
				echo "<script>alert('Appointment record inserted successfully...');</script>";
				
			}
			else
			{
				echo mysqli_error($con);
			}
		}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM appointment WHERE appointmentid='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
?>

<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Add New Appointment</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Add new Appointment record</h1>
   <form method="post" action="" name="frmappnt" onSubmit="return validateform()">
    <input type="hidden" name="select2" value="Offline" > 
    <table width="490" border="3">                
        <tr>
          <td width="150">Patient</td>
          <td width="320">
          <?php
		  if(isset($_GET[patid]))
			{
				$sqlpatient= "SELECT * FROM patient WHERE patientid='$_GET[patid]'";
				$qsqlpatient = mysqli_query($con,$sqlpatient);
				$rspatient=mysqli_fetch_array($qsqlpatient);
				echo $rspatient[patientname] . " (Patient ID - $rspatient[patientid])";
				echo "<input type='hidden' name='select4' value='$rspatient[patientid]'>";
			}
			else
			{
		  ?>
                  <select name="select4" id="select4">
                    <option value="">Select</option>
                    <?php
                    $sqlpatient= "SELECT * FROM patient WHERE status='Active'";
                    $qsqlpatient = mysqli_query($con,$sqlpatient);
                    while($rspatient=mysqli_fetch_array($qsqlpatient))
                    {
                        if($rspatient[patientid] == $rsedit[patientid])
                        {
                        echo "<option value='$rspatient[patientid]' selected>$rspatient[patientid] - $rspatient[patientname]</option>";
                        }
                        else
                        {
                            echo "<option value='$rspatient[patientid]'>$rspatient[patientid] - $rspatient[patientname]</option>";
                        }
                        
                    }
                  ?>
                  </select>
          <?php
			}
		?>
          </td>
        </tr>
      
        <tr>
          <td>Appointment Date</td>
          <td><input type="date" name="appointmentdate" id="appointmentdate" value="<?php echo $rsedit[appointmentdate]; ?>" /></td>
        </tr>
        <tr>
          <td>Appointment Time</td>
          <td><input type="time" name="time" id="time" value="<?php echo $rsedit[appointmenttime]; ?>" /></td>
        </tr>
        
        
         <tr>
          <td>Appointment reason</td>
          <td><textarea name="appreason" id="appreason" style="width:300px;height:100px;"><?php echo $rsedit[app_reason]; ?></textarea></td>
         
        </tr>		        
        <tr>
          <td>Status</td>
          <td><select name="select" id="select">
         
          <option value="">Select</option>
          <?php
		  $arr = array("Active","Inactive");
		  foreach($arr as $val)
		  {
			  if($val == $rsedit[status])
			  {
			  echo "<option value='$val' selected>$val</option>";
			  }
			  else
			  {
				  echo "<option value='$val'>$val</option>";			  
			  }
		  }
		  ?>
           </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
       </table>
      </form>
    </div>
</div>

      
    <p>&nbsp;</p>
  
 <div class="clear"></div>
  
<?php
include("footers.php");
?>
<script type="application/javascript">

function validateform()
{
	if(document.frmappnt.select4.value == "")
	{
		alert("Patient name should not be empty..");
		document.frmappnt.select4.focus();
		return false;
	}
	
	
	else if(document.frmappnt.appointmentdate.value == "")
	{
		alert("Appointment date should not be empty..");
		document.frmappnt.appointmentdate.focus();
		return false;
	}
	else if(document.frmappnt.time.value == "")
	{
		alert("Appointment time should not be empty..");
		document.frmappnt.time.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>