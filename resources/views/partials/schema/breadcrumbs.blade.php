{{-- Usage: @include('partials.schema.breadcrumbs', ['crumbs' => [['Home', url('/')], ['Products', url('/products')]]]) --}}
@include('partials.schema.json', ['data' => [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => collect($crumbs)->values()->map(fn ($c, $i) => [
        '@type' => 'ListItem',
        'position' => $i + 1,
        'name' => $c[0],
        'item' => $c[1],
    ])->all(),
]])
