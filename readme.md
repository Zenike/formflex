# FORMFLEX
### <http://10.1.1.200/web/formflex/examples/>

`sliker` est un plugin slider/slideshow écrit en `jQuery`

# dépendances
- `jQuery`: une version récente sans limitation précise
- `Less`: le css de ce plugin est écrit en LESS, quelques variables de couleur devront être définies pour son bon fonctionnement.

# Installation
1. récuperer les fichiers `formflex.less` et `formflex.js` à la racine du projet GitHUb
2. inclure le fichier `formflex.js` dans la document avant la fermeture de la balise `</body>`
3. lier et génerer un css à partir de `formflex.less`
4. incorporer les variables de personnalisation ci dessous dans les less du projet

# variables de personnalisation
- variables less à inclure avant formflex.less
```css
/* FORMFLEX GENERAL */
@formflex_input_height: 60px;
@formflex_input_bgcolor: #333;
@formflex_option_bgcolor: #333;
@formflex_input_font_size: 16px;
@formflex_input_font_weight: normal;
@formflex_input_fontcolor: #fff;
@formflex_input_round: 5px;
@formflex_input_disabled_bgcolor: #888;
@formflex_icons_fz: 18px;
@formflex_bd: skyblue;
@formflex_bd_hover: red;
@formflex_main_color_theme: @theme;
@formflex_main_color_theme_hover: @theme_light;
@formflex_main_color_theme_mousedown: @theme_dark;

/* FORMFLEX NAME */
@formflex_name_fz: 12px;
@formflex_name_color: #333;
@formflex_name_color_hover: #000;
@formflex_name_font_weight: normal;

/* FORMFLEX CHECKSKIN */
@formflex_checkskin_fz: 18px;
@formflex_checkskin_checkbox_round: 5px;
@formflex_checkskin_iconcolor: #fff;
@formflex_checkskin_input_size_decal: 0px;
@formflex_checkskin_bg_color: #fff;
@formflex_checkskin_bg_color_checked: @theme;
@formflex_checkskin_bg_color_checked_hover: @theme_light;
@formflex_checkskin_bg_color_mousedown: @theme_dark;
@formflex_checkskin_bd_color: #aaa;
@formflex_checkskin_bd_color_hover: #555;
```

