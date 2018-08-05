<?php
  class ControllerjBlockFile extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "jBlockFile";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      return
        $this->PlaneHtml().
        $this->Markdown().
        $this->Twig().
        $this->Pug();
    }
    public function PlaneHtml() {
      return jBlockFile("bundles/views/jBlockFileExample/ControllerjBlockFile.html");
    }
    public function Markdown() {
      $temp = jBlockFile("bundles/views/jBlockFileExample/ControllerjBlockFile.md");
      return "<div class='col-md-3'><div class='card'><div class='card-body'>$temp</div></div></div>";
    }
    public function Twig() {
      return jBlockFile("bundles/views/jBlockFileExample/ControllerjBlockFile.twig", [
        "tag" => "Twig example"
      ]);
    }
    public function Pug() {
      return jBlockFile("bundles/views/jBlockFileExample/ControllerjBlockFile.pug", [
        "tag" => "Pug example"
      ]);
    }
  }
?>
