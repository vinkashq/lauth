<picture>
  <source srcset="{{ config('lauth.logo_url.dark') }}" media="(prefers-color-scheme: dark)">
  <img src="{{ config('lauth.logo_url.light') }}" alt="{{ config('app.name') }} Logo" {{ $attributes }}>
</picture>
