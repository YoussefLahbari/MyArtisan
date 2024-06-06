<!-- resources/views/partials/rating-stars.blade.php -->
@for ($i = 0; $i < 5; $i++)
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 {{ $i < $rating ? 'text-yellow-400' : 'text-gray-300' }} ml-2" viewBox="0 0 20 20" fill="currentColor">
        <path d="M9.049 2.927a1 1 0 011.902 0l1.07 3.286h3.462a1 1 0 01.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.286a1 1 0 01-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034a1 1 0 01-1.538-1.118l1.07-3.286a1 1 0 00-.364-1.118L2.56 8.713a1 1 0 01.588-1.81h3.462l1.07-3.286z"/>
    </svg>
@endfor
