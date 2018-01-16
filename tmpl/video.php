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
<section class="calltoaction video">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <div class="stage d-flex justify-content-center align-items-center" style="background-image: url('<?php echo $video_image ?>'); ">
          <div class="caption">
            <?php if($video_url) : ?>
              <a href="<?php echo $video_url ?>" title="<?php echo $module->title ?>" data-lity>
                <i class="fa fa-play-circle fa-5x" aria-hidden="true"></i>
              </a>
            <?php endif; ?>
            <?php if($video_caption) : ?>
              <p class="mt-5"><?php echo $video_caption ?></p>
            <?php endif; ?>
            <?php if($video_link) : ?>
              <p class="mt-5">
                <a href="<?php echo $video_link ?>" class="btn btn-outline-light btn-lg" title="<?php echo $module->title ?>">Scopri di più</a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
