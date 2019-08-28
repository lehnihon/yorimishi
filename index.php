<?php
get_header(); ?>
<div id="page">
  <div class="container">
    <div class="row home-about justify-content-center">
      <div class="col-6 text-center">
        <h1 class="mb-4">Yorimichi Izakaya</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum 
hendrerit ante, at aliquet dolor malesuada non. Phasellus et leo auctor, 
pellentesque lacus et, consequat urna.
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum 
hendrerit ante, at aliquet dolor malesuada non. Phasellus et leo auctor, 
pellentesque lacus et, consequat urna.
        </p>
        <a href="#">conheça</a>
      </div>
    </div>
    <div class="row no-gutters galeria-a">
      <div class="col-md-6">
        <div class="row no-gutters">
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto2.jpg"; ?>" /></div>
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto3.jpg"; ?>" /></div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto1.jpg"; ?>" />
      </div>
    </div>
  </div>
  <div class="home-menu">
    <div class="row justify-content-center">
      <div class="col-6 text-center">
        <h2>Conheça nosso Menu</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum 
hendrerit ante, at aliquet dolor malesuada non. Phasellus et leo auctor, 
pellentesque lacus et, consequat urna.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters galeria-b">
      <div class="col-md-6">
        <div class="row no-gutters">
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto5.jpg"; ?>" /></div>
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto6.jpg"; ?>" /></div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto4.jpg"; ?>" />
      </div>
      <div class="col-md-12 mt-5 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum 
  hendrerit ante, at aliquet dolor malesuada non.<br> Phasellus et leo auctor, 
  pellentesque lacus et, consequat urna.</p>
        <a href="#">menu completo</a>
      </div>
    </div>
  </div>
  <div class="home-mapa">
    <div class="embed-responsive embed-responsive-21by9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8664091730698!2d-46.65231558538365!3d-23.573240967915325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59955d252333%3A0x2781f948c462a120!2zUi4gT3TDoXZpbyBOw6liaWFzLCAyMDMgLSBQYXJhw61zbywgU8OjbyBQYXVsbyAtIFNQLCAwNDAwMi0wMTE!5e0!3m2!1spt-BR!2sbr!4v1567014877609!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>
