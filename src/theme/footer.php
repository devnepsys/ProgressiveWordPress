<?
  /**
   * Copyright 2017 Google Inc. All Rights Reserved.
   * Licensed under the Apache License, Version 2.0 (the "License");
   * you may not use this file except in compliance with the License.
   * You may obtain a copy of the License at
   *     http://www.apache.org/licenses/LICENSE-2.0
   * Unless required by applicable law or agreed to in writing, software
   * distributed under the License is distributed on an "AS IS" BASIS,
   * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   * See the License for the specific language governing permissions and
   * limitations under the License.
   */
?>
<?
  require_once(dirname(__FILE__).'/../../../wp-load.php');
  etag_start();
?>
  </pwp-view>
  <footer class="footer">
    <div class="footer__signoff">
      Made with 💻 by Surma
    </div>
    <div class="footer__social">
      <a href="https://github.com/GoogleChrome/ProgressiveWordPress">
        <img src="<?=get_bloginfo('template_url');?>/images/github.svg">
      </a>
      <a href="https://twitter.com/DasSurma">
        <img src="<?=get_bloginfo('template_url');?>/images/twitter.svg">
      </a>
      <a href="#">
        <img src="<?=get_bloginfo('template_url');?>/images/rss.svg">
      </a>
    </div>
    <? wp_nav_menu(array('theme_location' => 'footer-nav')); ?>
  </footer>
  <script>
    window._wordpressConfig = {
      templateUrl: new URL('<?=get_bloginfo('template_url');?>').toString(),
      baseUrl: new URL('<?=home_url();?>').toString(),
    };
  </script>
  <script src="<?=get_bloginfo('template_url');?>/scripts/import-polyfill.js" defer></script>
  <script src="<?=get_bloginfo('template_url');?>/scripts/ric-polyfill.js" defer></script>
  <script src="<?=get_bloginfo('template_url');?>/scripts/pubsubhub.js" defer></script>
  <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/pwp-view.js"></script>
  <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/router.js"></script>
  <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/lazyload.js"></script>
  <template class="lazyload">
    <script src="<?=get_bloginfo('template_url');?>/scripts/idb.js" defer></script>
    <script src="<?=get_bloginfo('template_url');?>/scripts/bg-sync-manager.js" defer></script>
    <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/install-sw.js"></script>
    <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/pending-comments.js"></script>
    <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/resource-updates.js"></script>
    <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/pwp-lazy-image.js"></script>
    <script type="module" src="<?=get_bloginfo('template_url');?>/scripts/offline-articles.js"></script>
  </template>
</body>
<?
  etag_end();
?>
