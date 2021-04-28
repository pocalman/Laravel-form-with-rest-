<?php 
if(!isset($show)) $show = true;
if($show == '' || $show == '0') $show = null;
if ($show !== null) : ?>
<div class="single__complementary-block">
    <h2 class="single__complementary-block-title"><x-fa n="{{ $icon ?? 'folder' }}"/> {{$title}}</h2>
    <div class="single__complementary-block-content">
        {{ $slot }}
    </div>
</div>
<?php endif; ?>