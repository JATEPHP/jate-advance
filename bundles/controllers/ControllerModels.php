<?php
  class ControllerModels extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "Models";
      $this->addModules([
        new ExampleModel()
      ]);
      $this->modules["ExampleModel"]->init();
      $this->tags["content"] = $this->modules["ExampleModel"]->draw();
    }
  }
?>
