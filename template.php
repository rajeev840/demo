<?php
@session_start();
//Page Detailed Information
/*Form Name		          : 
 *Difficulty level        : 
 *Description	          : 
 *Author                  : Rajeev Ranjan
 *Date                    : 23/8/2014
 *Modified By             : 
 *Date of Modification    : 
 *Purpose of Modification : 
*/ 
$sModuleName='';
require $DOCUMENT_ROOT."/ois/$sModuleName/forms/session.php";
//Role Checking
if($srolename != 'PPT Executive')
{
   	echo "<html><body><bgcolor=\"#ffffff\"><font face=\"arial\" color=\"red\"><p>&nbsp;</p><h1 align=center>You are Not Authorized to View this Page</h1>";
   	echo "<form><p align=center><input type=button value=\" << Back  \" onClick=self.history.back() style=\"font-weight:bold; height:25; width:100; BACKGROUND-COLOR:#9999cc;color:white\"></p></form></body></html>";
	exit;
}
require_once($DOCUMENT_ROOT."/ois/$sModuleName/classes/AllClasses.php");
$objValid = new clsvalid();

?>
<html>
    <head>
        <link type="text/css" href="../../css/NewOisStyleSheet.css" rel="stylesheet" />
        <script language="JavaScript" src="../../js/winDisabledEnabled.js"></script>        
        <title>
            Update Test
        </title>
    </head>    
    <body>
        <form name="frmUpdateTest" method="POST" enctype="multipart/form-data">
            <div id="hide" style="display:block; text-align:center; padding-top:15%;">
        		<img src="../../images/pleasewait.gif" alt="pleasewait" />
            </div>
            <div id="show" style="display:none;">
                <?php
                    require $DOCUMENT_ROOT."/ois/welcomemsg.php";
                ?>
                <h1>Update Test</h1>
                <?
            		$sback = "frmMaintainTestSwitchBoard.php";
            		require $DOCUMENT_ROOT."/ois/$sModuleName/forms/locbar.php";
                ?>
                <br/>
                <table align="center" class="stdFrmTable" width="90%" cellpadding="6" cellspacing="0" border="0">
                    <tr>
                        <td align="center">
                            <img src="underconstruction.gif" alt="underconstruction" />
                        </td>
                    </tr>
                </table>
                <br/>
                <?
            		require $DOCUMENT_ROOT."/ois/$sModuleName/forms/locbar.php";
                ?>
            </div>
        </form>
	</body>
	<script language="javascript" type="text/javascript">
		winEnabled();
	</script>
</html>
