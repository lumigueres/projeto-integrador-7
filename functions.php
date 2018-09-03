<?php
function buildExperience($experiencia) {
?>
<a href="#">
  <article class="product col-lg-4 col-sm-6 col-xs-12">
    <img src="images/<?php echo $experiencia['image']; ?>" alt="<?php echo $experiencia['type']; ?>" class="img-responsive">
    <img src="images/<?php echo $experiencia['icon']; ?>" alt="<?php echo $experiencia['type']; ?>" class="icone">
  </article>
</a>
<?php
}
?>
