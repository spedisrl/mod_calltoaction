<?php
/**
 * @version    1.0.x
 * @package    Call to action
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) Spedi srl.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;
?>

<section class="calltoaction video-bg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 video-bg-wrap p-0">
        <video autoplay="" loop="">
          <!-- <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4" /><!-- Safari / iOS video    --> -->
          <source src="<?php echo $videobg_url ?>" type="video/webm" /><!-- Firefox / Opera / Chrome10 -->
        </video>
        <div class="caption">
          <?php if($videobg_caption): ?>
            <p><?php echo $videobg_caption ?></p>
          <?php endif; ?>
          <?php if($videobg_link): ?>
            <p><a href="<?php echo $videobg_link ?>" role="button" class="btn btn-outline-primary">Scopri di più</a></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
