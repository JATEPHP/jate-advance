<?php
  class ControllerjBlock extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "jBlock";
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
      jBlock();
      ?>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h2>Html</h2>
            <div>Plane Html example</div>
          </div>
        </div>
      </div>
      <?php
      $temp = jBlockClose();
      return $temp;
    }
    public function Markdown() {
      jBlock();
      ?>
      ## Markdown
      Markdown example
      <?php
      $temp = jBlockClose("md");
      return "<div class='col-md-3'><div class='card'><div class='card-body'>$temp</div></div></div>";
    }
    public function Twig() {
      jBlock();
      ?>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h2>Twig</h2>
            <div>{{tag}}</div>
          </div>
        </div>
      </div>
      <?php
      $temp = jBlockClose("twig", ["tag" => "Twig example"]);
      return $temp;
    }
    public function Pug() {
      jBlock();
      ?>
      .col-md-3
        .card
          .card-body
            h2 Pug
            div= tag
      <?php
      $temp = jBlockClose("pug", ["tag" => "Pug example"]);
      return $temp;
    }
  }
?>
