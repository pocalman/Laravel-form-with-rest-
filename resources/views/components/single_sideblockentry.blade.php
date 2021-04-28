<?php
if(!isset($show)) $show = true;
if($show === '' || $show === '0') $show = null;
if ($show !== null) : ?>
    @isset($icon)
    <div class="single__complementary-block-content-layout">
        <x-fa n="{{$icon ?? ''}}" />
        <span>
            {{ $slot }}
        </span>
    </div>
    @endisset
    @empty($icon)
    {{$slot}}
    @endempty
    @empty($hr)<hr />@endempty
<?php endif; ?>