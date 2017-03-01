<?php $app_vars = $_SESSION;
unset($app_vars['DEBUG']); ?>
<div class="debug"><a style="cursor: pointer; color: #27c2d8;" onclick="javascript:$('.debug-content').toggle();">X</a> <span>Debug window</span>
    <div class="debug-content" style="display: none; max-height: 500px;">
        <div class="col-md-6" style="overflow: auto; max-height: 500px;">SESSION: <pre><?php print_r($app_vars); ?></pre></div>
        <div class="col-md-6" style="overflow: auto; max-height: 500px;">DEBUG: <pre><?php print_r($_SESSION['DEBUG']); ?></pre></div>
    </div>
</div>