<?php
  class ExampleModel extends Html {
    public function init() {
      $this->addFiles([
        "js/custom.js",
        "css/custom.css"
      ]);
    }
    public function draw() {
      return jBlockFile("bundles/views/exampleModule.html");
    }
  }
?>
