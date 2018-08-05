<?php
  class ControllerParameters extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "Parameters";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      return jBlockFile("bundles/views/parameters.twig", [
        "url"    => $this->page["foo"],
        "router" => $this->page[0]
      ]);
    }
  }
?>
