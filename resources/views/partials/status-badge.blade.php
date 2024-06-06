<!-- resources/views/partials/status-badge.blade.php -->
@switch($status)
    @case('approved')
        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">Approved</span>
        @break
    @case('high-sells')
        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">High Sells</span>
        @break
    @default
        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">New</span>
@endswitch
