<footer class="footer">
    <div class="container">
        <div class="content">
            <div class="columns">
                <div class="column is-3">
                   
                </div>
                <div class="column is-3">
                    <p class="title is-5">{{ __('app.footer.latest') }}</p>
                    @foreach (getFooterArticles() as $article)
                        <p><a href="{{ $article->link }}">{{ $article->title }}</a></p>
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
</footer>
