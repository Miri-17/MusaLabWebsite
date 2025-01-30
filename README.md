<div id="top"></div>

## 使用技術一覧

<!-- シールド一覧 -->
<p style="display: inline">
  <img src="https://img.shields.io/badge/-Html5-652321.svg?logo=html5&style=for-the-badge">
  <img src="https://img.shields.io/badge/-CSS-663399.svg?logo=css&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Javascript-CFAF1C.svg?logo=javascript&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Jquery-0769AD.svg?logo=jquery&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Php-505491.svg?logo=php&style=for-the-badge">
</p>

<!-- プロジェクトについて -->

## プロジェクトについて

ムサビゲームラボのWebサイト用に制作したオリジナルテーマです。

<p align="left">
  <!-- ムサビゲームラボWebサイトへのリンク -->
  <a href="https://musabigamelab.ciao.jp/"><strong>Webサイトへ »</strong></a>
</p>

<br/>

- htmlcss...オリジナルテーマ作成前に概形把握のために作ったHTMLやCSSのファイルが入ったディレクトリ
- templates...WordPressのプラグインやカスタムHTMLに使用したHTMLファイルが入ったディレクトリ
- wordpress/plugins...オリジナルプラグイン用ディレクトリ
- wordpress/themes...オリジナルテーマ用ディレクトリ

## ディレクトリ構成

<pre>
.
├── README.md
├── htmlcss
│   ├── 404.html
│   ├── archive.html
│   ├── assets
│   │   ├── css
│   │   │   └── styles.css
│   │   ├── images
│   │   │   ├── 404.jpg
│   │   │   ├── arrow-up.svg
│   │   │   ├── button-a.png
│   │   │   ├── button-e.png
│   │   │   ├── button-k.png
│   │   │   ├── button-m.png
│   │   │   ├── favicon.png
│   │   │   ├── icon-instagram.svg
│   │   │   ├── icon-mail.svg
│   │   │   ├── icon-search.svg
│   │   │   ├── icon-table01-hard-disk.svg
│   │   │   ├── icon-table02-sandglass.svg
│   │   │   ├── icon-table03-team.svg
│   │   │   ├── icon-table04-laptop.svg
│   │   │   ├── icon-table05-game.svg
│   │   │   ├── icon-table06-battle.svg
│   │   │   ├── icon-table07-target.svg
│   │   │   ├── icon-table08-calendar.svg
│   │   │   ├── icon-table09-director-chair.svg
│   │   │   ├── icon-table10-palette.svg
│   │   │   ├── icon-table11-fountain-pen.svg
│   │   │   ├── icon-table12-coding.svg
│   │   │   ├── icon-table13-eighth-note.svg
│   │   │   ├── icon-table14-star.svg
│   │   │   ├── icon-x.svg
│   │   │   ├── icon-youtube.svg
│   │   │   ├── logo.png
│   │   │   ├── tmb-default-member.jpg
│   │   │   ├── tmb-default-news.jpg
│   │   │   └── tmb-default.jpg
│   │   └── js
│   │       ├── image-slider.js
│   │       ├── script.js
│   │       └── search.js
│   ├── form.html
│   ├── index.html
│   ├── page-game.html
│   ├── page-making-games1.html
│   ├── page-making-games2.html
│   ├── page-member-detail.html
│   ├── page-what-is-musabigamelab.html
│   ├── search.html
│   ├── single.html
│   └── style.css
├── templates
│   ├── form_template.txt
│   └── history_template.txt
└── wordpress
    ├── plugins
    │   └── search-highlighter
    │       └── search-highlighter.php
    ├── themes
    │   └── musabigamelab
    │       ├── 404.php
    │       ├── archive.php
    │       ├── assets
    │       │   ├── css
    │       │   │   └── styles.css
    │       │   ├── images
    │       │   │   ├── 404.jpg
    │       │   │   ├── arrow-up.svg
    │       │   │   ├── button-a.png
    │       │   │   ├── button-e.png
    │       │   │   ├── button-k.png
    │       │   │   ├── button-m.png
    │       │   │   ├── favicon.png
    │       │   │   ├── icon-instagram.svg
    │       │   │   ├── icon-mail.svg
    │       │   │   ├── icon-medal.svg
    │       │   │   ├── icon-search.svg
    │       │   │   ├── icon-table01-hard-disk.svg
    │       │   │   ├── icon-table02-sandglass.svg
    │       │   │   ├── icon-table03-team.svg
    │       │   │   ├── icon-table04-laptop.svg
    │       │   │   ├── icon-table05-game.svg
    │       │   │   ├── icon-table06-battle.svg
    │       │   │   ├── icon-table07-target.svg
    │       │   │   ├── icon-table08-calendar.svg
    │       │   │   ├── icon-table09-director-chair.svg
    │       │   │   ├── icon-table10-palette.svg
    │       │   │   ├── icon-table11-fountain-pen.svg
    │       │   │   ├── icon-table12-coding.svg
    │       │   │   ├── icon-table13-eighth-note.svg
    │       │   │   ├── icon-table14-star.svg
    │       │   │   ├── icon-x.svg
    │       │   │   ├── icon-youtube.svg
    │       │   │   ├── logo.png
    │       │   │   ├── tmb-default-member.jpg
    │       │   │   ├── tmb-default-news.jpg
    │       │   │   └── tmb-default.jpg
    │       │   └── js
    │       │       ├── image-slider.js
    │       │       ├── script.js
    │       │       └── search.js
    │       ├── content-archive.php
    │       ├── content-gallery.php
    │       ├── content-making-games.php
    │       ├── content-member.php
    │       ├── content-single.php
    │       ├── content-tax.php
    │       ├── footer.php
    │       ├── front-page.php
    │       ├── functions.php
    │       ├── header-slider.php
    │       ├── header.php
    │       ├── index.php
    │       ├── page-contact.php
    │       ├── page-gallery.php
    │       ├── page-game-detail.php
    │       ├── page-history.php
    │       ├── page-individual-gallery.php
    │       ├── page-making-games.php
    │       ├── page-member.php
    │       ├── page-what-is-musabigamelab.php
    │       ├── page.php
    │       ├── search.php
    │       ├── single.php
    │       ├── style.css
    │       └── taxonomy.php
    └── xml
        └── WordPress.2024-08-30.xml
</pre>
        
<p align="right">(<a href="#top">トップへ</a>)</p>
