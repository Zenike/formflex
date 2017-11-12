# FORMFLEX
### <http://flexvision.be/formflex/sliker.php>

`sliker` est un plugin slider/slideshow écrit en `jQuery`

# dépendances
- `jQuery`: une version récente sans limitation précise
- `Less`: le css de ce plugin est écrit en LESS, quelques variables de couleur devront être définies pour son bon fonctionnement.

# Installation
1. récuperer les fichiers `formflex.less` et `formflex.js` à la racine du projet GitHUb
2. inclure le fichier `formflex.js` dans la document avant la fermeture de la balise `</body>`
3. lier et génerer un css à partir de `formflex.less`
4. incorporer les variables de personnalisation dans le code

# variables de personnalisation
- variables less à inclure avant formflex.less
```css
/* FORMFLEX GENERAL */
@formflex_input_height: 60px;/*27px*/
@formflex_input_bgcolor: #333;/*#fff*/
@formflex_input_font_size: 16px;/*12px*/
@formflex_input_font_weight: normal;/*12px*/
@formflex_input_fontcolor: #fff;/*@tm*/
@formflex_input_round: 5px;/*0px*/
@formflex_input_disbled_bgcolor: @gris_clair;/*@gris_clair*/
@formflex_icons_fz: 18px;/*18px*/
@formflex_bd: skyblue;/*#aaa*/
@formflex_bd_hover: red;/*#555*/
@formflex_main_color_theme: @theme;/*@theme*/
@formflex_main_color_theme_hover: @theme_light;/*@theme_light*/
@formflex_main_color_theme_mousedown: @theme_dark;/*@theme_dark*/

/* FORMFLEX NAME */
@formflex_name_fz: 12px;/*12px*/
@formflex_name_color: @t;/*@t*/
@formflex_name_color_hover: #000;/*#000*/
@formflex_name_font_weight: normal;/*#000*/

/* FORMFLEX CHECKSKIN */
@formflex_checkskin_fz: 18px;/*18px*/
@formflex_checkskin_checkbox_round: 5px;/*5px*/
@formflex_checkskin_iconcolor: #fff;/*#fff*/
@formflex_checkskin_input_size_decal: 0px;/*0px*/
@formflex_checkskin_bg_color: #fff;/*#fff*/
@formflex_checkskin_bg_color_checked: @theme;/*@theme*/
@formflex_checkskin_bg_color_checked_hover: @theme_light;/*@theme_light*/
@formflex_checkskin_bg_color_mousedown: @theme_dark;/*@theme_dark*/
@formflex_checkskin_bd_color: #aaa;/*#aaa*/
@formflex_checkskin_bd_color_hover: #555;/*#555*/
.formflex_checkskin_pimping {}/*cible directement span.input*/
```
