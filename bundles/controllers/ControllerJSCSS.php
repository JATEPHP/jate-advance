<?php
  class ControllerJSCSS extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "JS-CSS";
      $this->addFiles([
        "js/custom.js",
        "css/custom.css"
      ]);
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      return jBlockFile("bundles/views/jscss.html");
    }
  }
?>
