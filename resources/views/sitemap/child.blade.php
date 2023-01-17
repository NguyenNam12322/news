<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://cachsuadienmay.vn</loc>
		<lastmod>2023-01-17</lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	@if($category->count()>0)
	@foreach($category as $categories)

	<url>
		<loc>https://cachsuadienmay.vn/{{ $categories->link }}</loc>
		<lastmod>{{  carbon\carbon::now()->format('Y-m-d') }}</lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>

	@endforeach
	@endif

</urlset>