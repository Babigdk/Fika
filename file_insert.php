<html>
<head><title>File Insert</title></head>
<body>
<h3>Please Choose a File and click Submit</h3>
<form action="file_display.php" enctype="multipart/form-data" method="post"> 
      <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5"> 
           <tbody>
                <tr> 
                  <td> 
                    <input name="uploadedimage" type="file"> 
                  </td>    
                </tr> 
                <tr> 
                   <td> 
                     <input name="Upload Now" type="submit" value="Upload Image"> 
                   </td> 
                 </tr>  
          </tbody>
      </table> 
</form> 
</body>
</html>