<div id="centerbox">
  <div id="mainbox">

    <div id="header">
      <?php if (user_is_logged_in()): ?>
        <a href="/user/logout" class="logout-link">Uitloggen</a>
      <?php endif; ?>
      <div class="skiplinks">
        <p><span class="assistive">Ga direct naar</span><a
            title="Navigeer naar de inhoud" href="#content">Inhoud</a><span
            class="assistive">of</span><a id="skip-to-menu" class="active"
                                          title="Navigeer naar het hoofdmenu"
                                          href="#navigation">Menu</a></p>
      </div>

      <div id="branding">
        <a href="/">
          <?php if ($logo): ?>
            <img
              src="<?php print '/' . drupal_get_path('theme', 'koop2') . '/images/logo.png'; ?>"
              alt="Rijsoverheid" id="logotype">
          <?php endif; ?>

          <?php if ($site_name || $site_name2): ?>
            <div id="payoff">
              <?php if ($site_name) {
                print $site_name;
              } ?><span><?php if ($site_name2) {
                  print $site_name2;
                } ?></span>
            </div>
          <?php endif; ?>
        </a>
      </div>

      <?php if ($site_slogan): ?>
        <div id="application_titel">
          <?php print $site_slogan; ?>
        </div>
      <?php endif; ?>

      <div id="navigation">
        <?php if ($page['menu']): ?>
          <?php print render($page['menu']); ?>
        <?php endif; ?>
      </div>
    </div>

    <!--[if lt IE 8]>
    <div class="block-alert-message" id="block-site-message"><p class="lead">
      Deze site omarmt moderne standaarden en technieken.</p>

      <p>Uw webbrowser ondersteunt deze standaarden niet. Stap daarom over op
        een recente browser.</p></div><![endif]-->

    <div id="main">

      <div class="header">
        <div id="breadcrumb">
          <?php print $breadcrumb; ?>
        </div>

        <?php if (($title) && (!drupal_is_front_page())): ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if ($page['secondary_menu']): ?>
          <?php print render($page['secondary_menu']); ?>
        <?php endif; ?>
      </div>
      <?php print $messages; ?>

      <div class="mainform showleftbar" id="content">
        <?php if (($title) && (drupal_is_front_page())): ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php print render($tabs); ?>

        <div class="content_section text_format">
          <?php print render($page['content']); ?>

          <?php if ($page['clearfix1'] || $page['clearfix2'] || $page['clearfix3']): ?>
            <div class="clearfix">
              <?php if ($page['clearfix1']): ?>
                <div class="column first_column">
                  <?php print render($page['clearfix1']); ?>
                </div>
              <?php endif; ?>

              <?php if ($page['clearfix2']): ?>
                <div class="column">
                  <?php print render($page['clearfix2']); ?>
                </div>
              <?php endif; ?>

              <?php if ($page['clearfix3']): ?>
                <div class="column">
                  <?php print render($page['clearfix3']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>

      </div>

      <div id="sub_form">
        <?php print render($page['sub_form']); ?>
      </div>

    </div>

  </div>

  <div id="footer">
    <?php if ($page['footer_clearfix1'] || $page['footer_clearfix2'] || $page['footer_clearfix3']): ?>
      <div class="clearfix">
        <div class="column first_column">
          <?php if ($page['footer_clearfix1']): ?>
            <?php print render($page['footer_clearfix1']); ?>
          <?PHP else : ?>
            <p></p>
          <?php endif; ?>
        </div>

        <div class="column">
          <?php if ($page['footer_clearfix2']): ?>
            <?php print render($page['footer_clearfix2']); ?>
          <?PHP else : ?>
            <p></p>
          <?php endif; ?>
        </div>

        <div class="column">
          <?php if ($page['footer_clearfix3']): ?>
            <?php print render($page['footer_clearfix3']); ?>
          <?PHP else : ?>
            <p></p>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php print render($page['footer']); ?>
  </div>

</div>    
