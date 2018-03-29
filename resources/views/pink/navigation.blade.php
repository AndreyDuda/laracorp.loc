@if($menu)
    <div class="menu classic">
        <ul id="nav" class="menu">
        @include(env('THEME') . '.customMenuItem', ['items' => $menu->roots()])
        </ul>
    </div>

@endif