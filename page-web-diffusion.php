<?php
/**
 * Template Name: Web Diffusion — Landing Page Artisans
 *
 * =====================================================
 *  INSTRUCTIONS D'UTILISATION SANS FTP
 * =====================================================
 *
 *  OPTION A — Gutenberg (éditeur natif WordPress)
 *  ------------------------------------------------
 *  1. Dashboard WP → Pages → Ajouter
 *  2. En haut à droite, cliquer "..." → "Éditeur de code"
 *  3. Coller uniquement la section HTML entre les balises
 *     <!-- WP_CONTENT_START --> et <!-- WP_CONTENT_END -->
 *  4. Dans le panneau de droite → "Attributs de page"
 *     → Modèle : choisir "Web Diffusion — Landing Page Artisans"
 *  5. Publier
 *
 *  OPTION B — Divi Builder
 *  ------------------------------------------------
 *  1. Dashboard WP → Pages → Ajouter
 *  2. Cliquer "Utiliser Divi Builder" → "Créer depuis zéro"
 *  3. Ajouter une ligne pleine largeur
 *  4. Insérer le module "Code" (Divi → Module Code)
 *  5. Coller le HTML de chaque section dans des modules
 *     séparés (un module par section)
 *  6. Dans Paramètres de la page → Divi → désactiver
 *     l'en-tête et le pied de page si souhaité
 *  7. Coller le CSS dans : Tableau de bord → Apparence →
 *     Personnaliser → CSS additionnel
 *
 *  OPTION C — Theme File Editor (sans FTP)
 *  ------------------------------------------------
 *  1. Dashboard WP → Apparence → Éditeur de thème
 *  2. Créer un nouveau fichier template :
 *     page-web-diffusion.php (dans le thème enfant)
 *  3. Coller tout ce fichier PHP
 *  4. Aller dans Apparence → Personnaliser → CSS additionnel
 *     et coller le contenu de style.css
 *
 * =====================================================
 */

// Sécurité WordPress
defined('ABSPATH') || exit;

get_header();
?>

<!----------- STYLES INLINE (alternativement, ajouter dans Personnaliser → CSS additionnel) ----------->
<style>
/* Coller ici le contenu de style.css si vous utilisez ce template PHP */
/* ou enqueuer le fichier via functions.php */
</style>

<!-- WP_CONTENT_START -->

<!-- ===== HERO ===== -->
<section class="hero">
  <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/Vector (8).png" class="bg-shape" alt="">

  <div class="hero-container">
    <div class="left">
      <h1>
        Votre entreprise <br>
        mérite la <span class="yellow">1ère place</span> <br>
        sur <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/google 1 (1).png" class="google-logo" alt="Google">
      </h1>
      <p class="subtitle">Site web professionnel pour artisans</p>
      <div class="tags">Maçon · Plombier · Électricien · Menuisier · Peintre · Couvreur…</div>
      <p class="description">Attirez plus de clients locaux grâce à un site moderne, rapide et optimisé SEO.</p>

      <div class="features">
        <div class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 111.png" alt="Plus d'appels">
          <span>Plus d'appels</span>
        </div>
        <div class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 112.png" alt="Visibilité locale">
          <span>Visible dans votre ville</span>
        </div>
        <div class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 113.png" alt="SEO Google">
          <span>SEO Google inclus</span>
        </div>
      </div>

      <a href="#contact" class="cta">Je veux mon site artisan professionnel</a>
    </div>

    <div class="right">
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/Group 232.png" class="hero-image" alt="Aperçu site">
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/Vector (8).png" class="hero-imageii" alt="">
    </div>
  </div>
</section>


<!-- ===== SERVICES ===== -->
<section class="services">
  <div class="services-box">
    <?php
    $services = [
      ['image 95.png', 'Site professionnel<br>sur mesure'],
      ['image 96.png', 'Référencement<br>Google inclus'],
      ['image 97.png', 'Compatible<br>mobile & tablette'],
      ['image 98.png', 'Livraison<br>rapide'],
      ['image 99.png', 'Plus de<br>visibilité locale'],
    ];
    foreach ($services as $s) : ?>
    <div class="service-item">
      <div class="service-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/<?php echo $s[0]; ?>" alt="">
      </div>
      <h3><?php echo $s[1]; ?></h3>
    </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- ===== PRESENTATION ===== -->
<section class="presentation">
  <h2>Développez votre <span>activité d'artisan</span><br>avec un site web performant</h2>

  <div class="presentation-grid">
    <div class="presentation-card">
      <h3>Création De Site Pour Artisans</h3>
      <p>Présentez vos réalisations, vos services et inspirez confiance à vos futurs clients.</p>
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/Group 235.png" alt="Site artisan">
    </div>
    <div class="presentation-card">
      <h3>Référencement Google SEO</h3>
      <p>Apparaissez devant vos concurrents lorsque vos clients vous recherchent.</p>
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/capgoogle.PNG" alt="SEO Google">
    </div>
  </div>

  <a href="#contact" class="cta center-btn">Je veux mon site artisan professionnel</a>
</section>


<!-- ===== POURQUOI ===== -->
<section class="why">
  <div class="why-container">
    <h2>Pourquoi Choisir Web Diffusion ?</h2>
    <div class="why-grid">
      <?php
      $why = [
        ['image 100.png', 'Expertise Digitale',   'Spécialistes des sites web qui génèrent des clients.'],
        ['image 101.png', 'Optimisation Google',   'Soyez trouvé par vos clients près de chez vous.'],
        ['image 102.png', 'Design Moderne',         'Un site à votre image qui inspire confiance.'],
        ['image 103.png', 'Plus de demandes',       'Transformez les visiteurs en clients.'],
        ['image 104.png', 'Accompagnement',         'Un interlocuteur dédié à votre réussite.'],
      ];
      foreach ($why as $w) : ?>
      <div class="why-card">
        <div class="why-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/<?php echo $w[0]; ?>" alt="">
        </div>
        <h3><?php echo $w[1]; ?></h3>
        <p><?php echo $w[2]; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ===== PORTFOLIO ===== -->
<section class="portfolio">
  <h2>Des sites conçus pour <span>générer des clients</span></h2>

  <div class="portfolio-filter">
    <span><img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 107.png" alt=""> Rapides</span>
    <span><img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 108.png" alt=""> Modernes</span>
    <span><img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 109.png" alt=""> Optimisés Google</span>
    <span><img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 110.png" alt=""> Adaptés aux artisans</span>
  </div>

  <div class="portfolio-grid">
    <?php
    $portfolio = [
      ['Group 240.png', 'Assainissement'],
      ['Group 241.png', 'Architecture'],
      ['Group 278.png', 'Construction'],
      ['Group 276.png', 'Ophtalmologie'],
      ['Group 242.png', 'Assainissement'],
      ['Group 247.png', 'Architecture'],
      ['Group 244.png', 'Construction'],
      ['Group 245.png', 'Ophtalmologie'],
    ];
    foreach ($portfolio as $p) : ?>
    <div class="portfolio-card">
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/<?php echo $p[0]; ?>" alt="Site <?php echo $p[1]; ?>">
      <div class="portfolio-content">
        <h3>Réalisation Site <?php echo $p[1]; ?></h3>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <a href="#contact" class="cta center-btn">Je veux mon site artisan professionnel</a>
</section>


<!-- ===== GOOGLE SEO ===== -->
<section class="google-section">
  <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/Vector.png" class="google-bg-shape" alt="">

  <div class="google-container">
    <div class="google-left">
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/image 93.png" class="google-ranking" alt="Classement Google">
    </div>

    <div class="google-center">
      <h2>Soyez trouvé avant<br>vos concurrents<br>sur <span>Google</span></h2>
      <p>Aujourd'hui, la majorité des clients cherchent un artisan directement sur Google.</p>
      <div class="google-list">
        <div class="google-item">
          <span class="red-dot"></span>
          Si votre entreprise n'apparaît pas : vos concurrents récupèrent les clients à votre place.
        </div>
        <div class="google-item">
          <span class="green-dot"></span>
          Nous créons des sites optimisés SEO pour améliorer votre visibilité locale et attirer plus de demandes.
        </div>
      </div>
    </div>

    <div class="google-right">
      <img src="<?php echo get_template_directory_uri(); ?>/Asset/img/homme tablette.png" class="google-worker" alt="Artisan tablette">
    </div>
  </div>
</section>


<!-- ===== CONTACT ===== -->
<section class="contact" id="contact">
  <div class="contact-left">
    <h2>Obtenez un site<br>web <span>qui travaille</span><br><span>pour vous</span></h2>
    <div class="contact-features">
      <div class="contact-badge">✅ Plus de visibilité</div>
      <div class="contact-badge">📞 Plus d'appels clients</div>
      <div class="contact-badge">🏆 Meilleur positionnement</div>
      <div class="contact-badge">📋 Devis gratuit</div>
      <div class="contact-badge">🤝 Sans engagement</div>
      <div class="contact-badge">⚡ Réponse sous 24h</div>
    </div>
  </div>

  <div class="contact-right">
    <?php
    // Utiliser le formulaire natif WordPress ou Contact Form 7
    // Pour Contact Form 7 : remplacer le <form> ci-dessous par :
    // <?php echo do_shortcode('[contact-form-7 id="VOTRE_ID"]'); ?>
    ?>
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
      <?php wp_nonce_field('wd_contact_form', 'wd_nonce'); ?>
      <input type="hidden" name="action" value="wd_contact">

      <input type="text"  name="nom"       placeholder="Votre Nom"      required>
      <input type="email" name="email"     placeholder="Votre Email"    required>
      <input type="tel"   name="telephone" placeholder="Votre Téléphone">

      <select name="projet">
        <option value="" disabled selected>Votre Projet</option>
        <option value="site">Site Web</option>
        <option value="seo">SEO Google</option>
        <option value="landing">Landing Page</option>
      </select>

      <button type="submit">Je veux mon site artisan professionnel</button>
    </form>
  </div>
</section>

<!-- WP_CONTENT_END -->

<?php get_footer(); ?>
