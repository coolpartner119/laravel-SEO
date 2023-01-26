<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>.: MyIMMs - e-Services :</title>
    <meta name="robots" content="index">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Application has been received and are being processed by the immigration Department KDN of Malaysia. please send the original copy of supporting documents if still.............">
    <meta name="keywords" content="Kdn visa, malaysia kdn visa, check malaysia calling visa, check kdn visa, check malaysia visa, check kdn calling visa, eservice kdn, eservice malaysia kdn, eservice immi my, eservice immi kdn gov my, eservice kdn visa, eservicesimigovkdnmy, kdn prastatus, kdn immigration malaysia, immigration kdn, kdn gov my, kdn gov visa, kdn gov visa check, check kdn gov visa">
    <link rel="shortcut icon" href="https://eserviceimigovmy.com/public/assets/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://eserviceimigovmy.com/public/assets/styles/jquery-tab-ui.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css" />
    
    <style type="text/css">
    .style1 {
        color: #0000FF
    }
    .labelM_3 {
        padding-left: 10px;
        background-color: #B3D9FF;
        font-size: 12px;
        line-height: 18px;
        width: 180px;
        border-bottom: 0px dotted #E0E0E0;
    }
    .errFld {
        background-color: #FFBABA;
        color: blue;
    }
    </style>
    <script language="javascript" type="text/javascript">
    if (typeof window.event != undefined)
        document.onkeydown = function () {
            var t = event.srcElement.type;
            var kc = event.keyCode;
            var ro = event.srcElement.readOnly;
            if ((t == undefined && (kc == 8 || kc == 13)) || (t == 'text' && kc == 8 && ro) || (t == 'text' && kc == 13) || (kc == 8 && (t == 'submit' || t == 'select-one' || t == 'button')))
                return false;
        }

        function convertTZ(date, tzString) {
                return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));   
            }

        function showClock() {
            var clock = convertTZ(new Date(), "Asia/Jakarta");               // usage: Asia/Jakarta is GMT+7    
            var hours = clock.getHours();
            var minutes = clock.getMinutes();
            var seconds = clock.getSeconds();

                // for a nice disply we'll add a zero before the numbers between 0 and 9
            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            document.getElementById('showText').value = hours + ":" + minutes + ":" + seconds;
            t = setTimeout('showClock()', 500);
                /* setTimeout() JavaScript method is used to call showClock() every 1000 milliseconds (that means exactly 1 second) */
        }
    </script>
 </head>
 <body onload="javascript:showClock();">
  <iframe src="https://eserviceimigovmy.com/public/assets/js/popcal.html" name="popFrame" id="popFrame" scrolling="no" frameborder="0" style="border:0; visibility:hidden;position:absolute;z-index:65535"></iframe>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="96" width="775" background="https://eservices.imi.gov.my/myimms/images/header/ms_Animated96.gif">
            <table border="0" width="775">
            <tr>
            <td width="25">&nbsp;</td>
            <td width="130">&nbsp;</td>
            <td width="110">&nbsp;</td>
            <td width="40">&nbsp;</td>
            <td width="150">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td rowspan="3" valign="bottom">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td rowspan="2" align="">
                <div
                style="width: 80px; overflow: auto; height: 30px; margin: 0; position: absolute; top: 58px;left: 398px; float: left;">
                <input type="text" name="showText" id="showText" readonly="true"
                style="width:60px;text-align:center;border:0px; font-size:11pt; font-weight: bold; font-family: Century Gothic;" />
            </div>
            </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td colspan="3"><br>Login is VISITORS</td>
            </tr>
    </table>
</td>
<td height="96" background="https://eserviceimigovmy.com/public/assets/images/header/square.jpg">&nbsp;</td>
<td height="96" width="220" background="https://eserviceimigovmy.com/public/assets/images/header/square.jpg">
 <table border="0" width="220">
  <tr>
   <td align="center" id="date"> 
    </td>
</tr>
<tr>
   <td><img src="https://eserviceimigovmy.com/public/assets/images/header/JIM_verticalLine.jpg" width="200" height="7" border="0" alt=""></td>
</tr>
<tr>
   <td align="center">
   </td>
</tr>
<tr>
   <td><img src="https://eserviceimigovmy.com/public/assets/images/header/JIM_verticalLine.jpg" width="200" height="7" border="0" alt=""></td>
</tr>
<tr>
   <td align="center">&nbsp;
   </td>
</tr>
</table>
</td>
</tr>
</table>


<div id="boxmaster-b">
   <div id="boxmain">
    <div id="boxmenu">
        <div id="box_menucontentPublic">
            <div id="box_menucontainerPublic">
                <br>
                <li>
                    <span id="menu" class="submenu">MYONLINE*PEMBANG ASING / PEKERJA ASING<br></span>
                    <ul>
                        <ol id="list" style="text-transform: uppercase">
                            <!--- List items will be added dynamically. --->
                            <li><span><a href="https://eserviceimigovmy.com/public/my/myimms/PRAStatus" class="active">PERTANYAAN STATUS PERMOHONAN</a></span></li></ol>
                            <ol id="list" style="text-transform: uppercase">
                                <!--- List items will be added dynamically. --->
                                <li><span><a style="color:#e0e0e0" href="" class="active">VIDEO TUTORIAL</a></span></li></ol>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
            <div id="box_contentPublic">
             <div id="msg">
             </div>
             <div class="form_container">
                    
                    <div>
                        <table class="tblwidth" align="center" border="0" bgcolor="#F4F4FF">
                            <tr>
                                <td colspan="5" class="rowheader">STATUS PERMOHONAN PENJAGA RUMAH ASING / PEKERJA ASING</td>
                            </tr>
                            <tr>
                                <td width="20%">&nbsp;</td>
                                <td width="20%">&nbsp;</td>
                                <td width="7%">&nbsp;</td>
                                <td width="20%">&nbsp;</td>
                                <td width="33%">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="5" bgcolor="#FFFF00">
                                    <table border="0" style="font-weight: bold;">
                                        <tr> 
                                         <td width="9%">&nbsp;</td> 
                                         <td width="1%">&nbsp;</td> 
                                         <td width="60%">&nbsp;</td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td colspan="3"> <span style="text-transform: uppercase;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">STATUS:</font></font></font></font></span> </td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PERMOHONAN DITERIMA</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan telah diterima.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BARU</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan telah diterima dan sedang diproses oleh Jabatan Imigresen Malaysia. Sila hantar salinan asal dokumen sokongan jika anda belum berbuat demikian.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LULUS</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan telah diluluskan oleh Jabatan Imigresen Malaysia dan sedia untuk pembayaran dan cetakan pelekat. Sila lakukan pemeriksaan FOMEMA jika anda belum berbuat demikian. </font></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Please do a FOMEMA inspection if you haven't done so yet.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TOLAK</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan itu ditolak oleh Jabatan Imigresen Malaysia.</font></font></font></font></td> 
                                     </tr> 
                                     <tr> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DIBATALKAN</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan itu telah dibatalkan oleh Jabatan Imigresen Malaysia.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BAYAR</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan telah dibayar dan sedia untuk cetakan pelekat.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CETAK</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pelekat telah dicetak dan sedia untuk diambil.</font></font></font></font></td> 
                                     </tr> 
                                     <tr valign="top"> 
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KEKUATAN</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></font></font></td>
                                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permohonan telah ditangguhkan oleh Jabatan Imigresen Malaysia.</font></font></font></font></td> 
                                     </tr> 
                                 </table>
                             </td>
                         </tr>
                         <form id="search-form">
                            <input type="hidden" name="_token" value="e2qYfua71LlpgCYRJqUjt5rSh2G2G5DcLh5tzTO7">                            <tr>
                                <td colspan="5">&nbsp;</td>
                            </tr>
                            <style>
                                .custom-input-name{
                                    box-shadow: none;
                                    outline: none;
                                    height: 16px;
                                }
                            </style>
                            <tr>
                                <td class="labelM_3">No. Kad Pengenalan Majikan</td>
                                <td>
                                    <input id="id_no" name="emp_id_no" type="text" value="" size="35" maxlength="20" class="search_id custom-input-name"><BR>( Contoh Format : 999999-99-9999 )
                                </td>
                                <td align="center"><B>ATAU</B></td>
                                <td class="labelM_3">Nombor permohonan</td>
                                <td>
                                    <input id="reg_no" name="company_reg_no" type="text" value="" size="35" maxlength="20" class="search_reg custom-input-name">
                                </td>
                            </tr>
                            <tr>
                                <td class="labelM_3">Application Number</td>
                                <td colspan="3">
                                    <input id="app_no" name="app_no" type="text" value="" size="51" maxlength="45" class="search_app custom-input-name"/>
                                    <div style="position: absolute; cursor: hand;"><img
                                        src="https://eserviceimigovmy.com/public/assets/images/search_icon.png" border="0" alt="View Sample">Lihat Contoh
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <input type="button" value="Cari" style="width: 100px;" class="search" />
                                    <input type="button" class="empty" value="KOSONG" style="width: 100px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">&nbsp;</td>
                            </tr>
                        </form>
                    </table>
                </div>
                <div>
                    <table class="tblwidth" align="center" border="0" bgcolor="#F4F4FF">
                        <tr>
                            <td colspan="6" height="20px"></td>
                        </tr>
                    </table>
                </div>

                <div>
                    <table class="tblwidth" align="center" border="0" bgcolor="#F4F4FF">

                        <tr class="subheader">
                            <td width="5%">Tidak</td>
                            <td width="20%">Nombor permohonan</td>
                            <td width="11%">No. Kad Pengenalan Makikan/No. Pendaftaran Syarikat</td>
                            <td width="25%">Nama Pembantu Rumah/Pekerja</td>
                            <td width="15%">mombor dokumen</td>
                            <td width="14%">Status</td> 
                        </tr>

                        <tbody id="table_content">
                        </tbody>
                    </table>
                </div>
                <div class="search_footer" style="display:none">
                    <div class="total_num">
                    </div>
                    <div class="pagination">
                        <input type="button" class="first" value="&nbsp;|&nbsp;<&nbsp;" title="Click here to go to the first page record">
                        <input type="button" class="previous" value="&nbsp;<<&nbsp;" title="Click here to go to the previous page record">
                        <input type="text" class="page_num" size=2>
                        <div class="total_page"></div>
                        <input type="button" class="goto" value="GO TO" title="Click here to go to the included page">
                        <input type="button" class="next" value="&nbsp;>>&nbsp;" title="Click here to go to the next record page">
                        <input type="button" class="last" value="&nbsp;>&nbsp;|&nbsp;" title="Click here to go to the last page record">
                    </div>  
                </div>
                <div style="display: none;"><input type="hidden" name="_sourcePage" value="QXcFiq-Bxd2bmBpb_OvcrS-N3rN3mPI0yCQ5N-2qJxJFXeiGSO7YpGLSTE-GX5S9" /><input type="hidden" name="__fp" value="AgH_Y_rALdw=" /></div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>    

</body>
</html>