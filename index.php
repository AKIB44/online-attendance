<title>Online Attendance </title><style type="text/css">
<!--
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: #000000 ;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: #0000FF;
}
.style6 {font-size: 18px}
-->
</style></head>

<body><br>
<table width="900" border="6" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#CCCCFF"><marquee><h1 align="center"><strong><span class="style1"> *****Online Attendance System*****</span></strong></h1></marquee></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center"><br><br>
       						<?php 
									include "menu.php";
							?> <br><br>
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center"><br>
        <form action="insertmember.php" method="post">
          <table width="400" border="4" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
            <tr>
              <td colspan="2" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the member information</span></strong></div></td>
            </tr>
            <tr>
              <td width="160"><br><span class="style6">Student Name</span></td>
              <td width="222"><span class="style6"><input type="text" name="name" /></span></td>
            </tr>
            <tr>
              <td><br><span class="style6">Mobile</span></td>
              <td><span class="style6"><input type="text" name="mobile" /></span></td>
            </tr>
            <tr>
              <td><br><span class="style6">Email</span></td>
              <td><span class="style6"><input type="email" name="email" /></span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"><br>
                <input type="submit" value="Add Member" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
  <br>    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
	
<?php include "footer.php"; ?>
</body>
</html>
