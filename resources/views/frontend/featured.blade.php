<div class="news">
    <?php 
        $featured = App\Models\post::where('active', 1)->where('featured', 1)->orderBy('id', 'asc')->take(8)->get();
    ?>
    @if($featured->count()>0)
    @foreach($featured as $key => $value)

   
    <article>
        <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">
        <img src="{{ asset($value->image) }}" alt="{{ $value->title }}" />
        </a>
        <div class="info">
            <h3>
                <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">   
                    {{ $value->title }}
                </a>
            </h3>
        </div>
    </article>
   
    @endforeach
    @endif
</div>