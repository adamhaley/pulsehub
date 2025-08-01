<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @foreach( $tracks as $track )
        <p>
            {{ $track->name }} {{ $track->filename }}
        </p>

    @endforeach

</div>
