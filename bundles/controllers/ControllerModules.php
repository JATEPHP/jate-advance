<?php
  class ControllerModules extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "Modules";
      $this->addModules([
        new ExampleModule()
      ]);
      $this->modules["ExampleModule"]->init();
      $this->tags["content"] = $this->modules["ExampleModule"]->draw();
    }
  }
?>
