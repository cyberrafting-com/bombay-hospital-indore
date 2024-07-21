<html>
         <body>
         <table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6">
         <tbody>
         <tr>
         <td width="10" bgcolor="#B33C3F" style="width:10px;background:linear-gradient(to bottom,#B33C3F 0%,#B33C3F 89%);background-color:#B33C3F">&nbsp;</td>
         <td valign="middle" align="center" height="50" bgcolor="#B33C3F" style="background:linear-gradient(to bottom,#B33C3F 0%,#B33C3F 89%);background-color:#B33C3F;padding:0;margin:0"><a style="text-decoration:none;outline:none;color:#ffffff;font-size:13px" href="http://www.bombayhospitalindore.com/" target="_blank">
         Bombay Hospital Indore</a></td>
         <td valign="middle" align="right" height="50" bgcolor="#B33C3F" style="background:linear-gradient(to bottom,#B33C3F 0%,#B33C3F 89%);background-color:#B33C3F;padding:0;margin:0"><a style="text-decoration:none;outline:none;color:#ffffff;font-size:12px" href="" target="_blank">
         </a></td>
         <td width="10" bgcolor="#B33C3F" style="width:10px;background:linear-gradient(to bottom,#B33C3F 0%,#B33C3F 89%);background-color:#B33C3F">&nbsp;</td>
         </tr>
         </tbody>
         </table>
         <table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6">
         <tbody>
         </tbody>
         </table>
         <table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6">
         <tbody>
         <tr>
         <td align="left" valign="top" style="color:#2c2c2c;display:block;line-height:20px;font-weight:300;margin:0 auto;clear:both;border-bottom:2px dashed #ccc;background-color:#f9f9f9;padding:20px" bgcolor="#F9F9F9"><p style="padding:0;margin:0;font-size:16px;font-weight:bold;"> Hi Admin <br>
            A new patient has admitted in hospital. 
            His/Her detail are given as follows:
         </p>
         <br>
         <p style="padding:0;margin:0;color:#565656;line-height:22px;font-size:10px"></p>

         <table width="100%">
            <tr>
               <td width="50%"> <strong> Patiemnt Name : </strong> 
               <?php if(!empty($patient_name)){ echo ucfirst($patient_name); } ?>  
               </td>
               <td width="50%"> <strong> BPL No. : </strong> 
               <?php if(!empty($bed_no)){ echo ucfirst($bed_no); } ?> 
               </td>
            </tr>
            <tr>
               <td width="50%"><strong> Adhar Card No : </strong> 
                 <?php if(!empty($card_no)){ echo ucfirst($card_no); } ?>
               </td>
               <td width="50%"><strong> Address : </strong>
                 <?php if(!empty($address)){ echo ucfirst($address); } ?>
               </td>
            </tr>
            <tr>
               <td width="50%"><strong> Age : </strong> 
                 <?php if(!empty($age)){ echo ucfirst($age); } ?> Years
               </td>
               <td width="50%"><strong> Gender : </strong> 
                 <?php if(!empty($gander)){ echo ucfirst($gander); } ?>
               </td>
            </tr> 
            <tr>
               <td width="50%"><strong> City : </strong>
                 <?php if(!empty($city)){ echo ucfirst($city); } ?>   
               </td>
               <td width="50%"><strong> Specialty id : </strong>
                 <?php if(!empty($specialty)){ echo $specialty; } ?>
               </td>
            </tr>
            <tr>
               <td width="50%"> <strong> Bed No. : </strong>
                  <?php if(!empty($bed_no)){ echo ucfirst($bed_no); } ?>
               </td>
               <td width="50%"> <strong> Unit type : </strong>
                  <?php if(!empty($unit_type)){ echo ucfirst($unit_type); } ?>
               </td>
            </tr> 
            <tr>
               <td width="50%"><strong> Admin Date : </strong>  
                  <?php if(!empty($admit_date)){ echo ucfirst($admit_date); } ?>
               </td>
               <td width="50%"> <strong> Doctor : </strong>
                  <?php if(!empty($doctor)){ echo ucfirst($doctor); } ?>
               </td>
            </tr>
         </table>
         </td></tr> 
         </tbody>
         </table>
         <table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;border:solid 1px #e6e6e6;border-top:none">
         <tbody>
         <tr>
         <td valign="top" align="center" style="text-align:center;background-color:#f9f9f9;display:block;margin:0 auto;clear:both;padding:15px 40px" bgcolor=""><p style="padding:0;margin:0 0 7px 0">
         <a title="mostlikers.com" style="text-decoration:none;color:#565656" href="http://www.bombayhospitalindore.com/" target="_blank"><span style="color:#565656;font-size:13px">www.bombayhospitalindore.com</span></a>
         </p>
        </td> 
     </tr> </tbody>
         </table>
         </body>
         </html>