<div>
    <form method="POST" action="{{ route('track.update', $track) }}">
        <input type="hidden" name="id" value="{{ $track->id  }}">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $track->name }}">
        <input type="text" name="filename" value="{{ $track->filename }}">


        <input type="submit" >
    </form>


</div>
