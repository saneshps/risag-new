<!DOCTYPE html>
<html lang="en">

<head>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         font-size: 13px;
      }

      .email-container {
         max-width: 600px;
         margin: 0 auto;
         padding: 20px;
         background: #eeeeee61;
         border-radius: 12px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         font-size: 13px;
         line-height: 15px;
      }
   </style>
</head>

<body>
   <!-- ========================
               SALES APP START
         ========================= -->
   <table class="email-container" cellpadding="0" cellspacing="0" width="100%">

      <tr align="center">
         <td>
            <!-- =====================
                        LOGO START
                  ===================== -->
            <table style="margin: 0 auto; height: 100%; text-align: center;">
               <tr cellpadding="0" cellspacing="0">
                  <td cellpadding="0" cellspacing="0" style="text-align: center;">
                     <img src="https://risagrobotics.com/assets/img/email/logo-black.png" alt="logo"
                        style="width: 150px; height: auto; padding-bottom: 40px; padding-top: 40px;">
                  </td>
               </tr>
            </table>
            <!-- ===================
                        LOGO END
                  =================== -->
            <!-- ==================
                        NAME START
                  ================== -->
            <table style="width:100%; margin: 0 auto; height: 100%; ">
               <tbody>

                  <tr>
                     <td style="text-align: left; padding-left: 30px; padding-bottom: 9px; font-size: 14px;">
                        <strong> Name :</strong>
                     </td>
                     <td> {{name}} </td>
                  </tr>
                  <tr>
                     <td style="text-align: left; padding-left: 30px; padding-bottom: 9px; font-size: 14px;">
                        <strong> Email :</strong>
                     </td>
                     <td> {{email}} </td>
                  </tr>
                  
                  <tr>
                     <td style="text-align: left; padding-left: 30px;padding-bottom: 9px; font-size: 14px;">
                        <strong>Phone :</strong>
                     </td>
                     <td> {{phone}}</td>
                  </tr>
                  {{productRow}}
               </tbody>
            </table>
            <!-- =================
                        NAME END
                  ================= -->
            <!-- ==========================
                           PRODUCTS START
                  ========================== -->
            <table>
               <tr>
                  <td
                     style="text-align: left; padding-left: 30px; padding-bottom: 9px; font-size: 14px; padding-right: 30px; padding-top: 20px;">
                     <h3
                        style="background-color: #2a2a2e; padding-top: 10px; padding-left: 15px; padding-bottom: 10px; color: #fff;">
                        Message
                     </h3>
                  </td>
               </tr>
               <tr>
                  <td
                     style="text-align: left; padding-left: 30px; padding-bottom: 9px; font-size: 14px; line-height: 22px;">
                    {{message}}
                  </td>
               </tr>

            </table>
            <!-- ==========================
                        PRODUCTS END
                  ========================== -->
            <br>
            <br>
            <!--==========================
                        FOOTER START
                  ==========================   -->
            <table>
               <tr>
                  <td style="text-align: left; padding-left: 30px;padding-bottom: 9px; font-size: 14px;">
                     <table style="width: 100%; border-spacing: 0; ">
                        <tr>
                           <td>
                              <div style=" text-align: center; padding-right: 30px;">
                                 <img src="https://risagrobotics.com/assets/img/email/logo-black.png" alt="logo"
                                    style="width: 100px; height: auto; padding-bottom: 10px;">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td
                              style="width:100%; text-align: center; font-size: 12px; line-height: 11px;padding-right: 30px;">
                              <p> Risag Robotics </p>
                              <a> OFFICE NO. LV-27D </a>
                              <a> -- </a>
                              <a> PO BOX 42167 </a>
                              <p>
                                 <a> HAMRIYAH FREE ZONE PHASE 2 </a>
                                 <a> -- </a>
                                 <a> SHARJAH, UAE </a>
                              </p>
                           </td>
                        </tr>
                        <tr align="center">
                           <td colspan="3">
                              <table style="margin: 0 auto; height: 100%;">
                                 <tr style="height: 100%;">
                                    <td
                                       style="text-align: center; vertical-align: middle; width: 50%; padding-top: 5px;padding-right: 30px;">
                                       <div style="margin-bottom: 0px;">
                                          <a style="color: #333; text-decoration: none; font-size: 12px; padding-right: 8px;"
                                             href="tel:+971565442665">
                                             Tel: +971 56 544 2665 </a>
                                          <a style="  text-decoration: none;"> || </a>
                                          <a
                                             style="color: #333; text-decoration: none; font-size: 12px; padding-left: 8px;">
                                             Fax: +971 65 26 43 84 </a>
                                       </div>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>

                        <!-- Social Media Links -->
                        <!--<tr>-->
                        <!--   <td>-->
                        <!--      <table>-->
                        <!--         <tr>-->
                        <!--            <td-->
                        <!--               style="text-align: center; vertical-align: middle; width: 50%; padding-top: 5px;padding-right: 30px;">-->
                        <!--               <div>-->
                        <!--                  <a href="https://www.facebook.com/people/YES-Machinery/100038284281405/"-->
                        <!--                     target="_blank" style="text-decoration: none;">-->
                        <!--                     <img src="https://risagrobotics.com/assets/img/email/facebook.png" alt="facebook"-->
                        <!--                        style="width: 20px; height: auto; padding-right: 10px; padding-top: 10px;">-->
                        <!--                  </a>-->
                        <!--                  <a href="https://www.youtube.com/channel/UCP7740uadpBDFE2l9AU-a9w"-->
                        <!--                     target="_blank" style="text-decoration: none;">-->
                        <!--                     <img src="https://risagrobotics.com/assets/img/email/youtube.png" alt="youtube"-->
                        <!--                        style="width: 20px; height: auto; padding-right: 10px; padding-top: 10px;">-->
                        <!--                  </a>-->
                        <!--                  <a href="https://www.linkedin.com/company/yes-machinery/" target="_blank"-->
                        <!--                     style="text-decoration: none;">-->
                        <!--                     <img src="https://risagrobotics.com/assets/img/email/linkedin.png" alt="linkedin"-->
                        <!--                        style="width: 20px; height: auto; padding-right: 10px; padding-top: 10px;">-->
                        <!--                  </a>-->
                        <!--                  <a href="https://www.instagram.com/yes_machinery/" target="_blank"-->
                        <!--                     style="text-decoration: none;">-->
                        <!--                     <img src="https://risagrobotics.com/assets/img/email/instagram.png" alt="instagram"-->
                        <!--                        style="width: 20px; height: auto; padding-right: 10px; padding-top: 10px;">-->
                        <!--                  </a>-->
                        <!--               </div>-->
                        <!--            </td>-->
                        <!--         </tr>-->
                        <!--      </table>-->
                        <!--   </td>-->

                        <!--</tr>-->
                        <!-- Social Media Links -->
                     </table>
                  </td>
               </tr>
            </table>
            <!-- ==========================
                           FOOTER END
                  ========================== -->
            <br>
            <!-- ==========================
                        FOOTER BOTTOM START
                  ========================== -->
            <table>
               <tr>
                  <td style="text-align: center;   padding-top: 0px; font-size: 14px;">
                     <p
                        style="background-color: #2a2a2e; padding-top: 10px; padding-left: 15px; padding-bottom: 10px; color: #fff; margin: 0;">
                        <a href="https://risagrobotics.com/" target="_blank"
                           style="text-decoration: none; color: #fff; margin: 0;">
                           www.risagrobotics.com </a>
                     </p>
                  </td>
               </tr>
            </table>
            <!-- ==========================
                        FOOTER BOTTOM END
                  ========================== -->
         </td>
      </tr>

   </table>
   <!-- ========================
               SALES APP END
         ========================= -->
</body>

</html>