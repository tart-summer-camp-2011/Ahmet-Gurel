<?php // this is an autogenerated file - do not edit (created Tue, 18 May 2010 00:15:23 +0200)
spl_autoload_register(
   function($class) {
      static $classes = array(
         'sniffresponse' => '/classes/response.php',
         'sniffresponseexception' => '/classes/response.php',
         'sniffrequest' => '/classes/request.php',
         'sniffviewinterface' => '/classes/viewinterface.php',
         'snifffileupload' => '/classes/fileupload.php',
         'snifffileuploadeexception' => '/classes/fileupload.php',
         'sniffcontroller' => '/classes/controller.php',
         'snifffrontcontroller' => '/classes/front.php',
         'snifffactory' => '/classes/factory.php',
         'sniffdatabase' => '/classes/database.php',
         'sniffdatabaseresult' => '/classes/database.php',
         'snifferrorcontroller' => '/controller/errorcontroller.php',
         'sniffhomecontroller' => '/controller/homecontroller.php',
         'sniffmaincontroller' => '/controller/maincontroller.php',
         'sniffprofilecontroller' => '/controller/profilecontroller.php',
         'sniffprofileeditorcontroller' => '/controller/profileeditorcontroller.php',
         'sniffprofileupdatecontroller' => '/controller/profileupdatecontroller.php',
         'sniffaddfriendcontroller' => '/controller/addfriendcontroller.php',
         'snifflogincontroller' => '/controller/logincontroller.php',
         'sniffregistercontroller' => '/controller/registercontroller.php',
         'snifferrorview' => '/views/errorview.php',
         'sniffstaticview' => '/views/staticview.php'
      );
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
