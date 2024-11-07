<picture>
  <source srcset="{{ config('lauth.logomark_url.dark') }}" media="(prefers-color-scheme: dark)">
  <img src="{{ config('lauth.logomark_url.light') }}" alt="{{ config('app.name') }} Logomark" {{ $attributes }} />
</picture>
