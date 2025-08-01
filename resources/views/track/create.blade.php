<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <form method="post" action="{{ route('track.store') }}">
        @csrf
        <input type="text" name="name">
        <input type="text" name="filename">
        <input type="hidden" name="category_id" value="1">

        <input type="submit" >
    </form>


</div>
