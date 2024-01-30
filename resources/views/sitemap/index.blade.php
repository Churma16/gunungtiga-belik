<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($posts as $post)
        <url>
            <loc>{{ url($post->slug) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($post->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
            {{-- Example of using CDATA for special characters --}}
            <title><![CDATA[{{ $post->judul }}]]></title>
            {{-- Example of including additional information using XHTML --}}
            {{-- <xhtml:link rel="alternate" hreflang="en" href="{{ url($post->slug) }}" /> --}}
        </url>
    @endforeach
</urlset>
