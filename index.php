<?php
get_header(); ?>
<div id="page">
  <div class="container">
    <div id="sobre" class="row home-about justify-content-center">
      <div class="col-sm-6 text-center">
        <h1 class="mb-4">Yorimichi Izakaya</h1>
        <p>
        <strong>De sushiman a empreendedor, essa é a história do Yorimichi Izakaya.</strong><br>
Fundada em 11 de Agosto de 2016 pelo sushiman Ken Mizumoto, com o propósito de empreender e fugir do trivial,
o Yorimichi é uma casa tradicional, tem um ambiente aconchegante, serve porções pequenas e tem
uma ampla variedade de cervejas, saquês e shochus. 
        </p>
        <p>
        O Yorimichi está sendo um grande aprendizado para Ken Mizumoto, além de administrar a casa, ele se preocupa
 com a questão financeira e a de pessoal. E com tanta dedicação, em 2017, o Yorimichi foi considerado o melhor izakaya de São Paulo. 
        </p>
      </div>
    </div>
    <div class="row no-gutters galeria-a">
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto2.jpg"; ?>" /></div>
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto3.jpg"; ?>" /></div>
        </div>
      </div>
      <div class="col-sm-6">
        <img style="max-height: 696px;" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto1.jpg"; ?>" />
      </div>
    </div>
  </div>
  <div id="destaques" class="home-menu">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <h2>Destaques</h2>
        <p>Entre os diferenciais, destaca-se o Kamameshi (arroz cozido em uma panela de ferro), a extensa variedade de yakitoris
(tradicionais espetinhos), Karasumi (ovas de tainha), tamagoyaki (omelete), Omuraisu (mexido de arroz com frango e omelete cremosa)
e com a preocupação de preservar o meio ambiente, utiliza carvão de eucalipto reflorestado na grelha.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters galeria-b">
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto5.jpg"; ?>" /></div>
          <div class="col-12"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto6.jpg"; ?>" /></div>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <img style="max-height: 697px;" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto4.jpg"; ?>" />
      </div>
      <div id="localizacao" class="col-md-12 mt-5  text-center">
        <h2 class="mb-3">Nossa localização</h2>
        <div class="row justify-content-center">
          <div class="col-md-4 text-left">
            Rua Otávio Nébias, 203 - Paraíso <br>
            São Paulo - SP - Brasil
          </div>
          <div class="col-md-4 text-left">
            De Segunda a Sábado: Das 18h30 às 0h30<br>
            Fechado aos Domingos e 3ª Segunda do mês
          </div>
        </div>
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
