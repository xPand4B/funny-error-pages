@php
    $possibleTemplates = config('funny-error-pages.active_error_pages.404');
    $randIndex = array_rand($possibleTemplates);
    $templateToInclude = '404.'.$possibleTemplates[$randIndex];
@endphp

@includeFirst(['funny-error-pages.'.$templateToInclude, 'funny-error-pages::'.$templateToInclude])
