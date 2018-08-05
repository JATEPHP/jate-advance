<?php
  class ExampleModule extends Html {
    public function init() {
      $this->addFiles([
        "modules/ExampleModule/custom.js",
        "modules/ExampleModule/custom.css"
      ]);
    }
    public function draw() {
      return jBlockFile("modules/ExampleModule/exampleModule-view.html");
    }
  }
?>
