<?php
 require_once $_SERVER["DOCUMENT_ROOT"]."\includes\PolymerManager.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\LogicManager.php";

 use ArcherSys\Polymer\PolymerView;
 use ArcherSys\Polymer\CoreHeaderPanel;
 use ArcherSys\Polymer\PolymerJSAssetManager;
 use ArcherSys\Viewer\LogicManager;
 
 
 
 
 $avmjjing = new PolymerView("ArcherVMJade Jing App",function(){
     PolymerJSAssetManager::importPolymerModule("core-header-panel","core-header-panel");
     
     PolymerJSAssetManager::importPolymerModule("core-toolbar","core-toolbar");
     ?>
     <style>
         core-toolbar{
             font-family: Segoe UI;
         }
         
     </style>
     <?php
 },function(){
    $chp = new CoreHeaderPanel(function(){
        ?>
          <core-toolbar>
              <div flex>
                  ArcherVMJade
              </div>
              </core-toolbar>
           <section>
              <?php
              LogicManager::addJSModule("http://repl.it/embed/pv9/61");
              ?>
           </section>
          
        <?php
    });
      
     
 });

?>
