<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <div class="boxed row">
    <div class="col-md-12">
      <?php foreach($result as $row){
        echo '<a href=' . $row->id . '>';
        echo '<div class="post col-md-3">'; /* post col-md-3 open */
        echo '<div class="post-header">'; /* post-header open */
        echo '<img src="assets/custom/images/platforms/' . $row->platform . '.png" style="width: 30px; height: 30px; margin: 5px 0px 0px 10px;" />';
        echo '<img src=' . $row->division . '.png style="float: right; width: 30px; height: 30px; margin: 5px 5px 0px 0px;" />';
        echo '</div>'; /* post-header close */
        echo '<div class="post-content">'; /* post-content open */
        echo '<h3>' . $row->userid . '</h3>';
        echo '<div class="avatar"></div>';
        echo '<p>' . $row->description . '</p>';
        echo '</div>'; /* post-content close */
        echo '<div class="post-footer">'; /* post-footer open */
        echo '<div class="time"><p>1 Minute Ago</p></div>';
        echo '<div class="comments"><p>0</p><i class="fa fa-comments-o" aria-hidden="true"></i></div>';
        echo '</div>'; /* post-footer close */
        echo '</div>'; /* post-col-md-3 close */
        echo '</a>';
      }
      ?>
    </div>
  </div>
</div>
