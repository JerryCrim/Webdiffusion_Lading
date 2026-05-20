# Web Diffusion — Guide d'intégration

## Fichiers fournis
| Fichier | Rôle |
|---|---|
| `index.html` | Version HTML standalone corrigée |
| `style.css` | CSS nettoyé, responsive complet |
| `page-web-diffusion.php` | Template WordPress (PHP) |

---

## ✅ Ce qui a été corrigé

### HTML
- Suppression des doublons de balises `<body>`, `<hero>` et de styles redondants
- Suppression du bug `-----` parasite dans le CSS (ligne 130)
- Attribut `alt` manquant ajouté sur toutes les images
- `<form>` : ajout `type="email"` et `type="tel"` corrects
- Liens `href="#"` → `href="#contact"` sur tous les CTA
- Structure sémantique propre (`<header>`, `<section>`, `<footer>`)

### CSS
- CSS entièrement réécrit sans doublons (body, .hero, .left, .right, .logo, .features, .cta, .top-btn — tous déclarés 2 fois dans l'original)
- Valeur invalide supprimée : `width: 10;` dans `.google-bg-shape`
- Variable CSS `--border` non définie supprimée du nav
- `position: absolute` sur `.top-btn` remplacé par flexbox propre
- Points de rupture responsive consolidés : 480 / 768 / 992px
- Débordements mobiles corrigés (hero-imageii, google-worker)

### Mobile
- Nav collapsée avec taille de bouton adaptée
- Hero en colonne avec textes réduits progressivement
- Services en grille 2 colonnes → 1 colonne
- Portfolio : 4 col → 2 col → 1 col
- Why-grid : 5 col → 2 col → 1 col
- Contact : 2 colonnes → 1 colonne empilée
- Footer centré sur mobile

---

## 🔌 Intégration WordPress (sans FTP)

### Méthode 1 — Éditeur de thème (recommandé)
1. **Dashboard → Apparence → Éditeur de thème**
2. Dans votre **thème enfant**, créer `page-web-diffusion.php`
3. Coller le contenu du fichier `page-web-diffusion.php`
4. **Apparence → Personnaliser → CSS additionnel** → coller `style.css`
5. Créer une page WP → sélectionner le template **"Web Diffusion — Landing Page Artisans"**

### Méthode 2 — Divi Builder
1. Créer une page → **Utiliser Divi Builder**
2. Ajouter une **section pleine largeur** par section du site
3. Dans chaque section, insérer un module **Code**
4. Copier/coller le HTML de chaque `<section>` du fichier `index.html`
5. CSS → **Dashboard → Divi → Options du thème → CSS personnalisé** ou Personnaliser → CSS additionnel
6. Les chemins d'images doivent pointer vers la **Médiathèque WP** → remplacer `Asset/img/NOM.png` par l'URL de la médiathèque

### Méthode 3 — Éditeur Gutenberg (bloc HTML)
1. Créer une page → basculer en **"Éditeur de code"** (⋮ en haut à droite)
2. Coller le contenu entre `<!-- WP_CONTENT_START -->` et `<!-- WP_CONTENT_END -->` du fichier PHP
3. CSS → **Apparence → Personnaliser → CSS additionnel**

### Méthode 4 — Contact Form 7 (formulaire)
Dans le template PHP, remplacer le `<form>` par :
```php
<?php echo do_shortcode('[contact-form-7 id="VOTRE_ID"]'); ?>
```

---

## 🖼️ Images
Les images doivent être uploadées dans **Médiathèque → WP** et les URL remplacées dans le code.
Ou, en mode HTML statique, conserver le dossier `Asset/img/` à côté de `index.html`.
